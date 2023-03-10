<?php

function getCaloriesForDay($maxCalories) {
    require_once "./../models/mealModel.php";

    $allCaloriesForDay = 0;
    foreach (getAllMealsByID($_SESSION["auth"]["id"]) as $meal) {
        $dateInDay = date_diff(date_create($meal["meal_date"]), date_create(date("y-m-d")))->format('%d');
        if ($dateInDay == 0) {
            $allCaloriesForDay += $meal["calories"];
        }
    }
    if ($maxCalories <= $allCaloriesForDay) {
        return true;

    } else {
        return false;
    }
}