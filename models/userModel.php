<?php
require "./../db/db.php";

class User {

    private $db;

    function __construct()
    {
        $this->db = getConnection();
    
    }

    function getIdByAuth($username, $password) {
        $req = $this->db->prepare("SELECT user_id FROM user WHERE username=? AND password=?");
        $req->execute([$username, strval($_POST["password"])]);
        return $req->fetch()["user_id"];
    }

    function getUsernameById($id) {
        $req = $this->db->prepare("SELECT username FROM user WHERE user_id=?");
        $req->execute([intval($id)]);
        return $req->fetch()["username"];
    }
}