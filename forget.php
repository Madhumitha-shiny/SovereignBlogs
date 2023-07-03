<?php
include 'commom.php';
include 'mode.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Contact Page</title>

</head>

<body>
    <?php
    include 'header.php';
    $send = $_GET['send'];
    ?>
    <div class="container p-5">
        <div class="row mt-5">
            <div class="row p-2">
                <?php if($send == 0){ ?>
                    <form action="forget.php?send=1" method="POST">
                        <h1 class="m-2">Enter you Email ID so that we can help you in recovering you're password</h1>
                        <h5 class="m-4"><input type="text" name="email" class="form control p-4" style="border: none;outline:none;border-radius:20px" size="50%" placeholder="Enter you're email id"></h5>
                        <a href="login.php" class="btn btn-warning">GO BACK</a>
                        <input class="btn btn-danger m-4" type="submit" value="SUBMIT">
                        
                    </form>
                <?php }else if ($send == 1) { ?>
                    <?php 
                        $email = $_POST['email'];
                        $query = "SELECT * FROM users WHERE email = '$email'";
                        $query_run = mysqli_query($con,$query);
                        $row = mysqli_fetch_array($query_run);
                        
                        ?>
                        <form action="https://formsubmit.co/<?php echo $row['email'];?>"  method="POST">
                            <h4>Confirm you're email</h4>
                            <h5 class="m-4"><input type="text" name="email" class="p-4" style="border: none;outline:none;border-radius:20px" value="<?php echo $row['email'];?>" size="50%" placeholder="Enter you're email id"></h5>
                            <input style="visibility: hidden;" name="password" type="text" value="You're password is mentioned below. Please change you're password for security reasons <?php echo $row['password'];?>">
                            <a href="forget.php?send=0" class="btn btn-warning">GO BACK</a>
                            <input class="btn btn-success m-4" type="submit">
                        </form>
                <?php } ?>
            </div>
        </div>
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script>
            function sendEmail() {
                Email.send({
                    Host: "smtp.gmail.com",
                    Username: "csd.project.2022@gmail.com",
                    Password: "gitam@123",
                    To: inputs.elements["email"].value,
                    From: 'csd.project.2022@gmail.com',
                    Subject: "Contact for enquiry",
                    Body: "You're password is " + inputs.elements("password").value

                }).then(
                    message => alert(message)
                );
            }
        </script>
        
</body>
</html>