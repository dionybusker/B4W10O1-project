<?php

require(ROOT . "model/HomeModel.php");

function index() {
	render("home/index");	
}

function login() {
    // if (isset($_POST["login"])) {
        userLogin($_POST);
        
    // }
}