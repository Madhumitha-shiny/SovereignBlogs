<?php
include 'commom.php';
$bid = $_GET['cat'];
$title = $_POST['title'];
$story = $_POST['story'];
$cmg = "img/".$_POST['cimg'];
$query = "UPDATE blogs SET title = '$title', story = '$story', cimg='$cmg' WHERE blogid = '$bid'";
$query_res = mysqli_query($con, $query)
    or die(mysqli_error($con));

    header("location:index.php?posted=1");
?>
