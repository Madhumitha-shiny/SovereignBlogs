<?php

require_once 'vendor/autoload.php';

// init configuration
$clientID = '61418790506-6nvqh74pidgrlrdisi3bum9ahit86ami.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/project1/welcome.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// Connect to database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "new";

$conn = mysqli_connect($hostname, $username, $password, $database);