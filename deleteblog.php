<?php
include 'commom.php';
$bid = $_GET['bid'];
$query = "DELETE FROM comments WHERE bid = '$bid'";
$query_result = mysqli_query($con,$query);
$query = "DELETE FROM blogstatus WHERE bid = '$bid'";
$query_result = mysqli_query($con,$query);
$query = "DELETE FROM blogs WHERE blogid = '$bid'";
$query_result = mysqli_query($con,$query)
or die(mysqli_error($con));

header("location:myblogs.php");
?>