<?php
// include "commom.php";
$q = "SELECT * FROM mode";
$r = mysqli_query($con, $q);
$res = mysqli_fetch_array($r);
if ($res['powerdown'] == "down") {
    header("location:down.php");
}
?>