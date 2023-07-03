<?php
include 'commom.php';
$id = $_SESSION['id'];
$cat = $_GET['cat'];
$title = $_POST['title'];
$story = $_POST['story'];
$img = "img/".$_POST['img'];

$date = date('y-m-d');
$signup_insert_query = "INSERT INTO `blogs`(`userid`, `category`, `title`, `story`, `created`,`cimg`) VALUES ('$id','$cat','$title','$story','$date','$img')";

$signup_insert_result = mysqli_query($con, $signup_insert_query)
        or die(mysqli_error($con));

header("location:index.php?posted=1");
