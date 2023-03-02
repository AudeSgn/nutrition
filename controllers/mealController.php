<?php

// include '../models/mealModel.php';
// require "./db/db.php";
// var_dump($_POST);
// die;

function createMeal()
{
    // print_r("toto");
    // die;
    if (!empty($_POST)) {
        $meal_type = $_POST['typeOfMeal'];
        $calories = $_POST['calories'];
        $meal_details = $_POST['details'];
        $meal_date = $_POST['meal_date'];

        $result = setInformationsMeal($meal_type, $calories, $meal_details, $meal_date);

        if ($result === true) {
            // require './views/homePageView.php';
            echo "succes !!";
        } else {
            echo "<p> Une erreur est survenue</p>";
        }
    }
    return false;
}

// $_SESSION["auth"]["id"]