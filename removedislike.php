<?php 
include 'commom.php';
$id = $_SESSION['id'];
$bid = $_GET['bid'];
$q1 = "UPDATE blogs SET likes = likes+1 WHERE blogid = '$bid'";
$query_run = mysqli_query($con, $q1);
$q2 = "DELETE FROM blogstatus WHERE bid = '$bid' and UID = '$id'";
$query_run = mysqli_query($con, $q2);
header("location:blogview.php?bid=$bid");
?>

