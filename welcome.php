<?php
require_once 'config.php';
include 'commom.php';
// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);

  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $userinfo = [
    'email' => $google_account_info['email'],
    'token' => $google_account_info['id'],
  ];

  // checking if user is already exists in database
  $sql = "SELECT * FROM users WHERE email ='{$userinfo['email']}'";
  $result = mysqli_query($con, $sql);
  $data = mysqli_fetch_array($result);
  if (mysqli_num_rows($result) > 0) {
    $userinfo = mysqli_fetch_assoc($result);
    header("Location:profile.php?b=0");
  } else {
    // user is not exists
    header("Location:login.php?error=User not exists");
  }

  // save user data into session
  $id = $data['id'];
  $_SESSION['id'] = $id;
} else {
  if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    die();
  }

  // checking if user is already exists in database
  $sql = "SELECT * FROM users WHERE id ='{$id}'";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
    $userinfo = mysqli_fetch_assoc($result);
    header("Location:profile.php?b=0");
  }
}
