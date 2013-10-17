<?php
	if (!session_start())
		die("Erreur session !");

	// Si l'agence n'est pas précisée
	// alors valeur 0
	// et stocké dans la session
	if (!isset($_GET["agence"])) {
		$_GET["agence"] = 0;
	}
	$_SESSION["agence"] = $_GET["agence"];

	// Si le délai de défilement n'est pas précisé
	// alors valeur 10 secondes
	// et stocké dans la session
	if (!isset($_GET["delai"])) {
		$_GET["delai"] = 10;
	}
	$_SESSION["delai"] = $_GET["delai"];

	// Ecrire la vitesse dans un cookie
	if (!setcookie("delai",$_GET["delai"],time()+365*24*60*60))
		die("Erreur cookie !");

	// On appelle la vue pricipale
	include("views/vitrine.php");
?>