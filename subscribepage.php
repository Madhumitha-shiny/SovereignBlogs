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
    <title>Health Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include 'header.php';
    $id = $_SESSION['id'];
    $type = $_GET['type'];
    ?>
    <div class="container p-5">
        <div class="row">
            <div style="border: 5px orange dashed" class="col-lg col-mb-12 p-5 card align-self-center m-3">
                <?php
                if ($type == "student") { ?>
                    <h1>Welcome to Student Package</h1>
                    <div class="m-2">
                        <img src="img/student.png" alt="" height="150" width="150">
                    </div>
                <?php } elseif ($type == "individual") { ?>
                    <h1>Welcome to Individual Package</h1>
                    <div class="m-2">
                        <img src="img/indiv.jpg" alt="" height="150" width="150">
                    </div>
                <?php } elseif ($type == "professional") { ?>
                    <h1>Welcome to Professional Package</h1>
                    <div class="m-2">
                        <img src="img/prof.png" alt="" height="150" width="150">
                    </div>
                <?php } ?>
                <h4>Please continue your payment here</h4>
                <form>
                    <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_KU0gDCyexkHwhN" async> </script>
                </form>
            </div>
            <div style="border: 5px dashed blue;" class="col-lg col-mb-12 card p-4 m-3">
                <?php
                if ($type == "student") { ?>
                    <h5><u>Package details</u></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <hr>
                    <h5><u>Package Benifits</u></h5>
                    <ul>
                        <li>Increased word Limit = 700</li>
                        <li>Increased Blogs = 8</li>
                        <li>Free and fun key chain <img src="img/keychain.jpg" alt="" height="30" width="30"></li>
                        <li>Free and cool diary <img src="img/diary.png" alt="" height="30" width="30"></li>
                    </ul>
                <?php } elseif ($type == "individual") { ?>
                    <h5><u>Package details</u></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <hr>
                    <h5><u>Package Benifits</u></h5>
                    <ul>
                        <li>Increased word Limit = 750</li>
                        <li>Increased Blogs = 10</li>
                        <li>Free and fun key chain <img src="img/keychain.jpg" alt="" height="30" width="30"></li>
                    </ul>
                <?php } elseif ($type == "professional") { ?>
                    <h5><u>Package details</u></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <hr>
                    <h5><u>Package Benifits</u></h5>
                    <ul>
                        <li>Increased word Limit = 1000</li>
                        <li>Increased Blogs = 15</li>
                        <li>Free and fun key chain <img src="img/keychain.jpg" alt="" height="30" width="30"></li>
                        <li>Free and cool diary <img src="img/diary.png" alt="" height="30" width="30"></li>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>

</html>