<?php

require(ROOT . "model/GamesModel.php");

function index() {
    // variabele om alle games op te vragen
    $games = getAllGames();
    // juiste pagina weergeven in de view
    render("games/index", array('games' => $games));
}

function detail($id){
    $game = getGame($id);
    render("games/detail", array('game' => $game));
}

// functie create() laat de juiste pagina zien in de view
function create() {
    // juiste pagina weergeven in de view
    $genres = getAllGenres();
    $platforms = getAllPlatforms();
	render("games/create", array(
        'genres' => $genres,
        'platforms' => $platforms
    ));
}

// functie store() slaat de gegevens van het formulier op
function store() {
    // gegevens van het formulier opslaan
    // doorverwijzen naar de juiste pagina

    ## het kan korter, maar dat moeten we nog uitzoeken! ##
    $genres = getAllGenres();
    $platforms = getAllPlatforms();

    $gamename = validateData(sanitizeData($_POST["game_name"]));
    $img = validateData(sanitizeData($_POST["img"]));
    $developer = validateData(sanitizeData($_POST["developer"]));
    $publisher = validateData(sanitizeData($_POST["publisher"]));
    $totalspots = validateData(sanitizeData($_POST["total_spots"]));
    $description = sanitizeData($_POST["description"]);
    $releasedate = validateData(sanitizeData($_POST["releasedate"]));
    $genre = $_POST["genre"];
    $platform = $_POST["platform"];

    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($gamename) || empty($img) || empty($developer) || empty($publisher) || empty($totalspots) || empty($description) || empty($releasedate) || empty($genre) || empty($platform)) {
            $error = "Please fill in the form.";
            render("games/create", array(
                "genres" => $genres,
                "platforms" => $platforms,
                "error" => $error,
                "gamename" => $gamename,
                "img" => $img,
                "developer" => $developer,
                "publisher" => $publisher,
                "totalspots" => $totalspots,
                "description" => $description,
                "releasedate" => $releasedate
            ));
        } else {
            createGame($_POST);
            header("Location: " . URL . "games/index");
        }
    }
}

// functie edit($id) laat de juiste pagina zien met het correcte id
function edit($id) {
    // variabele om een specifieke game op te halen uit de database
    // juiste pagina weergeven in de view
    $genres = getAllGenres();
    $game = getGame($id);
    $platforms = getAllPlatforms();

    render("games/update", array(
        'genres' => $genres,
        'platforms' => $platforms,
        'game' => $game
    ));

}


// functie update($id) doet de al bestaande gegevens uit de database updaten
function update($id) {
    // gegevens van het formulier updaten in de database
    // doorverwijzen naar de juiste pagina
    updateGame($id, $_POST);
	
    header('Location: ' . URL . 'games/index');
}

// functie delete($id) laat de juiste pagina zien met het correcte id
function delete($id) {
    // variabele om een specifieke game op te halen uit de database
    $game = getGame($id);
    // juiste pagina weergeven voor de view
    render("games/delete", array("game" => $game));
}

// functie destroy($id) verwijderd de gegevens uit de database
function destroy($id) {
    // gegevens uit de database verwijderen
    deleteGame($id);
    // doorverwijzen naar de juiste pagina
    header("Location: " . URL . "games/index");
}