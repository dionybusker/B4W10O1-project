<?php

require(ROOT . "model/LoginModel.php");
require(ROOT . "model/UsersModel.php");
// require(ROOT . "model/SessionModel.php");

function index() {
    render("login/index");
}

function login() {
    // if (isset($_POST["login"])) {
    //     if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    //         $data["username"] = $_POST["username"];
    //         $data["password"] = $_POST["password"];

    //         userLogin($data);
    //     }
    // }

    // render("login/index");

    

    userLogin($_POST);
    // header("Location: " . URL . "home/index");


    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $username = $_POST["username"];
    //     $password = $_POST["password"];

    // }   
    header("Location: " . URL . "home/index");
}
 

// function signin() {
//     header("Location: " . URL . "home/index");
// }

function logout() {
    unset($_SESSION["username"]);
    session_destroy();
    header("Location: " . URL . "home/index");
    exit();
}