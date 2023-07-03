<?php 
include 'commom.php';
$id = $_SESSION['id'];
$phonenum = $_POST['phone'];
$fname = $_POST['fname'];
$email = $_POST['email'];
$signup_insert_query="UPDATE `users` SET phonenumber = '$phonenum',firstname = '$fname',email = '$email' WHERE id = '$id'" ;
$signup_insert_result=mysqli_query($con,$signup_insert_query)
        or die(mysqli_error($con));

header("location:profile.php?b=0");
