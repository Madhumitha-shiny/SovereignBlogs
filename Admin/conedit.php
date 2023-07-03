<?php 
include "commom.php";
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];
$qery = "UPDATE `contact` SET phone = '$phone', address ='$address', email='$email'";
$signup_insert_result=mysqli_query($con,$qery)
        or die(mysqli_error($con));
header("location:editcontact.php?edit=0")
?>