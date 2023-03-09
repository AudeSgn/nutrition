<?php

include "./../models/mealModel.php";
if (true) {
    session_start();
    $meals_calories = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    foreach (getAllMealsByID($_SESSION["auth"]["id"]) as $meal) {
        $dateInDay = date_diff(date_create($meal["meal_date"]), date_create(date("y-m-d")))->format('%d');
        if ($dateInDay < 10) {
            $meals_calories[$dateInDay] += $meal["calories"];
        }
    }
    echo json_encode($meals_calories);
}