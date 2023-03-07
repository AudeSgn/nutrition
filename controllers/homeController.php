<?php

require_once "./../models/userModel.php";
session_start();
$user = (new User())->getUserDatabyId($_SESSION["auth"]["id"])[0];
$weight = $user['weight'];
$size = $user['size'];
$today = date("y-m-d");
$age = date_diff(date_create($user['birthdate']), date_create($today))->format('%y');
$sex = $user['sex'];
$sportiveActivity = $user['sportive_activity'];

function calculCalorie($weight, $size, $age, $sex, $sportiveActivity)
{
    $resultWeight = $weight * 10;
    $resultSize = $size * 6.25;
    $result = $resultWeight + $resultSize;
    $result = $result - ($age * 5);
    if ($sex == 0) {
        $result -= 161;
    } else {
        $result += 5;
    }

    if ($sportiveActivity == 0) {
        $result *= 1.2;
    } elseif ($sportiveActivity == 1) {
        $result *= 1.55;
    } else {
        $result *= 1.725;
    }
    return round($result);
}

$_SESSION["auth"]["calories"] = calculCalorie($weight, $size, $age, $sex, $sportiveActivity);

function BMIcalc($weight, $size)
{
    $bmi = $weight / (($size / 100) * ($size / 100));
    return round($bmi);
}

$_SESSION["auth"]["bmi"] = BMIcalc($weight, $size);
header('Location: ../views/homePageView.php');
