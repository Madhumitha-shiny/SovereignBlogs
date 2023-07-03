<?php
include 'commom.php';
include 'mode.php';
?>
<html>

<head>
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    include 'header.php';
    require_once 'config.php'; ?>

    <div class="container">

        <div class="row p-4">
            <h2>
                IF YOU ARE REGISTERED USER THEN LOGIN TO GET YOU ACCESS
            </h2>
        </div>
        <div class="row p-1">
            <div class="card shadow  mb-4">
                <div style="background-color:darkslategrey;color:white" class="row">
                    <h2 class="p-3">LOGIN</h2>
                </div>
                <div class="row">
                    <div class="col">
                        <h3 class="p-2 m-2">Login through google?</h3>
                        <div class="row m-2">
                            <div class="col">
                                <?php echo "<a class='btn btn-lg btn-danger px-5' href='" . $client->createAuthUrl() . "'>GOOGLE</a>"; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col m-4">
                        <h3 class=" col-auto">Don't have an account?</h3>
                        <div class="col">
                            <a href="signin.php">
                                <div class="btn btn-primary">
                                    REGISTER
                                </div>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <h4 class="p-2 m-2">Please login with you credentials</h4>
                    <form method="POST" action="login_values.php">
                        <div class="form-group p-2">
                            Email:<input type="email" class="form-control" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">

                        </div>
                        <div class="form-group p-2">
                            Password:<input type="password" class="form-control" name="password" required="true">

                        </div>
                        <div class="form-group p-2">
                            <input type="submit" class="btn btn-primary" value="SUBMIT">

                        </div>

                        <?php
                        if (isset($_GET['password_error'])) {
                            echo $_GET['password_error'];
                        }

                        ?>
                    </form>
                    <div>
                        <h5 class="mb-4">Forget your password click here <a href="forget.php?send=0" class="btn btn-warning mx-4">FORGET</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>