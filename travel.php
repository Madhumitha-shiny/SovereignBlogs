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
    <title>Travel Page</title>
    <link rel="stylesheet" href="category_style.css">
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <div class="container p-5">
        <div class="row">
            <?php
            $id = $_SESSION['id'];
            $login_select_query = "SELECT * FROM blogs WHERE category='travel'";
            $login_select_result = mysqli_query($con, $login_select_query);
            $total_rows = mysqli_num_rows($login_select_result);
            if ($total_rows == 0) {
                header('location:index.php?posted=0?error=No blogs');
            } else {
                while ($row = mysqli_fetch_array($login_select_result)) { ?>
                    <div class="col-4 mt-3">

                        <?php if ($row['cimg'] == "") { ?>
                            <img src="img/travel.jfif" height="220" width="380" />
                        <?php } else { ?>
                            <img src="<?php echo $row['cimg'] ?>" height="220" width="380" />
                        <?php } ?>
                        <h3 class="mt-4" style="color:crimson;"><?php echo $row['title'] ?></h3>
                        <p style="font-weight: bold;" class="m-3"><?php echo $row['created'] ?></p>
                        <p class="text-dark"><?php echo $row['story'] ?></p>
                        <a href="blogview.php?bid=<?php echo $row['blogid'] ?>"><button type="button" class="btn btn-info">Read More</button></a>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>

</html>