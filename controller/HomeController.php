<?php

require(ROOT . "model/HomeModel.php");
// require(ROOT . "model/UsersModel.php");

function index() {
	render("home/index");	
}

// function login() {
//     if (isset($_POST["login"])) {
//         // $user = getUser($id);
//         userLogin($_POST);
//         render("home/index");
//     } else {
//         render("home/login");
//     }
// }

// function logout() {
//     // userLogout();
//     // render("home/index");
//     // header("Location: " . URL . "home/index");

//     session_start();
//     // session_unset();
//     // session_destroy();

//     // render("home/index");
//     // exit();
//     // session_start();
//     // unset($_SESSION["loggedin"]);
//     // unset($_SESSION["user_id"]);
//     // session_destroy();
//     render("home/logout");
// }