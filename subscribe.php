<?php
include 'commom.php';
$id = $_SESSION['id'];
$query = "SELECT COUNT(*) AS ct FROM blogs WHERE userid='$id'";
$result = mysqli_query($con, $query);
$query2 = "SELECT subscribe FROM users WHERE id='$id'";
$result2 = mysqli_query($con, $query2);
$res = mysqli_fetch_array($result);
$res2 = mysqli_fetch_array($result2);
if ($res['ct'] >= 3 and $res2['subscribe'] == "NO") {
    header("location:subscription.php"); 
} else {
    header("location:blog.php?category=0"); 
    }
