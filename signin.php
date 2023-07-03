<?php 
include 'commom.php';
include 'header.php';
include 'mode.php';?>
<html>
<head>
    <title>Sign-up Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="signin_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <div class="row p-4">
            <div class="col-lg col-mb-12 card">
                <div style="background-color: crimson;color:white" class="row">
                    <h3 class="p-3">SIGN-IN</h3>
                </div>
                <form method="POST" action="signup_values.php">
                    <div class="form-group p-2">
                        Email:<input type="email" name="Email" class="form-control" required="true">
                    </div>
                    <div class="form-group p-2">
                        First Name:<input type="text" name="firstname" class="form-control" required="true">
                    </div>
                    <div class="form-group p-2">
                        Last Name:<input type="text" name="lastname" class="form-control" required="true">
                    </div>
                    <div class="form-group p-2">
                        Gender: <select name="gender" id="gender">
                            <option>Female</option>
                            <option>Male</option>
                            <option>Rather not say</option>
                        </select>
                    </div>
                    <div class="form-group p-2">
                        Password:<input type="password" name="password" required="true" placeholder="Choose a strong password of atleast 8 letters  and 2 symbols" class="form-control">
                    </div>
                    <div class="form-group p-2">
                        Phone:<input type="number" name="phone" class="form-control" required="true">
                    </div>
                    <div class="form-group p-2">
                        Country:<input type="text" name="country" class="form-control" required="true">
                    </div>
                    <div class="form-group p-2">
                                Bio:<textarea name="bio" class="form-control"></textarea>
                            </div>
                    <div class="p-2">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
            <div class="col-lg col-mb-12 p-4">
                <h4 class="p-3">Sovereign blogs provides you a platform and tools to express yourself in your journey with us.
                    Please register to start writing and enjoy the benifits.
                </h4>
                <img style="border-radius: 10px" class="p-3" src="img/write.png" width="100%" />
            </div>
        </div>
    </div>
</body>
</html>