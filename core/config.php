<?php

// Database instellingen
define('DB_TYPE', 'mysql');		// Wat voor type database gebruik je?
define('DB_HOST', '127.0.0.1'); // Wat is het IP adres van de server (127.0.0.1 is de lokae machine)
define('DB_NAME', 'b4w10o1-project'); // Wat is de database naam


	// Wat is de database gebruiker
	// Wat is het database wachtwoord
//DIONY
// define('DB_USER', 'root'); 		
// define('DB_PASS', '');	
//MERIJN KIMBERLY
// define('DB_USER', 'root'); 		
// define('DB_PASS', '');	
//MERIJN
define('DB_USER', 'root'); 		
define('DB_PASS', 'mysql');	
		
define('DB_CHARSET', 'utf8'); 	// Welke karakterset wordt gebruikt

define('URL_PUBLIC_FOLDER', 'public');	// De public folder is de folder waar alle bestanden in staan die via de adresbalk direct aangevraagd kunnen worden, denk aan CSS, JS, afbeeldingen etc...
define('URL_PROTOCOL', '//');			// Het URL protocol bepaalt of een site via HTTP of HTTPS wordt opgevraagd. Bij '//' wordt de gebruikte methode gebruikt
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);	// Dit bepaald de URL van de website
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME']))); // Dit bepaalt de subfolder van de website. Bijvoorbeeld of jij de website op: 127.0.0.1/webapp hebt draaien. 
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER); // Dit genereerd de standaard URL van de applicatie

define('DEFAULT_CONTROLLER', 'Home'); // Dit is de standaard controller waarmee de webapplictie wordt opgestart
