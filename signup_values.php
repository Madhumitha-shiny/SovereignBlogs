<?php
include 'commom.php';
?>
<?php
$id = uniqid();
$email = $_POST['Email'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$pass = $_POST['password'];
$phonen = $_POST['phone'];
$gen = $_POST['gender'];
$country = $_POST['country'];
$date = date('y-m-d');

$query = "SELECT * FROM blocked where email = '$email'";
$query_run = mysqli_query($con, $query);
$row = mysqli_num_rows($query_run);
$data = mysqli_fetch_array($query_run);
if ($row != 0) {
        $date1 = date_create($date);
        $date2 = date_create($data['blocked']);
        $diff = date_diff($date1, $date2);
        $contraint = $diff->m;
        echo $contraint;
        if ($contraint >= 2) {
                if ($gen == "Male") {
                        $img = "img/user.png";
                } else if ($gen == "Female") {
                        $img = "img/fuser.png";
                } else {
                        $img = "img/user.png";
                }
                $signup_insert_query = "INSERT INTO `users`(`id`, `email`, `firstname`, `lastname`,`gender`, `password`, `phonenumber`, `country`,`pagecreated`,`img`) VALUES ('$id','$email','$fname','$lname','$gen','$pass','$phonen','$country','$date','$img')";
                $signup_insert_result = mysqli_query($con, $signup_insert_query)
                        or die(mysqli_error($con));

                header("location:profile.php?b=0");
        } else {
                header("location:signin.php?error=Account_Blocked");
        }
} else if ($row == 0) {
        if ($gen == "Male") {
                $img = "img/user.png";
        } else if ($gen == "Female") {
                $img = "img/fuser.png";
        } else {
                $img = "img/user.png";
        }
        $signup_insert_query = "INSERT INTO `users`(`id`, `email`, `firstname`, `lastname`,`gender`, `password`, `phonenumber`, `country`,`pagecreated`,`img`) VALUES ('$id','$email','$fname','$lname','$gen','$pass','$phonen','$country','$date','$img')";
        $signup_insert_result = mysqli_query($con, $signup_insert_query)
                or die(mysqli_error($con));

        header("location:confirm.php?ID=$id");
}
?>

