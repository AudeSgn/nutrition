<?php
require_once '../models/userModel.php';
session_start();

$user = (new User())->getUserDatabyId($_SESSION["auth"]["id"])[0];
$username = $user['username'];
$weight = $user['weight'];
$size = $user['size'];
$lastname = $user['lastname'];
$firstname = $user['firstname'];
$birthdate = $user['birthdate'];
$sex = $user['sex'];
$sportiveActivity = $user['sportive_activity'];

require_once '../views/profileView.php';
