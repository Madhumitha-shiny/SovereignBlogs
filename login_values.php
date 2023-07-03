<?php
include 'commom.php';
$email = $_POST['email'];
$Password = $_POST['password'];
$login_select_query = "SELECT * FROM users WHERE Email='$email' && Password='$Password'";
$login_select_result = mysqli_query($con, $login_select_query);
$total_rows = mysqli_num_rows($login_select_result);
if ($total_rows == 0) {
    header('location:login.php?password_error=invalid details');
} else {
    $array = mysqli_fetch_array($login_select_result);
    $_SESSION['id'] = $array['id'];
    $strike = $array['strike'];
    if ($strike < 10) {

        header("location:profile.php?b=0");
    } else {
        $id = $array['id'];
        $email = $array['email'];
        $fname = $array['firstname'];
        $lname = $array['lastname'];
        $pass = $_POST['password'];
        $phonen = $array['phonenumber'];
        $gen = $array['gender'];
        $country = $array['country'];
        $date = date('y-m-d');
        $signup_insert_query = "INSERT INTO `blocked`(`userid`, `email`, `firstname`, `lastname`,`gender`, `password`, `phonenumber`, `country`,`blocked`) VALUES ('$id','$email','$fname','$lname','$gen','$pass','$phonen','$country','$date')";
        $signup_insert_result = mysqli_query($con, $signup_insert_query);
        $block2 = "DELETE FROM reports WHERE uid = '$id'";
        $block2_run = mysqli_query($con, $block2);
        $block2 = "DELETE FROM cstatus WHERE uid = '$id'";
        $block2_run = mysqli_query($con, $block2);
        $block2 = "DELETE FROM blogstatus WHERE UID = '$id'";
        $block2_run = mysqli_query($con, $block2);
        $block2 = "DELETE FROM comments WHERE uid = '$id'";
        $block2_run = mysqli_query($con, $block2);
        $block2 = "DELETE FROM blogs WHERE userid = '$id'";
        $block2_run = mysqli_query($con, $block2);
        $block2 = "DELETE FROM users WHERE id = '$id'";
        $block2_run = mysqli_query($con, $block2);
        session_start();
        session_unset();
        session_destroy();
        header("location:login.php?error=Account_blocked");
    }
}
