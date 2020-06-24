<?php

function getAllGenres() {
    // functie om alle genres op te halen uit de database
    $conn = openDatabaseConnection();
    
    $query = $conn->prepare("SELECT * FROM genres");
    $query->execute();

    return $query->fetchAll();
}

function getAllPlatforms() {
    // functie om alle platforms op te halen uit de database
    $conn = openDatabaseConnection();
    
    $query = $conn->prepare("SELECT * FROM platforms");
    $query->execute();

    return $query->fetchAll();
}

function getAllGames() {
    // functie om alle games op te halen uit de database
    $conn = openDatabaseConnection();

    $query = $conn->prepare("SELECT games.*, genres.*, platforms.*
                             FROM games
                             JOIN genres ON genres.genre_id = games.genre_id
                             JOIN platforms ON platforms.platform_id = games.platform_id");
    $query->execute();
    
    return $query->fetchAll();
}

function getGame($id) {
    $conn = openDatabaseConnection();

    $query = $conn->prepare("SELECT games.*, genres.*, platforms.*
                             FROM games 
                             JOIN genres ON genres.genre_id = games.genre_id
                             JOIN platforms ON platforms.platform_id = games.platform_id 
                             WHERE game_id = :id");
    $query->bindParam(':id', $id);
    $query->execute();
    
    
    return $query->fetch();
    // functie om een specifieke game op te halen uit de database
}

function createGame($data) {
    // if($data['game_name']!=NULL){
        // try {

    $conn = openDatabaseConnection();
    $insert = $conn->prepare("INSERT INTO games (game_name, developer, img, publisher, releasedate, genre_id, platform_id, total_spots, description) 
                              VALUES (:game_name, :developer, :img, :publisher, :releasedate, :genre, :platform, :total_spots, :description)");
    $insert->bindParam(':game_name', $data["game_name"]);
    $insert->bindParam(':img', $data["img"]);
    $insert->bindParam(':developer', $data["developer"]);
    $insert->bindParam(':publisher', $data["publisher"]);
    $insert->bindParam(':releasedate', $data["releasedate"]);
    $insert->bindParam(':genre', $data["genre"]);
    $insert->bindParam(':platform', $data["platform"]);
    $insert->bindParam(':total_spots', $data["total_spots"]);
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
    // functie om een bestaande game uit de database te bewerken\
    $conn = openDatabaseConnection();
    $insert = $conn->prepare("UPDATE games
                              SET game_name = :game_name,
                                  img = :img,
                                  developer = :developer,
                                  publisher = :publisher,
                                  releasedate = :releasedate,
                                  genre_id = :genre,
                                  platform_id = :platform,
                                  total_spots = :total_spots,
                                  description = :description
                              WHERE game_id = :id");
    $insert->bindParam(":id", $id);
    $insert->bindParam(':game_name', $data["game_name"]);
    $insert->bindParam(':img', $data["img"]);
    $insert->bindParam(':developer', $data["developer"]);
    $insert->bindParam(':publisher', $data["publisher"]);
    $insert->bindParam(':releasedate', $data["releasedate"]);
    $insert->bindParam(':genre', $data["genre"]);
    $insert->bindParam(':platform', $data["platform"]);
    $insert->bindParam(':total_spots', $data["total_spots"]);
    $insert->bindParam(':description', $data["description"]);
    $insert->execute();

}

function deleteGame($id) {
    // functie om een specifieke game te verwijderen uit de database
    $conn = openDatabaseConnection();

    $query = $conn->prepare("SELECT * FROM games WHERE game_id = :id");
    $query->bindParam(":id", $id);
    $query->execute();

    $rows = $query->rowCount();

    if ($rows > 0) {
        $query = $conn->prepare("DELETE FROM games WHERE game_id = :id");
        $query->bindParam(":id", $id);
        $result = $query->execute();
    }

    return $result;
}