<?php 
include 'commom.php';
$id = $_SESSION['id'];
$bio=$_POST['bio'];
$signup_insert_query="UPDATE `users` SET bio = '$bio' WHERE id = '$id'" ;
$signup_insert_result=mysqli_query($con,$signup_insert_query)
        or die(mysqli_error($con));

header("location:profile.php?b=0");
