<?php

use Google\Service\AIPlatformNotebooks\Location;

include 'commom.php';
$id = $_GET['id'];
$query = "DELETE FROM blocked WHERE userid = $id";
$run = mysqli_query($con, $query);
header("location:index.php?task=blocked")
?>