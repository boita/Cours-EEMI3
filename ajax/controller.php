<?php
	session_start();

	// Inclusion du model
	include ("model.php");
	
	// On appelle le model et on crée un tableau des mandats
	// et des photos
	$annonces = lire_mandats($_SESSION["agence"]);

	// On encode le tableau de résultats pour rendre un flux json
	// et l'envoyer à la vue sous forme de retour Ajax
	echo json_encode($annonces);
?>