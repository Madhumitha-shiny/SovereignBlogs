<?php

use Google\Service\AIPlatformNotebooks\Location;

include 'commom.php';
$id = $_SESSION['id'];
$num = $_GET['num'];
$query1 = "UPDATE admins SET bugs = bugs + 1 WHERE id = $id";
$run1 = mysqli_query($con, $query1);
$query = "DELETE FROM complaints WHERE sno = $num";
$run = mysqli_query($con, $query);
header("location:index.php?task=bugs")
?>