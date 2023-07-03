<?php
include 'commom.php';
include 'mode.php';
?>
<?php
include 'header.php' ?>
<html>

<head>
    <title>Confirm Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="signin_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    $name = $_GET['ID'];
    ?>
    <div class="container text-center m-5 p-5">
        <h1 style="font-size: 4rem;" class="">PLEASE LOGIN TO CONTINUE YOUR ACCESS</h1>
        <h1>Please save you User ID for login purpose</h1>
        <h1 class="bg-warning m-5"><?php echo $name; ?></h1>
        <div>
            <a style="font-size: 2rem;" href="login.php" class="btn btn-large btn-primary mt-3">LOGIN</a>
        </div>
    </div>
</body>

</html>