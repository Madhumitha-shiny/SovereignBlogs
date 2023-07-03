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
    <title>About Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include 'header.php';
    $getabtq = "SELECT * FROM about;";
    $getabt = mysqli_query($con,$getabtq);
    $abtdata = mysqli_fetch_array($getabt);
    ?>
    <div class="container  m-5">
        <div class="row">
            <div style="border-radius: 10px;background-color:rgb(255, 247, 171);" class="col-lg-7 col-mb-12 m-2 p-2">
                    <h2 class="text-center p-2">Mission Statement</h2>
                    <p class="p-2"><?php echo $abtdata['mission']?></p>

            </div>
            <div style="border-radius: 10px;background-color:rgb(112, 223, 190);" class="col-lg col-mb-12 m-2 p-2">
                <h2 class="text-center">Vision Statement</h2>
                <p class="p-2"><?php echo $abtdata['vision']?></p>

            </div>
        </div>
        <div class="row">
            <div class="col-lg col-mb-12 m-3">
                <img style="border-radius:15px;" src="img/fun.png" height="105%" width="100%"/>
            </div>
            <div class="col-lg col-mb-12 mt-3">
                <div class="row">
                    <h2 class="text-center">Core Values</h2>
                    <div class="col">
                        <img src="img/1.png" width="70%"/>
                    </div>
                    <div class="col">
                        <img src="img/2.PNG" width="80%"/>
                    </div>
                    <div class="col">
                        <img src="img/3.png" width="80%"/>
                    </div>
                    <div class="col">
                        <img src="img/4.png" width="100%"/>
                    </div>
                </div>
                <div style="border-radius: 10px;background-color:rgb(255, 120, 143);" class="row mt-4 p-3">
                    <h2 class="text-center">Breif Compnay history</h2>
                    <p class="p-2"><?php echo $abtdata['history']?></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>