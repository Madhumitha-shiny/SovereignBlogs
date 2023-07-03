<?php

include 'commom.php';
$mode = $_POST['mode'];
if($mode == ""){
    $mode = "active";
}elseif($mode == 1){
    $mode = "down";
}
$query = "UPDATE mode SET powerdown = '$mode'";
$run = mysqli_query($con, $query);
header("location:index.php?task=0")
?>