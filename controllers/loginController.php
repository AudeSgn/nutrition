<?php
require "./../models/userModel.php";
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $user = new User();
    $id = $user->getIdByAuth($username, $_POST["password"]);
    if ($id == true) {
        session_start();
        $_SESSION["auth"]["id"] = $id;
        header("Location: ./../views/viewHomePage.html");
    } else {
        header("Location: ./../views/authView.html");
    }
}

