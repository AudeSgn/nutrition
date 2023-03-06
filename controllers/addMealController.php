<?php
session_start();

include '../models/mealModel.php';

// function acceuil()
// {
//     require './views/homePageView.php';
// }

if ($_GET['action'] == 'createMeal') {
    createMeal();
}

function createMeal()
{
    if (!empty($_POST)) {
        $meal_type = $_POST['typeOfMeal'];
        $calories = $_POST['calories'];
        $meal_details = $_POST['details'];
        $meal_date = $_POST['meal_date'];
        $user_id = $_SESSION["auth"]["id"];
        $result = setInformationsMeal($meal_type, $calories, $meal_details, $meal_date, $user_id);

        if ($result === true) {
            require '../views/homePageView.php';
        }
    }
}
