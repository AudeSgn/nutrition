<?php

require './../models/profileModel.php';

session_start();
$user_id = $_SESSION["auth"]["id"];
if (!empty($_POST)) {
    $usernameModif = $_POST['username'];
    // $password = $_POST['passwordModif'];
    $lastnameModif = $_POST['lastname'];
    $firstnameModif = $_POST['firstname'];
    $birthdateModif = $_POST['birthdate'];
    $sexModif = intval($_POST['gender']);
    $weightModif = intval($_POST['weight']);
    $sizeModif = intval($_POST['height']);
    $sportive_activityModif = intval($_POST['sportiveActivity']);;
    $result = updateInformationsProfile($usernameModif, $lastnameModif, $firstnameModif, $birthdateModif, $sexModif, $weightModif, $sizeModif, $sportive_activityModif, $user_id);

    if ($result === true) {
        $profile = allInformationsUser();
        require './../views/homePageView.php';
    } else {
        echo "<p> Une erreur est survenue</p>";
    }
}
