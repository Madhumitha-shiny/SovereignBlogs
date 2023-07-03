<?php 
include 'commom.php';
$id = $_SESSION['id'];
$cid = $_GET['cid'];
$q1 = "UPDATE comments SET clikes=clikes+1 WHERE cid = '$cid'";
$query_run = mysqli_query($con, $q1);
$q2 = "DELETE FROM cstatus WHERE cid = '$cid' and uid = '$id'";
$query_run = mysqli_query($con, $q2);
$q3 = "SELECT bid from comments where cid = '$cid'";
$run = mysqli_query($con, $q3);
$data = mysqli_fetch_array($run);
$bd = $data['bid'];
header("location:blogview.php?bid=$bd");
?>

