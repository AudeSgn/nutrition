<?php
require_once './db/db.php';
function getAllMeals()
{
    $pdo = getConnection();
    $query = $pdo->prepare("SELECT * FROM meal WHERE user_id=1");
    $query->execute();
    $meals = $query->fetchAll();
    return $meals;
}
// BONNE FONCTION A UTILISER QUAND ON AURA LES SESSIONS
// {
//     $pdo = getConnection();
//     $query = $pdo->prepare("SELECT * FROM meal WHERE user_id=?");
//     $query->execute($_SESSION["auth"]["id"]);
//     $meals = $query->fetchAll();
//     return $meals;
// }