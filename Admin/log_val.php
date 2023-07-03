<?php
include 'commom.php';
$email = $_POST['email'];
$Password = $_POST['password'];
$login_select_query = "SELECT * FROM admins WHERE Email='$email' && Password='$Password'";
$login_select_result = mysqli_query($con, $login_select_query);
$res = mysqli_fetch_array($login_select_result);
$total_rows = mysqli_num_rows($login_select_result);
if ($total_rows == 0) {
    header('location:login.php?password_error=invalid details');
} else {
    $_SESSION['id'] = $res['id'];
    header("location:index.php?task=0");
}
