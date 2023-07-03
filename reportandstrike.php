<?php
$block = "DELETE FROM reports WHERE cid = '$cd' and uid = '$uid'";
$block_run = mysqli_query($con, $block);

$block2 = "DELETE FROM comments WHERE cid = '$cd' and uid = '$uid'";
$block2_run = mysqli_query($con, $block2);

$block2 = "UPDATE users SET strike=strike+1 WHERE id = '$uid'";
$block2_run = mysqli_query($con, $block2);
header("location:blogview.php?bid=$bid");
