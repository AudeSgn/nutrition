<?php
require_once './controllers/mealsController.php';

if ($_GET['action'] == 'displayMeals') {
    displayMealsHistory();
}
