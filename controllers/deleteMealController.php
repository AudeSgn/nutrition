<?php

require_once '../models/mealsModel.php';

if ($_GET['action'] == 'deleteMeal') {
    deleteMeal();
}

function deleteMeal()
{
    $meal_id = $_GET['mealno'];
    $result = getDeleteMeal($meal_id);
    if ($result === true) {
        $meals = getAllMeals();
        require '../views/mealsHistoryView.php';
    } else {
        echo "<p> Une erreur est survenue</p>";
    }
}
