<?php

require './controllers/updateProfileController.php';

function allInformationsUser()
{
    $db = getConnection();
    $query = $db->prepare("SELECT * FROM user WHERE user_id=1");
    $query->execute();
    $profile = $query->fetchAll();
    return $profile;
}

function updateInformationsProfile($username, $lastname, $firstname, $birthdate, $sex, $weight, $size, $sportive_activity)
{
    $db = getConnection();
    $query = $db->prepare("UPDATE user SET usernameModif=?, lastnameModif=?, firstanmeModif=?, birthdateModif=?, sexModif=?, weightModif=?, sizeModif=?, activityModif=? WHERE user_id=?");
    $result = $query->execute(array($username, $lastname, $firstname, $birthdate, $sex, $weight, $size, $sportive_activity));
    return $result;
}
