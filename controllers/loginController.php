<?php
require "./../models/userModel.php";
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $user = new User();
    $id = $user->getIdByAuth($username, $_POST["password"]);
    session_start();
    if ($id == true) {
        $_SESSION["auth"]["id"] = $id;
        $_SESSION["auth"]["username"] = $username;
        header("Location: ./../controllers/homeController.php");
    } else {
        $_SESSION["error"]["id"] = "Nom d'utilisateur ou mot de passe incorrect";
        header("Location: ./../views/authView.php");
    }
}
