<?php
session_start();

require_once '../models/mealModel.php';

if ($_GET['action'] == 'deleteMeal') {
    deleteMeal();
}

function deleteMeal()
{
    $meal_id = $_GET['mealno'];
    $result = getDeleteMeal($meal_id);
    if ($result === true) {
        $meals = getAllMeals($_SESSION["auth"]);
        require '../views/mealsHistoryView.php';
    } else {
        echo "<p> Une erreur est survenue</p>";
    }
}
