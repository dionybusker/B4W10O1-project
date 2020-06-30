<?php

require(ROOT . "model/UsersModel.php");

function index() {
    // variabele om alle users op te vragen
    // juiste pagina weergeven in de view
    render('users/index', array('users' => getAllUsers()));
}

// functie create() laat de juiste pagina zien in de view
function create() {
    // juiste pagina weergeven in de view
    $users = getAllUsers();
    render('users/create', array('users' => $users));
}

// functie store() slaat de gegevens van het formulier op
function store() {
    // gegevens van het formulier opslaan
    // doorverwijzen naar de juiste pagina

    ## het kan korter, maar dat moeten we nog uitzoeken! ##
    $fullname = validateData(sanitizeData($_POST["full_name"]));
    $email = validateMail(sanitizeData($_POST["email"]));
    $phone = validateData(sanitizeData($_POST["phone"]));
    $birthday = validateData(sanitizeData($_POST["birthday"]));
    $username = validateData(sanitizeData($_POST["username"]));
    $password = validateData(sanitizeData($_POST["password"]));
    $passwordRpt = validateData(sanitizeData($_POST["passwordRpt"]));

    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($fullname) || empty($email) || empty($phone) || empty($birthday) || empty($username) || empty($password) || empty($passwordRpt)) {
            $error = "Please fill in the form.";
            // $valid = false;
            render("users/create", array(
                "error" => $error,
                "fullname" => $fullname,
                "email" => $email,
                "phone" => $phone,
                "birthday" => $birthday,
                "username" => $username,
                "password" => $password
            ));
        } elseif ($password != $passwordRpt) {
            $error = "Passwords are not the same.";
            render("users/create", array(
                "error" => $error,
                "fullname" => $fullname,
                "email" => $email,
                "phone" => $phone,
                "birthday" => $birthday,
                "username" => $username,
                "password" => $password
            ));
        } else {
            createUser($_POST);
            header("Location: " . URL . "users/index");
        }
    }
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
    $updateUser = updateUser($id, $_POST);
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