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

    $fields = ["game_name", "img", "developer", "publisher", "genre", "platform", "total_spots", "description", "releasedate"];

    $class = [];
    $data = [];

    $class["game_name"] = $data["game_name"] = "";
    $class["img"] = $data["img"] = "";
    $class["developer"] = $data["developer"] = "";
    $class["publisher"] = $data["publisher"] = "";
    $class["releasedate"] = $data["releasedate"] = "";
    $class["genre"] = $data["genre"] = "";
    $class["platform"] = $data["platform"] = "";
    $class["total_spots"] = $data["total_spots"] = "";
    $class["description"] = $data["description"] = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valid = true;

        foreach ($fields as $field) {
            if (isset($_POST[$field]) && empty($_POST[$field])) {
                $class[$field] = "is-invalid";
                $valid = false;
                header("Location: " . URL . "games/create");
            } else {
                $data[$field] = $_POST[$field];
            }
        }

        if ($valid == true) {
            createGame($_POST);
            header("Location: " . URL . "games/index");
        }
    }
    

    // createGame($_POST);
    // header("Location: ". URL . "games/index");
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