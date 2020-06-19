<?php

function getAllGenres() {
    // functie om alle genres op te halen uit de database
    $conn = openDatabaseConnection();
    
    $query = $conn->prepare("SELECT * FROM genres");
    $query->execute();

    return $query->fetchAll();
}

function getAllGames() {
    // functie om alle games op te halen uit de database
    $conn = openDatabaseConnection();

    $query = $conn->prepare("SELECT games.*, genres.*
                             FROM games
                             JOIN genres ON genres.genre_id = games.genre_id");
    $query->execute();
    
    return $query->fetchAll();
}

function getGame($id) {
    // functie om een specifieke game op te halen uit de database
}

function createGame($data) {
    // if($data['game_name']!=NULL){
        // try {

    $conn = openDatabaseConnection();
    $insert = $conn->prepare("INSERT INTO games (game_name, developer, img, publisher, genre_id, total_spots, platform, description) VALUES (:game_name, :developer, :img, :publisher, :genre, :total_spots, :platform, :description)");
    $insert->bindParam(':game_name', $data["game_name"]);
    $insert->bindParam(':img', $data["img"]);
    $insert->bindParam(':developer', $data["developer"]);
    $insert->bindParam(':publisher', $data["publisher"]);
    $insert->bindParam(':genre', $data["genre"]);
    $insert->bindParam(':total_spots', $data["total_spots"]);
    $insert->bindParam(':platform', $data["platform"]);
    $insert->bindParam(':description', $data["description"]);
    $insert->execute();



// }
// catch(PDOException $e) {
// echo "Connection failed: " . $e->getMessage();
// }
// $conn = null;

// return $result;
// }
}




    // functie om een game aan te maken en opslaan in de database


function updateGame($id, $data) {
    // functie om een bestaande game uit de database te bewerken
}

function deleteGame($id) {
    // functie om een specifieke game te verwijderen uit de database
}