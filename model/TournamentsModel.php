<?php

function getAllTournaments() {
    // functie om alle tournaments op te halen uit de database
    $conn = openDatabaseConnection();

    $query = $conn->prepare("SELECT games.*, tournaments.*, users.*
                             FROM tournaments
                             JOIN games ON games.game_id = tournaments.game_id
                             JOIN users ON users.user_id = tournaments.user_id
                             ORDER BY tournament_id");
    $query->execute();
    
    return $query->fetchAll();
}

function getTournament($id) {
    // functie om een specifieke user op te halen uit de database
    $conn=openDatabaseConnection();
    $stmt = $conn->prepare("SELECT * FROM tournaments WHERE tournament_id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $result = $stmt->fetch();
    $conn = null;
    return $result;
}

function createTournament($data) {
    // functie om een user aan te maken en opslaan in de database
    $conn = openDataBaseConnection();
    $insert = $conn->prepare("INSERT INTO tournaments (game_id, user_id) VALUES (:game_id, :user_id)");
    $insert->bindParam(':game_id', $data['game_id']);
    $insert->bindParam(':user_id', $data['user_id']);
    $insert->execute();
    $conn = null;  
}

function updateTournament($id, $data) {
    // functie om een bestaande user uit de database te bewerken
    $conn = openDataBaseConnection();
    $insert = $conn->prepare("UPDATE tournaments SET game_id = :game_id, user_id = :user_id where tournament_id = :id");
    $insert->bindParam(':id', $id);
    $insert->bindParam(':game_id', $data['game_id']);
    $insert->bindParam(':user_id', $data['user_id']);
    $insert->execute();
    $conn = null;
}

function deleteTournament($id) {
    // functie om een specifieke user te verwijderen uit de database
    $conn = openDatabaseConnection();
    $query = $conn->prepare("SELECT * FROM tournaments WHERE tournament_id = :id");
    $query->bindParam(":id", $id);
    $query->execute();

    $rows = $query->rowCount();

    if ($rows > 0) {
        $query = $conn->prepare("DELETE FROM tournaments WHERE tournament_id = :id");
        $query->bindParam(":id", $id);
        $result = $query->execute();
    }

    return $result;
}

function getAllGames() {
    // functie om alle games op te halen uit de database
    $conn = openDatabaseConnection();

    $query = $conn->prepare("SELECT games.*, genres.*, platforms.*
                             FROM games
                             JOIN genres ON genres.genre_id = games.genre_id
                             JOIN platforms ON platforms.platform_id = games.platform_id
                             ORDER BY game_id");
    $query->execute();
    
    return $query->fetchAll();
}

function getAllUsers() {
    // functie om alle users op te halen uit de database
    $db = openDatabaseConnection();
	$sql = "SELECT * FROM users";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}


?>