<?php
require('./../db/db.php');

function allInformationsUser()
{
    $db = getConnection();
    $query = $db->prepare("SELECT * FROM user WHERE user_id=1");
    $query->execute();
    $profile = $query->fetchAll();
    return $profile;
}

function updateInformationsProfile($usernameModif, $lastnameModif, $firstnameModif, $birthdateModif, $sexModif, $weightModif, $sizeModif, $sportive_activityModif, $user_id)
{
    $db = getConnection();
    $query = $db->prepare("UPDATE user SET username=?, lastname=?, firstname=?, birthdate=?, sex=?, weight=?, size=?, sportive_activity=? WHERE user_id=?");
    $result = $query->execute(array($usernameModif, $lastnameModif, $firstnameModif, $birthdateModif, $sexModif, $weightModif, $sizeModif, $sportive_activityModif, $user_id));
    return $result;
}
