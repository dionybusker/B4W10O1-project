<?php

require(ROOT . "model/UsersModel.php");

function index() {
    // variabele om alle users op te vragen
    // juiste pagina weergeven in de view
    render("users/index");
}

// functie create() laat de juiste pagina zien in de view
function create() {
    // juiste pagina weergeven in de view
    render('users/create');
}

// functie store() slaat de gegevens van het formulier op
function store() {
    // gegevens van het formulier opslaan
    // doorverwijzen naar de juiste pagina
    $createUser = createUser($_POST);
   header('location: ' . URL . 'users/index');
}

// functie edit($id) laat de juiste pagina zien met het correcte id
function edit($id) {
    // variabele om een specifieke user op te halen uit de database
    // juiste pagina weergeven in de view
    $users = getUser($id);
    render('users/update', array('users' => $users));
}

// functie update($id) doet de al bestaande gegevens uit de database updaten
function update($id) {
    // gegevens van het formulier updaten in de database
    // doorverwijzen naar de juiste pagina
    $updateUser = updateUser($_POST);
	
    header('location: ' . URL . 'users/index');
}

// functie delete($id) laat de juiste pagina zien met het correcte id
function delete($id) {
    // variabele om een specifieke user op te halen uit de database
    // juiste pagina weergeven voor de view
    $users = getUser($id);
    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee
    render('users/delete', array('users' => $users));
}

// functie destroy($id) verwijderd de gegevens uit de database
function destroy($id) {
    // gegevens uit de database verwijderen
    // doorverwijzen naar de juiste pagina
    $deleteUser = deleteUser($id);
	//2. Bouw een url en redirect hierheen
    header('location: ' . URL . 'users/index');
}