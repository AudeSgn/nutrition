<?php
include('./controllers/mealController.php');

acceuil();


if ($_GET['action'] == 'createMeal') {
    createMeal();
};
