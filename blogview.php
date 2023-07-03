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
    header("refresh: 600");
    $uid = $_SESSION['id'];
    $id = $_GET['bid'];
    ?>
    <div class="container p-5">
        <div style="background-color:rgb(255, 240, 221);border-style:dashed;border-color:black;border-width:5px;" class="card shadow p-5">
            <div class="row">
                <?php
                $query = "SELECT * FROM blogs WHERE blogid = '$id'";
                $query_run = mysqli_query($con, $query);
                $row = mysqli_fetch_array($query_run);
                $q2 = "SELECT status FROM blogstatus WHERE bid = '$id' and uid = '$uid'";
                $q2_run = mysqli_query($con, $q2);
                $d2 = mysqli_fetch_array($q2_run);
                $status = $d2;
                ?>
                <div style="color:black;" class="col">
                    <div>
                        <?php if ($row['cimg'] == "") { ?>
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
                    </div>
                    <div class="col">
                        <?php if ($status == "none" or empty($status)) { ?>
                            <a href="likes.php?bid=<?php echo $id ?>" id="likes" class="btn btn-primary shadow">LIKE</a>
                            <a href="dislikes.php?bid=<?php echo $id ?>" id="likes" class="btn btn-primary shadow">DISLIKE</a>
                        <?php } else if ($status['status'] == "liked") { ?>
                            <a href="removelike.php?bid=<?php echo $id ?>" id="likes" class="btn btn-danger shadow">REMOVE LIKE</a>
                        <?php } else if ($status['status'] == "disliked") { ?>
                            <a href="removedislike.php?bid=<?php echo $id ?>" id="likes" class="btn btn-danger shadow">REMOVE DISLIKE</a>
                        <?php } ?>

                    </div>
                    <div class="col m-5">
                        <form action="addcomt.php?bid=<?php echo $id ?>" method="POST">
                            <h2>Write your comment</h2>
                            <h5>Please be careful before writing your comment because ones your comment is submitted cannot be changed</h5>
                            <textarea name="comment" class="form-control"></textarea>
                            <button type="submit" class="mt-3 btn btn-primary">SUBMIT</button>
                        </form>
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
                        <div style="border-width: 2px;border-color:black;border-style:solid;padding:2%;border-radius: 20px;" class="row">
                            <h4><u>COMMENT SECTION</u></h4>
                            <p style="font-weight:bold">Please keep the comment section respectful. Start discussion and post with kindness</p>

                            <?php
                            $new_query = "SELECT * FROM comments c, users u WHERE c.bid = '$id' and c.uid=u.id";
                            $run = mysqli_query($con, $new_query);
                            while ($data = mysqli_fetch_array($run)) {
                                $cd = $data['cid'];
                                $dq = "SELECT cstatus FROM cstatus WHERE cid = '$cd' and uid = '$uid'";
                                $d3_run = mysqli_query($con, $dq);
                                $d3 = mysqli_fetch_array($d3_run);
                                $dq2 = "SELECT rstatus FROM reports WHERE cid = '$cd' and uid = '$uid'";
                                $d4_run = mysqli_query($con, $dq2);
                                $d4 = mysqli_fetch_array($d4_run);
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
                                    <div class="col align-self-center">
                                        <?php if ($d3 == "none" or empty($d3)) { ?>
                                            <a href="clikes.php?cid=<?php echo $cd ?>" class="btn btn-light shadow" id="likes"><i style="color:blue" class="fa fa-thumbs-up"></i></a>
                                            <a href="cdislikes.php?cid=<?php echo $cd ?>" id="likes" class="btn btn-primary shadow"><i class="fa fa-thumbs-down"></i></a>
                                        <?php } else if ($d3['cstatus']  == "liked") { ?>
                                            <a href="removeclike.php?cid=<?php echo $cd ?>" id="likes" class="btn btn-danger shadow"><i class="fa fa-trash-o"></i></a>
                                        <?php } else if ($d3['cstatus']  == "disliked") { ?>
                                            <a href="removecdislike.php?cid=<?php echo $cd ?>" id="likes" class="btn btn-danger shadow"><i class="fa fa-trash-o"></i></a>
                                        <?php } ?>
                                        <?php if (empty($d4)) { ?>
                                            <a href="report.php?cid=<?php echo $cd ?>" id="likes" class="btn btn-danger shadow"><i class="fa fa-flag"></i></a>
                                        <?php } else if ($data['report'] >= 2) {
                                            $block = "DELETE FROM reports WHERE cid = '$cd' and uid = '$uid'";
                                            $block_run = mysqli_query($con, $block);

                                            $block2 = "DELETE FROM comments WHERE cid = '$cd' and uid = '$uid'";
                                            $block2_run = mysqli_query($con, $block2);

                                            $block2 = "UPDATE users SET strike=strike+1 WHERE id = '$uid'";
                                            $block2_run = mysqli_query($con, $block2);

                                        ?>
                                        <?php } ?>
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