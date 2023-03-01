<?php
include('./views/homePageView.php');

if ($_GET['action'] == 'createMeal') {
    createMeal();
};
