<?php

require '../models/mealModel.php';
require "./db/db.php";

function acceuil()
{
    require './views/homePageView.php';
}

function createMeal()
{
    echo "function createMeal";
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
}

// $_SESSION["auth"]["id"]