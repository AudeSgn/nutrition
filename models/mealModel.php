<?php
require("../db/db.php");

function setInformationsMeal($meal_type, $calories, $meal_details, $meal_date, $user_id)
{
    $db = getConnection();
    $query = $db->prepare("INSERT INTO meal (meal_type,calories, meal_details, meal_date, user_id)
    VALUES (:meal_type, :calories, :meal_details, :meal_date, :user_id) ");
    $query->bindParam(':meal_type', $meal_type);
    $query->bindParam(':calories', $calories);
    $query->bindParam(':meal_details', $meal_details);
    $query->bindParam(':meal_date', $meal_date);
    $query->bindParam(':user_id', $user_id);

    $result = $query->execute();
    return $result;
}

function getAllMeals()
{
    $pdo = getConnection();
    $query = $pdo->prepare("SELECT * FROM meal WHERE user_id=?
    ORDER BY meal_date asc");
    $query->execute(array($_SESSION["auth"]["id"]));
    $meals = $query->fetchAll();
    return $meals;
}


function getDeleteMeal($meal_id)
{
    $pdo = getConnection();
    $query = $pdo->prepare("DELETE FROM meal WHERE meal_id = :meal_id");
    $query->bindParam(':meal_id', $meal_id);
    $result = $query->execute();
    return $result;
}

function getModifyMeal($meal_id, $meal_date, $meal_calories, $meal_description)
{
    $pdo = getConnection();
    $query = $pdo->prepare("UPDATE meal  SET calories=?, meal_details=?, meal_date=? WHERE meal_id=?");
    $result = $query->execute(array($meal_calories, $meal_description, $meal_date, $meal_id));
    return $result;
};
