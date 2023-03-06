<?php
require_once '../db/db.php';

function getAllMeals()
{
    $pdo = getConnection();
    $query = $pdo->prepare("SELECT * FROM meal WHERE user_id=1");
    $query->execute();
    $meals = $query->fetchAll();
    return $meals;
}

// BONNE FONCTION A UTILISER QUAND ON AURA LES SESSIONS
// function getAllMeals {
//     $pdo = getConnection();
//     $query = $pdo->prepare("SELECT * FROM meal WHERE user_id=?");
//     $query->execute($_SESSION["auth"]["id"]);
//     $meals = $query->fetchAll();
//     return $meals;
// }

function getDeleteMeal($meal_id)
{
    $pdo = getConnection();
    $query = $pdo->prepare("DELETE FROM meal WHERE meal_id = :meal_id");
    $query->bindParam(':meal_id', $meal_id);
    $result = $query->execute();
    return $result;
}

function getModifyMeal($meal_id, $meal_date, $meal_type, $meal_calories, $meal_description)
{
    $pdo = getConnection();
    $query = $pdo->prepare("UPDATE meal  SET meal_type=?, calories=?, meal_details=?, meal_date=? WHERE meal_id=?");
    $result = $query->execute(array($meal_type, $meal_calories, $meal_description, $meal_date, $meal_id));
    return $result;
};
