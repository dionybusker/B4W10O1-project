<?php
// // session_start();
// // function userLogin($data) {
// //     $conn = openDatabaseConnection();

// //     $query = $conn->prepare("SELECT * FROM users WHERE username = :username");
// //     $query->bindParam(":username", $data["username"]);
// //     // $query->bindParam(":password", $data["password"]);
// //     $query->execute();

// //     $result = $query->fetch();

// //     if (!$result) {
// //         return "error";
// //     } else {
// //         $_SESSION["login"] = true;
// //         $_SESSION["username"] = $data["username"];
// //         return "success";
// //         // header("Location: " . URL . "home/index");
// //     }
// //     // return $_SESSION["username"];
// // }

// function userLogin($data) {
//     // $username = $data["username"];
//     // password moet nog gehasht worden
//     // $password = $data["password"];

//     $conn = openDatabaseConnection();

//     // $query = $conn->prepare("SELECT * FROM users WHERE username = :username");
//     // $query->bindParam(":username", $data["username"]);
//     // // $query->bindParam(":password", $password);
//     // $query->execute();

//     // $count = count($query->fetch());

//     // if ($count > 0) {
//     //     $_SESSION["loggedin"] = true;
//     //     $_SESSION["username"] = $data["username"];
//     //     // header("Location: " . URL . "home/index");
//     // } else {
//     //     $_SESSION["loggedin"] = false;
//     //     header("Location: " . URL . "login/index");
//     // }

//     // return $_SESSION;


//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         $username = $data["username"];
//         $password = $data["password"];

//         $query = $conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
//         $query->bindParam(":username", $username);
//         $query->bindParam(":password", $password);
//         $query->execute();
//         $result = $query->fetchAll();
//         $count = count($result);

//         if ($count == 1) {
//             $_SESSION["username"] = $username;
//             $_SESSION["loggedin"] = true;
//             header("Location: " . URL . "home/index");
//         } else {
//             $_SESSION["loggedin"] = false;
//             // echo "didn't work";
//         }
//     }

// }