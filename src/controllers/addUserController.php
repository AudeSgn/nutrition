<?php
session_start();

require('../models/addUserModel.php');


createUser();

function createUser()
{


  if (!empty($_POST)) {

    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $size = $_POST['size'];
    $weight = $_POST['weight'];
    $birthdate = $_POST['birthdate'];
    $sportive_activity = $_POST['sportive_activity'];
    $sex = $_POST['sex'];

    // var_dump($_POST);

    $result = setCreateUser($lastname, $firstname, $username, $password, $size, $weight, $birthdate,  $sportive_activity, $sex);

    if ($result === true) {

      header('Location:../../index.php');
    }
  }
}
