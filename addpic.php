<?php
include 'commom.php';
$id = $_SESSION['id'];
$img = "img/".$_POST['img'];
$query = "UPDATE users SET `img` = '$img' WHERE id='$id'";
$result = mysqli_query($con, $query);
header("location:profile.php?b=0");