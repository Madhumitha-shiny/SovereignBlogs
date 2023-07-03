<?php 
include 'commom.php';
$id = $_SESSION['id'];
$bid = $_GET['bid'];
$comment = $_POST['comment'];
$query = "INSERT INTO `comments`(`uid`,`bid`, `comment`, `clikes`,`report`) VALUES ('$id','$bid','$comment',0,0)";
$run = mysqli_query($con, $query);
header("location:blogview.php?bid=$bid");
?>
