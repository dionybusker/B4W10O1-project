<?php

require(ROOT . "model/HomeModel.php");
require(ROOT . "model/UsersModel.php");

function index() {
	render("home/index");	
}

function login() {
    if (isset($_POST["login"])) {
        // $user = getUser($id);
        userLogin($_POST);
        render("home/index");
    } else {
        render("home/login");
    }
}

function logout() {
    session_start();
    session_unset();
    session_destroy();

    header("Location: " . URL . "home/index");
    exit();
}