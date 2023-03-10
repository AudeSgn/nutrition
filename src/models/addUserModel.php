<?php
require("../db/db.php");


function setCreateUser($lastname, $firstname, $username, $password, $size, $weight, $birthdate,  $sportive_activity, $sex, $user_id)
{

    $db = getConnection();

    $query = $db->prepare("INSERT INTO user (user_id, username, password, lastname, firstname, birthdate, sex, weight, size, sportive_activity )
    VALUES (:user_id, :username, :password,:lastname ,:firstname ,:birthdate, :sex, :weight, :size, :sportive_activity)");
    $query->bindParam(':user_id', $user_id);
    $query->bindParam(':username', $username);
    $query->bindParam(':password', $password);
    $query->bindParam(':lastname', $lastname);
    $query->bindParam(':firstname', $firstname);
    $query->bindParam(':birthdate', $birthdate);
    $query->bindParam(':sex', $sex);
    $query->bindParam(':weight', $weight);
    $query->bindParam(':size', $size);
    $query->bindParam(':sportive_activity', $sportive_activity);


    $result = $query->execute();
    return $result;
}