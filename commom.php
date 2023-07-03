<?php

$con = mysqli_connect("localhost", "root", "", "sovereignblog");
if (!isset($_SESSION['id'])) {
    session_start();
}
