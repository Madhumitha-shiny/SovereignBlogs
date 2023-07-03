<?php 
include 'commom.php';
$id = $_SESSION['id'];
$cid = $_GET['cid'];
$q2 = "INSERT INTO `reports`(`cid`,`uid`,`rstatus`) VALUES ('$cid','$id','reported')";
$query_run = mysqli_query($con, $q2);
$query = "UPDATE comments SET report=report+1 WHERE cid = '$cid'";
$run = mysqli_query($con, $query);
$query = "SELECT bid from comments where cid = '$cid'";
$run = mysqli_query($con, $query);
$data = mysqli_fetch_array($run);
$bd = $data['bid'];
header("location:blogview.php?bid=$bd");
