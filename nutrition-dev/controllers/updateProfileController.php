<?php

require './models/profileModel.php';

if ($_GET['action'] == 'updateProfileInformations') {
    getInformationsProfile();
};

function getInformationsProfile()
{
    $user_id = $_SESSION["auth"]["id"];
    if (!empty($_POST)) {
        $username = $_POST['usernameModif'];
        // $password = $_POST['passwordModif'];
        $lastname = $_POST['lastnameModif'];
        $firstname = $_POST['firstnameModif'];
        $birthdate = $_POST['birthdateModif'];
        $sex = $_POST['sexModif'];
        $weight = $_POST['weightModif'];
        $size = $_POST['sizeModif'];
        $sportive_activity = $_POST['activityModif'];
        $result = updateInformationsProfile($username, $lastname, $firstname, $birthdate, $sex, $weight, $size, $sportive_activity);

        if ($result === true) {
            $profile = allInformationsUser();
            require './views/profileView.php';
        } else {
            echo "<p> Une erreur est survenue</p>";
        }
    }
}
