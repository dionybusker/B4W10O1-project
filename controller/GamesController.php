<?php

require(ROOT . "model/GamesModel.php");

function index() {
    // variabele om alle games op te vragen
    $games = getAllGames();
    // juiste pagina weergeven in de view
    render("games/index", array('games' => $games));
}

// functie create() laat de juiste pagina zien in de view
function create() {
    // juiste pagina weergeven in de view
    $genres = getAllGenres();
	render("games/create", array('genres' => $genres));
}

// functie store() slaat de gegevens van het formulier op
function store() {
    // gegevens van het formulier opslaan
    // doorverwijzen naar de juiste pagina
    createGame($_POST);
header('Location: '. URL);
}

// functie edit($id) laat de juiste pagina zien met het correcte id
function edit($id) {
    // variabele om een specifieke game op te halen uit de database
    // juiste pagina weergeven in de view
}

// functie update($id) doet de al bestaande gegevens uit de database updaten
function update($id) {
    // gegevens van het formulier updaten in de database
    // doorverwijzen naar de juiste pagina
}

// functie delete($id) laat de juiste pagina zien met het correcte id
function delete($id) {
    // variabele om een specifieke game op te halen uit de database
    // juiste pagina weergeven voor de view
}

// functie destroy($id) verwijderd de gegevens uit de database
function destroy($id) {
    // gegevens uit de database verwijderen
    // doorverwijzen naar de juiste pagina
}