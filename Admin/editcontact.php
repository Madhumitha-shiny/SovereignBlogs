<?php

use Google\Service\Vision;

include 'commom.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <title>edit about Page</title>
    <link rel="stylesheet" href="edit.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div style="background-color:lightgrey" class="col-lg-3 col-mb-12 py-3">
                <?php
                $id = $_SESSION['id'];
                $query = "SELECT * FROM admins WHERE id = '$id'";
                $run = mysqli_query($con, $query);
                $data = mysqli_fetch_array($run);
                $edit = $_GET['edit'];
                $q1 = "SELECT * FROM contact";
                $r2 = mysqli_query($con, $q1);
                $d2 = mysqli_fetch_array($r2); ?>

                <div class="row p-3 text-center">
                    <div>
                        <img style="border-radius: 50%;" height="200" width="200" src="img/user.png" alt="user">
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col">
                        <h5>Name</h5>
                    </div>
                    <div class="col"><?php echo $data['firstname'] . " " . $data['lastname'] ?></div>
                </div>
                <div class="row m-2">
                    <div class="col">
                        <h5>Email ID</h5>
                    </div>
                    <div class="col"><?php echo $data['email'] ?></div>
                </div>
                <div class="row m-2">
                    <div class="col">
                        <h5>Phone numner</h5>
                    </div>
                    <div class="col"><?php echo $data['phonenumber'] ?></div>
                </div>
                <div class="row m-2">
                    <div class="col">
                        <h5>Gender</h5>
                    </div>
                    <div class="col"><?php echo $data['gender'] ?></div>
                </div>
                <div class="row p-2 m-2">
                    <a class="btn btn-light" href="index.php?task=0">Dashboard</a>
                </div>
                <div class="row p-2 m-2">
                    <a class="btn btn-light" href="editabout.php?edit=0">Edit About</a>
                </div>
                <div class="row p-2 m-2">
                    <a class="btn btn-warning" href="editcontact.php?edit=0">Edit Contact Info</a>
                </div>
                <a href="logout.php" class="btn btn-lg btn-danger p-2 m-2">LOGOUT</a>
            </div>
            <div class="col m-4">
                <form method="POST" action="conedit.php">
                    <div style="border: 3px dashed blue;" class="row p-2 m-2 card">
                        <h1>PHONE NUMBER</h1>

                        <?php if ($edit == 1) { ?>
                            <textarea name="phone" id="phone" cols="20" rows="2"><?php echo $d2['phone'] ?>
                        </textarea>
                            <div class="m-2">
                                <input class="btn btn-success" type="submit" value="SUBMIT"></a>
                                <a href="editcontact.php?edit=0" class="btn btn-warning">GO BACK</a>
                            </div>

                        <?php } elseif ($edit == 0) { ?>
                            <div>
                                <?php echo $d2['phone'] ?>
                                <a href="editcontact.php?edit=1" class="btn btn-primary">Edit</a>
                            </div>
                        <?php } ?>
                    </div>
                    <div style="border: 3px dashed purple;" class="row p-2 m-2 card">
                        <h1>ADDRESS</h1>

                        <?php if ($edit == 1) { ?>
                            <textarea name="address" id="address" cols="20" rows="4"><?php echo $d2['address'] ?></textarea>
                            <div class="m-2">
                                <input class="btn btn-success" type="submit" value="SUBMIT"></a>
                                <a href="editcontact.php?edit=0" class="btn btn-warning">GO BACK</a>
                            </div>
                        <?php } elseif ($edit == 0) { ?>
                            <div>
                                <?php echo $d2['address']; ?>
                                <a href="editcontact.php?edit=1" class="btn btn-primary">Edit</a>
                            </div>
                        <?php } ?>
                    </div>
                    <div style="border: 3px dashed orange;" class="row p-2 m-2 card">
                        <h1>EMAIL ADDRESS</h1>
                        <?php if ($edit == 1) { ?>
                            <textarea name="email" id="email" cols="30" rows="10"><?php echo $d2['email']; ?></textarea>
                            <div class="m-2">
                                <input class="btn btn-success" type="submit" value="SUBMIT"></a>
                                <a href="editcontact.php?edit=0" class="btn btn-warning">GO BACK</a>
                            <?php } elseif ($edit == 0) { ?>

                                <div>
                                    <?php echo $d2['email']; ?>
                                    <a href="editcontact.php?edit=1" class="btn btn-primary">Edit</a>
                                </div>

                            <?php } ?>
                            </div>
                    </div>
                </form>
            </div>
        </div>

        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>

</html>