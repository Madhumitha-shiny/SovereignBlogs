<div class="container-fluid shadow">
    <div class="row p-3">
        <?php
        if (!isset($_SESSION['id'])) {
        ?>
            <div class="col-lg-4 col-mb-12 p-1">
                <a href="index.php?posted=0"><img src="img/logo.png" height="50" width="180"></a>
            </div>
            <div class="col-lg-auto col-mb-12 pt-2">
                <a href="index.php?posted=0" class="btn btn-warning">HOME</a>
            </div>
            <div class="col-lg-auto col-mb-12 pt-2 ">
                <a href="about.php" class="btn btn-dark">ABOUT</a>
            </div>
            <div class="col-lg-auto col-mb-12 pt-2">
                <a href="contact.php" class="btn btn-dark">CONTACT</a>
            </div>
            <div class="col-lg-3 col-mb-12 pt-2">
                <a href="login.php"><button type="button" class="btn btn-dark">WRITE</button></a>
            </div>
            <div style="float: right;" class="col-lg-auto col-mb-12 pt-2">
                <a href="login.php" class="btn btn-primary">LOGIN</a>
            </div>
            <div class="col-lg-auto col-mb-12 pt-2">
                <a href="signin.php" class="btn btn-primary ">REGISTER</a>
            </div>

        <?php } else {
            $name = $_SESSION['id'];

        ?>
            <div class="col-lg-4 col-mb-12 p-1">
                <a href="index.php?posted=0"><img src="img/logo.png" height="50" width="180"></a>
            </div>
            <div class="col-lg-auto col-mb-12 pt-2">
                <a href="index.php?posted=0" class="btn btn-warning">HOME</a>
            </div>
            <div class="col-lg-auto col-mb-12 pt-2 ">
                <a href="about.php" class="btn btn-dark">ABOUT</a>
            </div>
            <div class="col-lg-auto col-mb-12 pt-2">
                <a href="contact.php" class="btn btn-dark">CONTACT</a>
            </div>
            <div class="col-lg-auto col-mb-12 pt-2">
                <a href="subscribe.php?category=0" class="btn btn-dark">WRITE</a>
            </div>
            <div class="col-lg-2 col-mb-12 pt-2">
                <a href="logout.php" class="btn btn-danger">LOGOUT</a>
            </div>
            <div class="col-lg-auto m-1 col-mb-12 btn btn-light shadow">
                <a style="color: black;text-decoration:none" class="row user" href="profile.php?b=0"><i class=" col-auto fa fa-user" style="font-size: 35px;color:black"></i>
                    <h5 class="col-auto pt-2"><?php echo $name; ?></h5>
                </a>
            </div>

        <?php } ?>
    </div>
</div>