<?php
require_once './models/mealsModel.php';

function displayMealsHistory()
{
    $meals = getAllMeals();
    require 'views/mealsHistoryView.php';
}
