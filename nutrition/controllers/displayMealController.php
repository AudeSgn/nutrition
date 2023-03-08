<?php
require_once '../models/mealModel.php';

session_start();

if ($_GET['action'] == 'displayMeals') {
    displayMealsHistory();
}

function displayMealsHistory()
{
    $user_id = $_SESSION["auth"]["id"];
    $meals = getAllMeals($user_id);
    require '../views/mealsHistoryView.php';
}
