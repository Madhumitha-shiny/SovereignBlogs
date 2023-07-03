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
    <title>Blog View Page</title>
    <link rel="stylesheet" href="category_style.css">
</head>

<body>
    <?php
    include 'header.php';
    $id = $_GET['bid'];
    ?>
    <div class="container p-5">
        <div style="background-color:rgb(255, 240, 221);border-style:dashed;border-color:black;border-width:5px;" class="card shadow p-5">
            <div class="row">
                <?php
                $query = "SELECT * FROM blogs WHERE blogid = '$id'";
                $query_run = mysqli_query($con, $query);
                $row = mysqli_fetch_array($query_run);
                ?>
                <div style="color:black;" class="col">
                    <div>
                        <?php if ($row['cimg'] == "img/") { ?>
                            <?php if ($row['category'] == 'food') { ?>
                                <img src="img/food.jfif" height="220" width="380" />
                            <?php } else if ($row['category'] == 'travel') { ?>
                                <img src="img/travel.jfif" height="220" width="380" />
                            <?php } else if ($row['category'] == 'health') { ?>
                                <img src="img/health.jpg" height="220" width="380" />
                            <?php } else if ($row['category'] == 'sports') { ?>
                                <img src="img/sports.jpg" height="220" width="380" />
                            <?php } ?>
                        <?php } else { ?>
                            <img src="<?php echo $row['cimg'] ?>" height="220" width="380" />
                        <?php } ?>

                    </div>
                    <div>
                        <div class="row my-3">
                            <h2 style="color: red;"><?php echo $row['title'] ?></h2>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="font-weight: bold;" class="m-1">DATE</p>
                            </div>
                            <div class="col">
                                <p><?php echo $row['created'] ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="font-weight: bold;" class="m-1">AUTHOR NAME</p>
                            </div>
                            <div class="col">
                                <p><?php echo $row['userid'] ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <a href="myblogs.php?bid=<?php echo $row['blogid'] ?>" class="btn btn-warning m-3">GO BACK</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <div class="row">
                            <h5><?php echo $row['story'] ?></h5>
                        </div>
                        <div class="row">
                            <div class="col">
                            </div>
                            <div class="col">
                                <img style="float: right;" src="img/1.png" width="40%" />
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $new_query = "SELECT * FROM comments c, users u WHERE c.bid = '$id' and c.uid=u.id";
                            $run = mysqli_query($con, $new_query);
                            while ($data = mysqli_fetch_array($run)) {
                            ?>

                                <div style="border-radius: 20px;background-color:rgb(186, 223, 255);color:black" class="row m-1">
                                    <div class="col-1 align-self-center m-4">
                                        <?php if ($data['gender'] == "Male") { ?>
                                            <img style="border-radius: 100%;" class="shadow" src="img/user.png" alt="user" width="250%">
                                        <?php } else if ($data['gender'] == 'Female') { ?>
                                            <img style="border-radius: 100%;" class="shadow" src="img/fuser.png" alt="user" width="250%">
                                        <?php } else { ?>
                                            <img style="border-radius: 100%;" class="shadow" src="img/cuser.png" alt="user" width="250%">
                                        <?php } ?>
                                    </div>
                                    <div class="col">
                                        <div style="font-weight:bold" class="row">
                                            <?php echo $data['uid'] ?>
                                        </div>
                                        <div style="font-size: 18px;" class="row">
                                            <?php echo $data['comment'] ?>
                                        </div>
                                        <div style="font-size: 18px;" class="row">
                                            <p>likes <?php echo $data['clikes'] ?></p>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js">

    </script>
</body>

</html>