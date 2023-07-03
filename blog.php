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
    <title>Blogs Page</title>
    <link rel="stylesheet" href="contact_style.css">
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <?php
    $category = $_GET["category"]
    ?>
    <div class="m-5 text-center">
        <a style="background-color: rgb(255, 108, 45);" class="btn shadow m-4" href="blog.php?category=food">
            <h5>FOOD</h5>
        </a>
        <a style="background-color: rgb(255, 108, 45);" class="btn shadow m-4" href="blog.php?category=travel">
            <h5>TRAVEL</h5>
        </a>
        <a style="background-color: rgb(255, 108, 45);" class="btn shadow m-4" href="blog.php?category=health">
            <h5>HEALTH</h5>
        </a>
        <a style="background-color: rgb(255, 108, 45);" class="btn shadow m-4" href="blog.php?category=sports">
            <h5>SPORTS</h5>
        </a>
    </div>
    <?php if ($category == "food") { ?>
        <div class="container text-center mb-4">
            <div>
                <form action="blog_val.php?cat=food" method="POST">
                    <div class="row my-5">
                        <div class="text-center"><a class="rooms" href="#"><span data-attr="FOOD">FOOD</span></a></div>
                    </div>
                    <img src="img/food.jfif" height="350" width="650" /><br>
                    <div class="col align-self-center m-3">
                        <h3 style="color:red;font-size:2rem;font-weight:bold">Select the image of your choice if wish to change</h1>
                            <input type="file" id="img" name="img" accept="image" />
                    </div>
                    <input name="title" class="text-center m-3" type="text" style="color:red;font-size:2rem;font-weight:bold;background: transparent;min-width:1px;border: none;outline:none" placeholder="ENTER YOUR TITLE" required="true" /><br>
                    <textarea name="story" class="p-4 mt-3" style="color:black;font-size:1rem;min-width:1px; border: none;outline:none" type="text" rows="20" placeholder="Tell us your story..." cols="90" required="true"></textarea>
                    <br>
                    <button class="btn btn-primary mt-2">SUBMIT</button>
                </form>
            </div>
        </div>
    <?php } elseif ($category == "travel") { ?>
        <div class="container text-center mb-4">
            <div>
                <form action="blog_val.php?cat=travel" method="POST">
                    <div class="row my-5">
                        <div class="text-center"><a class="rooms" href="#"><span data-attr="TRAVEL">TRAVEL</span></a></div>
                    </div>
                    <img src="img/travel.jfif" height="350" width="650" /><br>
                    <div class="col align-self-center m-3">
                        <h3 style="color:red;font-size:2rem;font-weight:bold">Select the image of your choice if wish to change</h1>
                            <input type="file" id="img" name="img" accept="image" />
                    </div>
                    <input name="title" class="text-center m-3" type="text" style="color:red;font-size:2rem;font-weight:bold;background: transparent;min-width:1px;border: none;outline:none" placeholder="ENTER YOUR TITLE" /><br>
                    <textarea name="story" class="p-4 mt-3" style="color:black;font-size:1rem;min-width:1px; border: none;outline:none" type="text" rows="20" placeholder="Tell us your story..." cols="90"></textarea>
                    <br>
                    <button class="btn btn-primary mt-2">SUBMIT</button>
                </form>
            </div>
        </div>
    <?php } elseif ($category == "health") { ?>
        <div class="container text-center mb-4">
            <div>
                <form action="blog_val.php?cat=health" method="POST">
                    <div class="row my-5">
                        <div class="text-center"><a class="rooms" href="#"><span data-attr="HEALTH">HEALTH</span></a></div>
                    </div>
                    <img src="img/health.jpg" height="350" width="650" /><br>
                    <div class="col align-self-center m-3">
                        <h3 style="color:red;font-size:2rem;font-weight:bold">Select the image of your choice if wish to change</h1>
                            <input type="file" id="img" name="img" accept="image" />
                    </div>
                    <input name="title" class="text-center m-3" type="text" style="color:red;font-size:2rem;font-weight:bold;background: transparent;min-width:1px;border: none;outline:none" placeholder="ENTER YOUR TITLE" /><br>
                    <textarea name="story" class="p-4 mt-3" style="color:black;font-size:1rem;min-width:1px; border: none;outline:none" type="text" rows="20" placeholder="Tell us your story..." cols="90"></textarea>
                    <br>
                    <button class="btn btn-primary mt-2">SUBMIT</button>
                </form>
            </div>
        </div>
    <?php } elseif ($category == "sports") { ?>
        <div class="container text-center mb-4">
            <div>
                <form action="blog_val.php?cat=sports" method="POST">
                    <div class="row my-5">
                        <div class="text-center"><a class="rooms" href="#"><span data-attr="SPORTS">SPORTS</span></a></div>
                    </div>
                    <img src="img/sports.jpg" height="350" width="650" /><br>
                    <div class="col align-self-center m-3">
                        <h3 style="color:red;font-size:2rem;font-weight:bold">Select the image of your choice if wish to change</h1>
                            <input type="file" id="img" name="img" accept="image" />
                    </div>
                    <input name="title" class="text-center m-3" type="text" style="color:red;font-size:2rem;font-weight:bold;background: transparent;min-width:1px;border: none;outline:none" placeholder="ENTER YOUR TITLE" /><br>
                    <textarea name="story" class="p-4 mt-3" style="color:black;font-size:1rem;min-width:1px; border: none;outline:none" type="text" rows="20" placeholder="Tell us your story..." cols="90"></textarea>
                    <br>
                    <button class="btn btn-primary mt-2">SUBMIT</button>
                </form>
            </div>
        </div>
    <?php } elseif ($category >= 1) {
        $query = "SELECT * FROM blogs where blogid = '$category'";
        $query_res = mysqli_query($con, $query);
        $row = mysqli_fetch_array($query_res); ?>
        )
        <div class="container text-center mb-4">
            <div class="container text-center mb-4">
                <div>
                    <form action="edit_blog.php?cat=<?php echo $category ?>" method="POST">
                        <h1 class="btn btn-light" style="font-size: 2rem;"><?php echo $row['category'] ?></h1><br>
                        <?php
                        if ($row['category'] == "food") { ?>
                            <?php if ($row['cimg'] == "img/") { ?>
                                <img src="img/food.jfif" height="350" width="650" /><br>
                            <?php } else { ?>
                                <img src="<?php echo $row['cimg'] ?>" height="350" width="650" /><br>
                            <?php } ?>

                        <?php } else if ($row['category'] == "travel") { ?>
                            <?php if ($row['cimg'] == "img/") { ?>
                                <img src="img/travel.jfif" height="350" width="650" /><br>
                            <?php } else { ?>
                                <img src="<?php echo $row['cimg'] ?>" height="350" width="650" /><br>
                            <?php } ?>

                        <?php } else if ($row['category'] == "sports") { ?>
                            <?php if ($row['cimg'] == "img/") { ?>
                                <img src="img/sports.jpg" height="350" width="650" /><br>
                            <?php } else { ?>
                                <img src="<?php echo $row['cimg'] ?>" height="350" width="650" /><br>
                            <?php } ?>

                        <?php } else if ($row['category'] == "health") { ?>
                            <?php if ($row['cimg'] == "img/") { ?>
                                <img src="img/health.jpg" height="350" width="650" /><br>
                            <?php } else { ?>
                                <img src="<?php echo $row['cimg'] ?>" height="350" width="650" /><br>
                            <?php } ?>

                        <?php } ?>
                        <div class="m-2">
                            <h3 style="color:red;font-size:2rem;font-weight:bold">Select the image of your choice if wish to change</h3>
                            <input type="file" id="cimg" name="cimg" accept="image" /><br />
                        </div>
                        <input name="title" value="<?php echo $row['title'] ?>" class="text-center m-3" type="text" style="color:red;font-size:2rem;font-weight:bold;background: transparent;min-width:1px;border: none;outline:none" placeholder="ENTER YOUR TITLE" required="true" /><br>
                        <textarea name="story" class="p-4 mt-3" style="color:black;font-size:1rem;min-width:1px; border: none;outline:none" type="text" rows="20" placeholder="Tell us your story..." cols="90" required="true"><?php echo $row['story'] ?></textarea>
                        <br>
                        <a href="myblogs.php" class="btn btn-warning mt-2">GO BACK</a>
                        <button class="btn btn-primary mt-2">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>

    <?php } ?>
</body>

</html>