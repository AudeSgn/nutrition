<?php
require_once '../models/mealModel.php';

$user_id = $_SESSION["auth"]["id"];

if ($_GET['action'] == 'displayMeals') {
    displayMealsHistory();
}

function displayMealsHistory()
{
    $meals = getAllMeals();
    require '../views/mealsHistoryView.php';
}
