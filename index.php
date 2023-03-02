<?php

require('./controllers/mealController.php');



if ($_GET['action'] == 'createMeal') {
    createMeal();
    var_dump($_POST);
    die;
};
