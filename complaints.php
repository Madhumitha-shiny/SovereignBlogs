<?php

use Google\Service\AIPlatformNotebooks\Location;

include 'commom.php';
$name = $_POST['name'];
$email = $_POST['email'];
$problem = $_POST['problem'];

$query = "INSERT INTO `complaints`(`name`,`email`,`problem`) VALUES ('$name','$email','$problem')";
$run = mysqli_query($con, $query);
header("location:contact.php?status=success")
?>