<?php

function getInformationsMeal($calories, $meal_details)
{
    $pdo = getConnection();
    $query = $pdo->prepare("INSERT INTO meal (type, calories, meal_details, date)
    VALUES (:type, :calories, :meal_details, :date) ");
    $query->bindParam(':calories', $calories);
    $query->bindParam(':meal_details', $meal_details);

    $result = $query->execute();
    return $result;
}

// JOIN
