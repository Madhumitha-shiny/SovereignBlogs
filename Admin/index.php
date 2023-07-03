<?php
include 'commom.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <?php $task = $_GET['task']; ?>
        <div class="row">
            <div style="background-color:lightgrey" class="col-lg-3 col-mb-12 py-3">
                <?php
                $id = $_SESSION['id'];
                $query = "SELECT * FROM admins WHERE id = '$id'";
                $run = mysqli_query($con, $query);
                $data = mysqli_fetch_array($run); ?>
                <div class="row p-3 text-center">
                    <div>
                        <img style="border-radius: 50%;" height="200" width="200" src="img/user.png" alt="user">
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col">
                        <h5>Name</h5>
                    </div>
                    <div class="col"><?php echo $data['firstname'] . " " . $data['lastname'] ?></div>
                </div>
                <div class="row m-2">
                    <div class="col">
                        <h5>Email ID</h5>
                    </div>
                    <div class="col"><?php echo $data['email'] ?></div>
                </div>
                <div class="row m-2">
                    <div class="col">
                        <h5>Phone numner</h5>
                    </div>
                    <div class="col"><?php echo $data['phonenumber'] ?></div>
                </div>
                <div class="row m-2">
                    <div class="col">
                        <h5>Gender</h5>
                    </div>
                    <div class="col"><?php echo $data['gender'] ?></div>
                </div>
                <div class="row p-2 m-2">
                    <a class="btn btn-warning" href="index.php?task=0">Dashboard</a>
                </div>
                <div class="row p-2 m-2">
                    <a class="btn btn-light" href="editabout.php?edit=0">Edit About</a>
                </div>
                <div class="row p-2 m-2">
                    <a class="btn btn-light" href="editcontact.php?edit=0">Edit Contact Info</a>
                </div>
                <a href="logout.php" class="btn btn-lg btn-danger p-2 m-2">LOGOUT</a>
            </div>
            <div class="col-lg col-mb-12 p-5">
                <div class="row">
                    <div class="col p-4 m-3 card shadow">
                        <div class="row">
                            <div class="col icon"><i class="fa fa-home px-4 py-3 shadow rounded" style="font-size: 300%;color:white;background-color:orange" aria-hidden="true"></i></div>
                            <div class="col">
                                <h6>Revenue</h6>
                                <h4>$5000</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <h6 class="text-secondary"><img src="img/cal.png" height="30" width="30" /> Last 24 Hours</h6>
                        </div>
                    </div>
                    <div class="col p-4 m-3 card shadow">
                        <div class="row">
                            <div class="col icon"><i class="fa fa-info-circle px-4 py-3 shadow rounded" style="font-size: 300%;color:white;background-color:green" aria-hidden="true"></i></div>
                            <div class="col">
                                <h6>Fixed Issues</h6>
                                <h4><?php echo $data['bugs'] ?></h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <h6 class="text-secondary"><img src="img/bug.png" height="30" width="30" /> Tracked from website</h6>
                        </div>
                    </div>
                    <div class="col p-4 m-3 card shadow">
                        <?php $users = "SELECT COUNT(*) AS ct FROM users";
                        $user_run = mysqli_query($con,$users);
                        $userdata = mysqli_fetch_array($user_run);?>
                        <div class="row">
                            <div class="col icon"><i class="fa fa-user px-4 py-3 shadow rounded" style="font-size: 300%;color:white;background-color:crimson" aria-hidden="true"></i></div>
                            <div class="col">
                                <h6>Users</h6>
                                <h4><?php echo $userdata['ct']?></h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <h6 class="text-secondary"><img src="img/us.png" height="30" width="30" /> Our family</h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div style="background-color: crimson;color:white" class="col-lg col-mb-12 p-4 m-3 card shadow">
                        <div class="row">
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript">
                                google.charts.load('current', {
                                    'packages': ['corechart']
                                });
                                google.charts.setOnLoadCallback(drawVisualization);

                                function drawVisualization() {
                                    // Some raw data (not necessarily accurate)
                                    var data = google.visualization.arrayToDataTable([
                                        ['Month', 'issues'],
                                        ['2004/05', 165],
                                        ['2005/06', 135],
                                        ['2006/07', 157],
                                        ['2007/08', 139],
                                        ['2008/09', 136]
                                    ]);

                                    var options = {
                                        title: 'Monthly isuues raised by the users',
                                        vAxis: {
                                            title: 'Issues'
                                        },
                                        hAxis: {
                                            title: 'Month'
                                        },
                                        seriesType: 'bars',
                                        series: {
                                            5: {
                                                type: 'line'
                                            }
                                        }
                                    };

                                    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
                                    chart.draw(data, options);
                                }
                            </script>
                            <div class="graph shadow" id="chart_div" style="width: 900px; height: 200px"></div>
                        </div>
                        <div class="row">
                            <h5>Issues Raised</h5>
                            <h6> 08% increased.</h6>
                            <hr>
                            <h6><img src="img/time.png" height="30" width="30" /> Updated 1 week ago</h6>
                        </div>
                    </div>
                    <div style="background-color: orange;color:white" class="col-lg col-mb-12 p-4 m-3 card shadow">
                        <div class="row">
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript">
                                google.charts.load('current', {
                                    'packages': ['corechart']
                                });
                                google.charts.setOnLoadCallback(drawChart);

                                function drawChart() {
                                    var data = google.visualization.arrayToDataTable([
                                        ['Year', 'Subscribers'],
                                        ['2018', 600],
                                        ['2019', 570],
                                        ['2020', 730],
                                        ['2021', 1000]
                                    ]);

                                    var options = {
                                        title: 'Email Subscriptions',
                                        hAxis: {
                                            title: 'Year',
                                            titleTextStyle: {
                                                color: '#333'
                                            }
                                        },
                                        vAxis: {
                                            minValue: 0
                                        }
                                    };

                                    var chart = new google.visualization.AreaChart(document.getElementById('chart_div2'));
                                    chart.draw(data, options);
                                }
                            </script>
                            <div class="graph shadow" id="chart_div2" style="width: 900px; height: 200px"></div>
                        </div>
                        <div class="row">
                            <h5>Email Subscriptions</h5>
                            <h6>Last Campaign Performance</h6>
                            <hr>
                            <h6><img src="img/time.png" height="30" width="30" /> Campaign sent 2 days ago</h6>
                        </div>
                    </div>
                    <div style="background-color: green;color:white" class="col-lg col-mb-12 p-4 m-3 card shadow">
                        <div class="row">
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript">
                                google.charts.load('current', {
                                    'packages': ['corechart']
                                });
                                google.charts.setOnLoadCallback(drawChart);

                                function drawChart() {
                                    var data = google.visualization.arrayToDataTable([
                                        ['Year', 'Users'],
                                        ['2004', 400],
                                        ['2005', 460],
                                        ['2006', 1120],
                                        ['2007', 540]
                                    ]);

                                    var options = {
                                        title: 'New Logins',
                                        curveType: 'function',
                                        legend: {
                                            position: 'bottom'
                                        }
                                    };

                                    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                                    chart.draw(data, options);
                                }
                            </script>
                            <div class="graph shadow" id="curve_chart" style="width: 900px; height: 200px"></div>
                        </div>
                        <div class="row">
                            <h5>New Logins</h5>
                            <h6>Last Analysis Performance</h6>
                            <hr>
                            <h6><img src="img/time.png" height="30" width="30" /> Analysis sent 4 days ago</h6>
                        </div>
                    </div>
                </div>
                <div class="row m-5 p-3 card shadow">
                    <div class=" bg-primary row p-2">
                        <div class="col-2 my-3 text-lg text-light">
                            <h6>Tasks</h6>
                        </div>
                        <a href="index.php?task=mode" class="col btn btn-light m-2">Mode</a>
                        <a href="index.php?task=bugs" class="col btn btn-light m-2">Bugs</a>
                        <a href="index.php?task=blocked" class="col btn btn-light m-2">Blocked</a>
                        <a class="col btn btn-light m-2" href="../index.php?posted=0">
                            <> Website
                        </a>
                    </div>

                    <?php if ($task == "mode") { ?>
                        <div class="row m-2 p-3">
                            <form action="modes.php" method="POST">
                                <h3>Power Down</h3>
                                <label class="switch">
                                    <input type="radio" name="mode" id="mode" value="1">
                                    <span class="slider round"></span>
                                </label><br>
                                <input class="m-2" type="submit">
                            </form>
                        </div>
                        <?php } elseif ($task == "bugs") {
                        $query = "SELECT DISTINCT * FROM `complaints` WHERE 1";
                        $run = mysqli_query($con, $query);
                        $total_rows = mysqli_num_rows($run);
                        if ($total_rows == 0) {
                            echo "<a href='index.php?task=0'></a>";
                        } else {
                        ?>

                            <h5 class="py-3">ISSUES TO BE RESOLVED</h5>
                            <div style="font-size:15px" class="row my-2">
                                <div class="row">
                                    <div class="col">
                                        <h6>Compaint ID</h6>
                                    </div>
                                    <div class="col">
                                        <h6>User name</h6>
                                    </div>
                                    <div class="col">
                                        <h6>User email</h6>
                                    </div>
                                    <div class="col">
                                        <h6>Problem</h6>
                                    </div>
                                    <div class="col">
                                        <h6>Status</h6>
                                    </div>
                                </div>
                                <hr>
                                <?php
                                while ($data = mysqli_fetch_array($run)) { ?>
                                    <div class="row">
                                        <div class="col">
                                            <p><?php echo $data['sno'] ?></p>
                                        </div>
                                        <div class="col">
                                            <p><?php echo $data['name'] ?></p>
                                        </div>
                                        <div class="col">
                                            <p><?php echo $data['email'] ?></p>
                                        </div>
                                        <div class="col">
                                            <p><?php echo $data['problem'] ?></p>
                                        </div>
                                        <div class="col">
                                            <a href="resolve.php?num=<?php echo $data['sno'] ?>" class="btn btn-sm btn-danger">Resolve</a>
                                        </div>
                                    </div>
                                    <hr>
                                <?php } ?>
                            </div>

                        <?php
                        }
                    } elseif ($task == "blocked") {
                        $query2 = "SELECT DISTINCT * FROM `blocked`";
                        $run2 = mysqli_query($con, $query2);
                        $total_rows2 = mysqli_num_rows($run2);
                        if ($total_rows2 == 0) {
                            echo "<a href='index.php?task=0'></a>";
                        } else {
                        ?>

                            <h5 class="py-3">Blocked List</h5>
                            <div style="font-size:15px" class="row my-2">
                                <div class="row">
                                    <div class="col">
                                        <h6>Email</h6>
                                    </div>
                                    <div class="col">
                                        <h6>Firstname</h6>
                                    </div>
                                    <div class="col">
                                        <h6>Lastname</h6>
                                    </div>
                                    <div class="col">
                                        <h6>Phonenumber</h6>
                                    </div>
                                    <div class="col">
                                        <h6>Country</h6>
                                    </div>
                                    <div class="col">
                                        <h6>Date</h6>
                                    </div>


                                </div>
                                <hr>
                                <?php
                                while ($data = mysqli_fetch_array($run)) { ?>
                                    <div class="row">
                                        <div class="col">
                                            <p><?php echo $data['email'] ?></p>
                                        </div>
                                        <div class="col">
                                            <p><?php echo $data['firstname'] ?></p>
                                        </div>
                                        <div class="col">
                                            <p><?php echo $data['lastname'] ?></p>
                                        </div>
                                        <div class="col">
                                            <p><?php echo $data['phonenumber'] ?></p>
                                        </div>
                                        <div class="col">
                                            <p><?php echo $data['country'] ?></p>
                                        </div>
                                        <div class="col">
                                            <p><?php echo $data['blocked'] ?></p>
                                        </div>
                                        <div class="col">
                                            <a href="unblock.php?id=<?php echo $data['userid'] ?>" class="btn btn-sm btn-danger">Unblock</a>
                                        </div>
                                    </div>
                                    <hr>
                                <?php } ?>
                            </div>

                        <?php
                        }
                    } else { ?>
                        <div class="row"></div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>

</html>