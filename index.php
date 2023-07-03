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
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $posted = $_GET['posted'];
    ?>
    <?php
    include 'header.php';
    ?>
    <?php
    if ($posted == 1) {
    ?>
        <div style="z-index:0" class="container-fluid">
            <div class="row" style="background-color: lightgreen;">
                <div class="col p-3">
                    <h4>Successfully posted..</h4>
                </div>
                <div class="col-auto pt-2">
                    <a style="color: black; float:right" class="row user" href="index.php?posted=0"><i class=" col-auto fa fa-close" style="font-size: 35px;color:black"></i>
                    </a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <h1 style="font-size: 4rem;" class="text-center p-4">WELCOME TO SOVEREIGN BLOGS</h1>
    <h3 style="font-size: 2.5rem;" class="text-center">EXPLORE THE MOST LIKED POSTS</h3>
    <div class=" mb-5 pb-5">
        <div class="carousel pb-3" data-flickity='{"wrapAround": true,"autoPlay":true}'>
            <?php
            if (!isset($_SESSION['id'])) {
            ?>
                <div class="carousel-cell p-3">
                    <img src="img/food.jfif" height="320" width="800" />
                    <h4 class="mt-4" style="color:crimson;">Food Blog Title</h4>
                    <p style="font-weight: bold;" class="m-3">August 27, 2022</p>
                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <a href="login.php"><button type="button" class="btn btn-info">Read More</button></a>
                </div>
                <div class="carousel-cell p-3">
                    <img src="img/travel.jfif" height="320" width="800" />
                    <h4 class="mt-4" style="color:crimson;">Travel Blog Title</h4>
                    <p style="font-weight: bold;" class="m-3">August 27, 2022</p>
                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <a href="login.php"><button type="button" class="btn btn-info">Read More</button></a>
                </div>
                <div class="carousel-cell p-3">
                    <img src="img/health.jpg" height="320" width="800" />
                    <h4 class="mt-4" style="color:crimson;">Health Blog Title</h4>
                    <p style="font-weight: bold;" class="m-3">August 27, 2022</p>
                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <a href="login.php"><button type="button" class="btn btn-info">Read More</button></a>
                </div>
                <div class="carousel-cell p-3">
                    <img src="img/sports.jpg" height="320" width="800" />
                    <h4 class="mt-4" style="color:crimson;">Sports Blog Title</h4>
                    <p style="font-weight: bold;" class="m-3">August 27, 2022</p>
                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <a href="login.php"><button type="button" class="btn btn-info">Read More</button></a>
                </div>
            <?php } else { ?>
                <?php
                $id = $_SESSION['id'];
                $login_select_query = "SELECT * FROM blogs ORDER BY likes DESC LIMIT 4";
                $login_select_result = mysqli_query($con, $login_select_query);
                $total_rows = mysqli_num_rows($login_select_result);
                if ($total_rows == 0) {
                    header('location:profile.php?error=No blogs');
                } else {
                    while ($row = mysqli_fetch_array($login_select_result)) { ?>
                        <div class="carousel-cell p-3">
                            <?php if ($row['category'] == 'food') { ?>
                                <?php if ($row['cimg'] == "img/") { ?>
                                    <img src="img/food.jfif" height="320" width="800" />
                                <?php } else { ?>
                                    <img src="<?php echo $row['cimg'] ?>" height="320" width="800" />
                                <?php } ?>

                                <h4 class="mt-4" style="color:crimson;"><?php echo $row['title'] ?></h4>
                                <p style="font-weight: bold;" class="m-3"><?php echo $row['created'] ?></p>
                                <p class="text-dark"><?php echo $row['story'] ?></p>
                                <a href="blogview.php?bid=<?php echo $row['blogid'] ?>"><button type="button" class="btn btn-info">Read More</button></a>
                                <button class="btn btn-danger" style="float: right;">likes = <?php echo $row['likes'] ?></button>
                            <?php } elseif ($row['category'] == 'health') { ?>
                                <?php if ($row['cimg'] == "img/") { ?>
                                    <img src="img/health.jpg" height="320" width="800" />
                                <?php } else { ?>
                                    <img src="<?php echo $row['cimg'] ?>" height="320" width="800" />
                                <?php } ?>

                                <h4 class="mt-4" style="color:crimson;"><?php echo $row['title'] ?></h4>
                                <p style="font-weight: bold;" class="m-3"><?php echo $row['created'] ?></p>
                                <p class="text-dark"><?php echo $row['story'] ?></p>
                                <a href="blogview.php?bid=<?php echo $row['blogid'] ?>"><button type="button" class="btn btn-info">Read More</button></a>
                                <button class="btn btn-danger" style="float: right;">likes = <?php echo $row['likes'] ?></button>
                            <?php } elseif ($row['category'] == 'travel') { ?>
                                <?php if ($row['cimg'] == "img/") { ?>
                                    <img src="img/travel.jfif" height="320" width="800" />
                                <?php } else { ?>
                                    <img src="<?php echo $row['cimg'] ?>" height="320" width="800" />
                                <?php } ?>


                                <h4 class="mt-4" style="color:crimson;"><?php echo $row['title'] ?></h4>
                                <p style="font-weight: bold;" class="m-3"><?php echo $row['created'] ?></p>
                                <p class="text-dark"><?php echo $row['story'] ?></p>
                                <a href="blogview.php?bid=<?php echo $row['blogid'] ?>"><button type="button" class="btn btn-info">Read More</button></a>
                                <button class="btn btn-danger" style="float: right;">likes = <?php echo $row['likes'] ?></button>
                            <?php } elseif ($row['category'] == 'sports') { ?>
                                <?php if ($row['cimg'] == "img/") { ?>
                                    <img src="img/sports.jpg" height="320" width="800" />
                                <?php } else { ?>
                                    <img src="<?php echo $row['cimg'] ?>" height="320" width="800" />
                                <?php } ?>

                                <h4 class="mt-4" style="color:crimson;"><?php echo $row['title'] ?></h4>
                                <p style="font-weight: bold;" class="m-3"><?php echo $row['created'] ?></p>
                                <p class="text-dark"><?php echo $row['story'] ?></p>
                                <a href="blogview.php?bid=<?php echo $row['blogid'] ?>"><button type="button" class="btn btn-info">Read More</button></a>
                                <button class="btn btn-danger" style="float: right;">likes = <?php echo $row['likes'] ?></button>
                            <?php } ?>
                        </div>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
    <div class="recent p-4">
        <h2 style="font-size: 2.5rem;" class="m-3">EXPLORE THE RECENT POSTS</h2>
        <div class="row">
            <div class="col-lg-8 col-mb-12 ">
                <div class="row m-3 ">
                    <?php if (isset($_SESSION['id'])) { ?>
                        <?php
                        $id = $_SESSION['id'];
                        $login_select_query = "SELECT * FROM blogs ORDER BY created DESC LIMIT 4";
                        $login_select_result = mysqli_query($con, $login_select_query);
                        $total_rows = mysqli_num_rows($login_select_result);
                        if ($total_rows == 0) {
                            header('location:profile.php?error=No blogs');
                        } else {
                            while ($row = mysqli_fetch_array($login_select_result)) { ?>
                                <div class="col-6 p-2">
                                    <?php if ($row['category'] == 'food') { ?>
                                        <?php if ($row['cimg'] == "img/") { ?>
                                            <img src="img/food.jfif" height="300" width="450" />
                                        <?php } else { ?>
                                            <img src="<?php echo $row['cimg'] ?>" height="300" width="450" />
                                        <?php } ?>

                                        <h3 class="mt-4" style="color:crimson;"><?php echo $row['title'] ?></h3>
                                        <p style="font-weight: bold;" class="m-3"><?php echo $row['created'] ?></p>
                                        <p class="text-dark"><?php echo $row['story'] ?></p>
                                        <a href="blogview.php?bid=<?php echo $row['blogid'] ?>"><button type="button" class="btn btn-info">Read More</button></a>
                                        <button class="btn btn-danger" style="float: right;">likes = <?php echo $row['likes'] ?></button>
                                    <?php } ?>
                                    <?php if ($row['category'] == 'travel') { ?>
                                        <?php if ($row['cimg'] == "img/") { ?>
                                            <img src="img/travel.jfif" height="300" width="450" />
                                        <?php } else { ?>
                                            <img src="<?php echo $row['cimg'] ?>" height="300" width="450" />
                                        <?php } ?>

                                        <h3 class="mt-4" style="color:crimson;"><?php echo $row['title'] ?></h3>
                                        <p style="font-weight: bold;" class="m-3"><?php echo $row['created'] ?></p>
                                        <p class="text-dark"><?php echo $row['story'] ?></p>
                                        <a href="blogview.php?bid=<?php echo $row['blogid'] ?>"><button type="button" class="btn btn-info">Read More</button></a>
                                        <button class="btn btn-danger" style="float: right;">likes = <?php echo $row['likes'] ?></button>
                                    <?php } ?>
                                    <?php if ($row['category'] == 'health') { ?>
                                        <?php if ($row['cimg'] == "img/") { ?>
                                            <img src="img/health.jpg" height="300" width="450" />
                                        <?php } else { ?>
                                            <img src="<?php echo $row['cimg'] ?>" height="300" width="450" />
                                        <?php } ?>

                                        <h3 class="mt-4" style="color:crimson;"><?php echo $row['title'] ?></h3>
                                        <p style="font-weight: bold;" class="m-3"><?php echo $row['created'] ?></p>
                                        <p class="text-dark"><?php echo $row['story'] ?></p>
                                        <a href="blogview.php?bid=<?php echo $row['blogid'] ?>"><button type="button" class="btn btn-info">Read More</button></a>
                                        <button class="btn btn-danger" style="float: right;">likes = <?php echo $row['likes'] ?></button>
                                    <?php } ?>
                                    <?php if ($row['category'] == 'sports') { ?>
                                        <?php if ($row['cimg'] == "img/") { ?>
                                            <img src="img/sports.jpg" height="300" width="450" />
                                        <?php } else { ?>
                                            <img src="<?php echo $row['cimg'] ?>" height="300" width="450" />
                                        <?php } ?>

                                        <h3 class="mt-4" style="color:crimson;"><?php echo $row['title'] ?></h3>
                                        <p style="font-weight: bold;" class="m-3"><?php echo $row['created'] ?></p>
                                        <p class="text-dark"><?php echo $row['story'] ?></p>
                                        <a href="blogview.php?bid=<?php echo $row['blogid'] ?>"><button type="button" class="btn btn-info">Read More</button></a>
                                        <button class="btn btn-danger" style="float: right;">likes = <?php echo $row['likes'] ?></button>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    <?php } else { ?>
                        <div class="col-6 p-3">
                            <img src="img/food.jfif" height="250" width="420" />
                            <h3 class="mt-4" style="color:crimson;">Food Blog Title</h3>
                            <p style="font-weight: bold;" class="m-3">August 27, 2022</p>
                            <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                            <a href="login.php"><button type="button" class="btn btn-info">Read More</button></a>

                        </div>
                        <div class="col-6 p-3">
                            <img src="img/travel.jfif" height="250" width="420" />
                            <h3 class="mt-4" style="color:crimson;">Travel Blog Title</h3>
                            <p style="font-weight: bold;" class="m-3">August 27, 2022</p>
                            <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <a href="login.php"><button type="button" class="btn btn-info">Read More</button></a>

                        </div>
                        <div class="col-6 p-3">
                            <img src="img/health.jpg" height="250" width="420" />
                            <h3 class="mt-4" style="color:crimson;">Health Blog Title</h3>
                            <p style="font-weight: bold;" class="m-3">August 27, 2022</p>
                            <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <a href="login.php"><button type="button" class="btn btn-info">Read More</button></a>

                        </div>
                        <div class="col-6 p-3">
                            <img src="img/sports.jpg" height="250" width="420" />
                            <h3 class="mt-4" style="color:crimson;">Sports Blog Title</h3>
                            <p style="font-weight: bold;" class="m-3">August 27, 2022</p>
                            <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <a href="login.php"><button type="button" class="btn btn-info">Read More</button></a>
                        </div>

                    <?php } ?>
                </div>
            </div>
            <div class="col-lg col-mb-12">
                <div class="card shadow text-center p-5">
                    <hr>
                    <h2>More About Us</h2>
                    <hr>
                    <img class="align-self-center p-3" src="img/blg.jpg" width="80%">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </p>
                    <hr>
                    <h2>Categories</h2>
                    <p class="text-center">Explore the different kinds of blogs</p>
                    <hr>
                    <?php if (!isset($_SESSION['id'])) {
                    ?>
                        <a class="p-2" href="login.php"><button style="Background-color: rgb(213, 192, 252);" class="btn btn-large">
                                <h5>FOOD</h5>
                            </button></a>
                    <?php
                    } else { ?>
                        <a class="p-2" href="food.php"><button style="Background-color: rgb(213, 192, 252);" class="btn btn-large">
                                <h5>FOOD</h5>
                            </button></a>
                    <?php } ?>
                    <?php if (!isset($_SESSION['id'])) {
                    ?>
                        <a class="p-2" href="login.php"><button style="Background-color: rgb(213, 192, 252);" class="btn btn-large">
                                <h5>TRAVEL</h5>
                            </button></a>
                    <?php
                    } else { ?>
                        <a class="p-2" href="travel.php"><button style="Background-color: rgb(213, 192, 252);" class="btn btn-large">
                                <h5>TRAVEL</h5>
                            </button></a>
                    <?php } ?>
                    <?php if (!isset($_SESSION['id'])) {
                    ?>
                        <a class="p-2" href="login.php"><button style="Background-color: rgb(213, 192, 252);" class="btn btn-large">
                                <h5>HEALTH</h5>
                            </button></a>
                    <?php
                    } else { ?>
                        <a class="p-2" href="health.php"><button style="Background-color: rgb(213, 192, 252);" class="btn btn-large">
                                <h5>HEALTH</h5>
                            </button></a>
                    <?php } ?>
                    <?php if (!isset($_SESSION['id'])) {
                    ?>
                        <a class="p-2" href="login.php"><button style="Background-color: rgb(213, 192, 252);" class="btn btn-large">
                                <h5>SPORTS</h5>
                            </button></a>
                    <?php
                    } else { ?>
                        <a class="p-2" href="sports.php"><button style="Background-color: rgb(213, 192, 252);" class="btn btn-large">
                                <h5>SPORTS</h5>
                            </button></a>
                    <?php } ?>
                    <hr>
                    <h4 class="m-4">Alone we can do a little;
                        together we can do so much.
                        please support us.
                    </h4>
                    <form>
                        <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_KB1NKbMJy7rHXJ" async> </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>

</html>