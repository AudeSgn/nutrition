<?php

function getConnection() {
    $ip = "localhost";
    $dbname = "nutrition";
    $user = "root";
    return new PDO("mysql:host=$ip;dbname=$dbname", $user, "");
}