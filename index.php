<?php
// ------------------------------------------------------------------------
// Maak het onderstaande script werkend:
// Vul de code aan en zorg dat de include-bestanden in de juiste map staan
// ------------------------------------------------------------------------

if (!empty($_GET)) {
	$page = $_GET['page'];
}
else{
	$page = 'home';
}

// hier komen de instellingen van deze web app
include 'includes/config.php';

// hier komt de head sectie <head> etc.
include 'views/head.php';

switch ($page){
	
	case 'about':
		include 'views/about.php';
		break;
	
	case 'contact':
		include 'views/contacts.php';
		break;
		
	default :
		include 'views/home.php';
}

// hier komt de header sectie etc.
include 'views/header.php';

// hier komt de navigatie
include 'views/menu.php';

// hier komt de content van de home page
include 'views/home.php';

// hier komt de footer
include 'views/footer.php';


// hier komt de footer
include 'flatindex.html';
?>