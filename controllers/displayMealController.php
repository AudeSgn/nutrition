<?php
require_once '../models/mealsModel.php';


if ($_GET['action'] == 'displayMeals') {
    displayMealsHistory();
}

function displayMealsHistory()
{
    $meals = getAllMeals();
    require '../views/mealsHistoryView.php';
}
