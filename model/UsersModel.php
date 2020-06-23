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
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $result = $stmt->fetch();
    $conn = null;
    return $result;
}

function createUser($data) {
    // functie om een user aan te maken en opslaan in de database
    $conn = openDataBaseConnection();
           $insert = $conn->prepare("INSERT INTO users (id, full_name, age, email, phone) VALUES (null, :full_name, :age, :email, :phone)");
           $insert->bindParam(':full_name', $data['full_name']);
           $insert->bindParam(':age', $data['age']);
		   $insert->bindParam(':email', $data['email']);
		   $insert->bindParam(':phone', $data['phone']);
           $insert->execute();
           $conn = null;  
}

function updateUser($id, $data) {
    // functie om een bestaande user uit de database te bewerken
    $conn = openDataBaseConnection();
           $insert = $conn->prepare("UPDATE users SET full_name = :fullname, age = :age, email = :email, phone = :phone where id =:id");
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
    if($_POST['input'] == 'bevestigd') {  
        $conn = openDataBaseConnection();
        $insert = $conn->prepare("DELETE FROM users WHERE id = :id");
        $insert->bindParam(':id', $id);
        $output = $insert->execute();
        $conn = null;
        return $output;
    }
}