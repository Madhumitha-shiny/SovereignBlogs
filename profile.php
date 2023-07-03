<?php
include 'commom.php';
include 'mode.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <title>Profile Page</title>
    <link rel="stylesheet" href="profile_style.css">
</head>

<body>
    <?php
    include 'header.php';
    $name = $_SESSION['id'];
    $b = $_GET['b'];
    ?>
    <div class="container m-5">
        <div class="row">
            <div style="border-style:dashed;border-width:5px;border-color:blueviolet" class="col-lg mog-mb-12 p-5 card m-4">
                <?php
                $query = "SELECT * FROM users WHERE id = '$name'";
                $query_run = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($query_run)) {
                ?>
                    <?php if ($b == 1) { ?>
                        <div class="row text-center">
                            <div class="col">
                                <img class="m-2" style="border-radius: 50%;" class="shadow" src="<?php echo $row['img'] ?>" alt="user" height="200" width="200">
                            </div>
                            <div class="col align-self-center">
                                <form class="text-center" action="addpic.php?id=<?php echo $name ?>" method="POST">
                                    <input type="file" id="img" name="img" accept="image" /></i>
                                    <input class="btn btn-warning" type="submit">
                                </form>
                                <h2 class="btn btn-primary m-2">UniqueID : <?php echo $name; ?></h2>
                            </div>



                        </div>
                        <div class="row">
                            <hr>
                            <h4 class="col">Profile create</h4>
                            <p class="col"><?php echo $row['pagecreated']; ?></p>
                        </div>
                        <form action="editprofile.php" method="POST">
                            <div class="row">
                                <hr>
                                <h4 class="col">Name</h4>
                                <p class="col"><input type="text" name="fname" value="<?php echo $row['firstname']; ?>"></p>
                            </div>
                            <div class="row">
                                <hr>
                                <h4 class="col">Phone number</h4>
                                <p class="col">+91 <input type="text" name="phone" value="<?php echo $row['phonenumber']; ?>"></p>
                            </div>
                            <div class="row">
                                <hr>
                                <h4 class="col">Email</h4>
                                <p class="col"><input type="text" name="email" value="<?php echo $row['email']; ?>"></p>
                            </div>
                            <div class="row">
                                <hr>
                                <h4 class="col">Gender</h4>
                                <p class="col"><?php echo $row['gender']; ?></p>
                            </div>
                            <div class="row">
                                <br>
                                <div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-success m-3">SUBMIT</button>
                                        <a href="profile.php?b=0" class="btn btn-warning m-3">GO BACK</a>
                                    </div>
                                </div>
                            </div>
                        </form>

                    <?php } else { ?>
                        <div class="text-center">
                            <img class="m-2" style="border-radius: 50%;" class="shadow" src="<?php echo $row['img'] ?>" alt="user" height="200" width="200">

                            <h2 class="btn btn-primary">UniqueID : <?php echo $name; ?></h2>
                        </div>
                        <div class="row">
                            <hr>
                            <h4 class="col">Profile create</h4>
                            <p class="col"><?php echo $row['pagecreated']; ?></p>
                        </div>
                        <div class="row">
                            <hr>
                            <h4 class="col">Name</h4>
                            <p class="col"><?php echo $row['firstname']; ?></p>
                        </div>
                        <div class="row">
                            <hr>
                            <h4 class="col">Phone number</h4>
                            <p class="col">+91 <?php echo $row['phonenumber']; ?></p>
                        </div>
                        <div class="row">
                            <hr>
                            <h4 class="col">Email</h4>
                            <p class="col"><?php echo $row['email']; ?></p>
                        </div>
                        <div class="row">
                            <hr>
                            <h4 class="col">Gender</h4>
                            <p class="col"><?php echo $row['gender']; ?></p>
                        </div>
                        <div class="row">
                            <hr>
                            <h4 class="col">Subscription Plan</h4>
                            <p class="col"><?php echo $row['subscribe']; ?></p>
                        </div>
                        <div class="row">
                            <a href="profile.php?b=1" class="btn btn-warning mt-3">Edit your profile</a>
                        </div>
                    <?php } ?>



            </div>
            <div style="border-style:dashed;border-width:5px;border-color:blueviolet" class="col-lg mog-mb-12 card m-4">
                <div style="border-style:dashed;border-width:5px;border-color:coral" class="row card p-4 m-3">
                    <hr>
                    <div class="row">
                        <h3 class="col-auto">Bio</h3>
                        <div class="col-auto"><i class="fa fa-quote-left" style="font-size:28x"></i></div>
                        <p class="col">
                            <i class="fa fa-quote-right" style="font-size:28x"></i>
                        </p>
                    </div>
                    <hr>
                    <div class="row">
                        <?php if ($b == 1) { ?>
                            <form action="addbio.php" method="POST">
                                <div class="row">
                                    <textarea name="bio" class="p-3" rows='8' ?><?php echo $row['bio'] ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-success m-3">SUBMIT</button>
                                <a href="profile.php?b=0" class="btn btn-warning m-3">GO BACK</a>
                            </form>
                        <?php } else { ?>
                            <p><?php echo $row['bio']; ?></p>
                            <a href="profile.php?b=1" class="btn btn-primary mt-3">Edit your BIO</a>
                        <?php } ?>
                    </div>
                </div>
                <div style="border-style:dashed;border-width:5px;border-color:darkblue" class="row card p-4 m-3">
                    <hr>
                    <h4>Click here to view your blogs</h4>
                    <hr>
                    <a href="myblogs.php">
                        <p class="btn btn-lg btn-dark">
                            My blogs
                        </p>
                    </a>
                </div>
                <div style="border-style:dashed;border-width:5px;border-color:orange" class="row card p-4 m-3">
                    <hr>
                    <h4>To subscribe right away and receive some fun goodies, click here.</h4>
                    <hr>
                    <a href="subscription.php">
                        <p class="btn btn-lg btn-danger">
                            My blogs
                        </p>
                    </a>
                </div>
            </div>
        <?php
                }
        ?>
        </div>
    </div>
</body>

</html>