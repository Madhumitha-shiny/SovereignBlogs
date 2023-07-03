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
    $qry = "SELECT * FROM contact";
    $run = mysqli_query($con,$qry);
    $dta = mysqli_fetch_array($run);
    ?>
    <div class="container p-5">
        <div class="row mt-5">
            <div style="background-color:rgb(96, 181, 255);border-radius:25px" class="contact col-lg-4 col-mb-12 text-center pt-4 m-1 shadow">
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.462304786977!2d83.37527131456568!3d17.781649287843464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a395b1d31491a4d%3A0x8b129d81ef9bc2fa!2sGandhi%20Institute%20of%20Technology%20and%20Management!5e1!3m2!1sen!2sin!4v1661620455770!5m2!1sen!2sin" width="390" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
            </div>
            <div style="background-color:rgb(255, 120, 143);border-radius:25px" class="contact col-lg col-mb-12 p-3 m-1 shadow">
                <div class="row p-2">
                    <h1>Meet Us</h1>
                </div>
                <div class="row p-2">
                    <div class="col-auto"><i class="fa fa-phone" style="font-size:30px"></i></div>
                    <div class="col"><?php echo $dta['phone']?></div>
                </div>
                <div class="row p-2">
                    <div class="col-auto"><i class="fa fa-map" style="font-size:28px"></i></div>
                    <div class="col"><?php echo $dta['address']?></div>
                </div>
                <div class="row p-2">
                    <div class="col-auto"><i class="fa fa-envelope" style="font-size:28px"></i></div>
                    <div class="col"><?php echo $dta['email']?></div>
                </div>
            </div>
            <div style="background-color:rgb(112, 223, 190);border-radius:25px" class="contact col-lg col-mb-12 pt-4 m-1 shadow">
                <div class="row">
                    <h1>Pitch Us</h1>
                </div>
                <div class="row p-2">
                    <form action="complaints.php" method="POST">
                        <p name="mail" style="font-size: 1rem;">
                            hello,<br><br>

                            my name is <input name="name" style="background: transparent;min-width:1px; border: none;outline:none;color:red" type="text" required="true" placeholder="your name" /> <br>
                            and my e-mail address is <input type="email" name="email" style="background: transparent;min-width:1px; border: none;outline:none;color:red" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="your e-mail"> <br>
                            and I would like to discuss about <input name="problem" type="text" style="background: transparent;min-width:1px; border: none;outline:none;color:red" required="true" placeholder="the problem." />
                        </p>
                        <button type="submit" class="btn btn-larger btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<!-- csd.project.2022@gmail.com
gitam@123 -->