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
    <title>Subscription Page</title>
    <link rel="stylesheet" href="sub_style.css">
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <div class="container p-5">
        <h1 style="font-size: 4rem;font-weight:bold" class="text-center mb-5">SUBSCRIPTION PLANS</h1>
        <div class="row p-3 text-center bg-white shadow">
            <div class="col-lg col-mb-12 m-3 p-2 card">
                <h4 style="font-size: 2.6rem;" class="m-3">INDIVIDUAL</h4>
                <div class="m-2">
                    <img src="img/indiv.jpg" alt="" height="150" width="150">
                </div>
                <h2>25$/mon</h2>
                <h6>100$ per year(-5%)</h6>
                <hr class="my-4">
                <div class="row">
                    <div class="col">
                        <h6>Blog Limit</h6>
                    </div>
                    <div class="col">
                        <h6>10</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6>Word Limit per blog</h6>
                    </div>
                    <div class="col">
                        <h6>750 words</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6>Free key chain</h6>
                    </div>
                    <div class="col">
                        <img src="img/keychain.jpg" alt="" height="30" width="30">
                    </div>
                </div>
                <a href="subscribepage.php?type=individual" class=" mt-3 btn btn-large btn-primary">GET STARTED</a>
            </div>
            <div class="col-lg col-mb-12 m-3 p-2 card">
                <h4 style="font-size: 2.6rem;" class="m-3">PROFESSIONAL</h4>
                <div class="m-2">
                    <img src="img/prof.png" alt="" height="150" width="150">
                </div>
                <h2>38$/mon</h2>
                <h6>120$ per year(-5%)</h6>
                <hr class="my-4">
                <div class="row">
                    <div class="col">
                        <h6>Blog Limit</h6>
                    </div>
                    <div class="col">
                        <h6>15</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6>Word Limit per blog</h6>
                    </div>
                    <div class="col">
                        <h6>1000 words</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6>Free key chain</h6>
                    </div>
                    <div class="col">
                        <img src="img/keychain.jpg" alt="" height="30" width="30">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6>Free and cool diary</h6>
                    </div>
                    <div class="col">
                        <img src="img/diary.png" alt="" height="30" width="30">
                    </div>
                </div>
                <a href="subscribepage.php?type=professional" class=" mt-3 btn btn-large btn-primary">GET STARTED</a>
            </div>
            <div class="col-lg col-mb-12 m-3 p-2 card">
                <h4 style="font-size: 2.6rem;" class="m-3">STUDENT</h4>
                <div class="m-2">
                    <img src="img/student.png" alt="" height="150" width="150">
                </div>
                <h2>15$/mon</h2>
                <h6>80$ per year(-5%)</h6>
                <hr class="my-4">
                <div class="row">
                    <div class="col">
                        <h6>Blog Limit</h6>
                    </div>
                    <div class="col">
                        <h6>8</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6>Word Limit per blog</h6>
                    </div>
                    <div class="col">
                        <h6>700 words</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6>Free key chain</h6>
                    </div>
                    <div class="col">
                        <img src="img/keychain.jpg" alt="" height="30" width="30">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6>Free and cool diary</h6>
                    </div>
                    <div class="col">
                        <img src="img/diary.png" alt="" height="30" width="30">
                    </div>
                </div>
                <a href="subscribepage.php?type=student" class=" mt-3 btn btn-large btn-primary">GET STARTED</a>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>

</html>