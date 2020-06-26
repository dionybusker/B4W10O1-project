<?php
    require(ROOT . "model/TournamentsModel.php");
    // require(ROOT . "model/GamesModel.php");
    // require(ROOT . "model/UsersModel.php");

    function index() {
        $games = getAllGames();
        $users = getAllUsers();
        $tournaments = getAllTournaments();
        render("tournaments/index", array(
            'games' => $games,
            'users' => $users,
            'tournaments' => $tournaments
        ));
    }

    function create() {
        // juiste pagina weergeven in de view
        $tournaments = getAllTournaments();
        $games = getAllGames();
        $users = getAllUsers();
        render('tournaments/create', array('tournaments' => $tournaments,'games' => $games,'users' => $users));
    }
    
    // functie store() slaat de gegevens van het formulier op
    function store() {
        // gegevens van het formulier opslaan
        // doorverwijzen naar de juiste pagina
                createTournament($_POST);
                header("Location: " . URL . "tournaments/index");        
    }

    function edit($id) {
        // variabele om een specifieke user op te halen uit de database
        // juiste pagina weergeven in de view
        $tournament = getTournament($id);
        render('tournaments/update', array('tournaments' => $tournament));
    }
    
    // functie update($id) doet de al bestaande gegevens uit de database updaten
    function update($id) {
        // gegevens van het formulier updaten in de database
        // doorverwijzen naar de juiste pagina
        $updateTournament = updateTournament($id, $_POST);
        header('location: ' . URL . 'tournaments/index');
    }
    
    // functie delete($id) laat de juiste pagina zien met het correcte id
    function delete($id) {
        // variabele om een specifieke user op te halen uit de database
        // juiste pagina weergeven voor de view
        $tournament = getTournament($id);
        //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee
        render('tournaments/delete', array('tournaments' => $tournament));
    }
    
    // functie destroy($id) verwijderd de gegevens uit de database
    function destroy($id) {
        // gegevens uit de database verwijderen
        // doorverwijzen naar de juiste pagina
        $deleteTournament = deleteTournament($id);
        //2. Bouw een url en redirect hierheen
        header('location: ' . URL . 'tournaments/index');
    }