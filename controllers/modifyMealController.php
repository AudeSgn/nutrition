<?php

session_start();

require_once '../models/mealModel.php';

if ($_GET['action'] == 'modifyMeal') {
    modifyMeal();
}

function modifyMeal()
{
    $meal_id = $_GET['mealno'];
    if (!empty($_POST)) {
        $meal_date = $_POST['dateModif'];
        $meal_calories = $_POST['caloriesModif'];
        $meal_description = $_POST['descriptionModif'];

        $result = getModifyMeal($meal_id, $meal_date, $meal_calories, $meal_description);

        if ($result === true) {
            $meals = getAllMeals($_SESSION["auth"]["id"]);
            require '../views/mealsHistoryView.php';
        } else {
            echo "<p> Une erreur est survenue</p>";
        }
    }
}
