<?php 
include "commom.php";
$mission = $_POST['mission'];
$vision = $_POST['vision'];
$history = $_POST['history'];
$qery = "UPDATE `about` SET mission = '$mission', vision ='$vision', history='$history' where sno = 1";
$signup_insert_result=mysqli_query($con,$qery)
        or die(mysqli_error($con));
header("location:editabout.php?edit=0")
?>