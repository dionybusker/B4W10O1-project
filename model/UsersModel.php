<?php

function getAllUsers() {
    // functie om alle users op te halen uit de database
    $db = openDatabaseConnection();
	$sql = "SELECT * FROM users";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getUser($id) {
    // functie om een specifieke user op te halen uit de database
    $conn=openDatabaseConnection();
    $stmt = $conn->prepare("SELECT * FROM users WHERE user_id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $result = $stmt->fetch();
    $conn = null;
    return $result;
}

function createUser($data) {
    // functie om een user aan te maken en opslaan in de database
    $conn = openDataBaseConnection();

    $passwordHash = password_hash($data["password"], PASSWORD_BCRYPT, array("cost" => 12));

    $query = $conn->prepare("SELECT COUNT(username) AS num FROM users WHERE username = :username");
    $query->bindParam(":username", $data["username"]);
    $query->execute();
    $row = $query->fetch();

    // if ($row["num"] > 0) {
    //     $error = "Username already exists!";
    // } else {
        $insert = $conn->prepare("INSERT INTO users (full_name, birthday, email, phone, username, password, user_img) VALUES (:full_name, :birthday, :email, :phone, :username, :password, :img)");
        $insert->bindParam(':full_name', $data['full_name']);
        $insert->bindParam(':birthday', $data['birthday']);
        $insert->bindParam(':email', $data['email']);
        $insert->bindParam(':phone', $data['phone']);
        $insert->bindParam(':username', $data['username']);
        $insert->bindParam(':password', $passwordHash);
        $insert->bindParam(':img', $data["img"]);
        $insert->execute();
    // }


    // $conn = null;  
}

function updateUser($id, $data) {
    // functie om een bestaande user uit de database te bewerken
    $conn = openDataBaseConnection();
    $insert = $conn->prepare("UPDATE users SET full_name = :fullname, age = :age, email = :email, phone = :phone where user_id =:id");
    $insert->bindParam(':id', $id);
    $insert->bindParam(':fullname', $data['full_name']);
    $insert->bindParam(':age', $data['age']);
    $insert->bindParam(':email', $data['email']);
    $insert->bindParam(':phone', $data['phone']);
    $insert->execute();
    $conn = null;
}

function deleteUser($id) {
    // functie om een specifieke user te verwijderen uit de database
    $conn = openDatabaseConnection();
    $query = $conn->prepare("SELECT * FROM users WHERE user_id = :id");
    $query->bindParam(":id", $id);
    $query->execute();

    $rows = $query->rowCount();

    if ($rows > 0) {
        $query = $conn->prepare("DELETE FROM users WHERE user_id = :id");
        $query->bindParam(":id", $id);
        $result = $query->execute();
    }

    return $result;
}

function sanitizeData($data) {
    $data = strip_tags($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);

    return $data;
}

function validateData($data) {
    if (preg_match("/^[a-zA-Z0-9 .-_]*$/", $data)) {
        return $data;
    }
}

function validateMail($data) {
    if (filter_var($data, FILTER_VALIDATE_EMAIL)) {
        return $data;
    }
}