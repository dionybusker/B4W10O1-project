<?php

// function userLogin($data) {
//     $conn = openDatabaseConnection();

//     // gegevens ophalen uit de login form
//     $username = !empty($data["username"]) ? trim($data["username"]) : null;
//     $passwordAttempt = !empty($data["password"]) ? trim($data["password"]) : null;

//     $query = $conn->prepare("SELECT user_id, username, password
//                              FROM users
//                              WHERE username = :username");
//     $query->bindParam(":username", $username);
//     $query->execute();
//     $user = $query->fetch();

    
//     if (password_verify($passwordAttempt, $user["password"])) {
//         $_SESSION["loggedin"] = true;
//         $_SESSION["user_id"] = $user["user_id"];

//         header("Location: " . URL . "home/index");
//         // exit();
//     }
// }


// function userLogout() {
//     session_start();
//     session_unset();
//     session_destroy();

//     // header("Location: " . URL . "home/index");
//     // exit();
// }