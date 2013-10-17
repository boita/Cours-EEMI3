<?php
	if (($_SERVER["HTTP_HOST"] == "localhost")
		or ($_SERVER["HTTP_HOST"] == "127.0.0.1")) {
		// Config Serveur MySQL pour WAMP
		define("HOST","localhost");
		define("DATABASE","coursdev");
		define("USER","root");
		define("PASSWORD","");
	}
	else if ($_SERVER["HTTP_HOST"] == "ns366377.ovh.net") {
		// Config Serveur MySQL pour OVH/EEMI
		define("HOST","localhost");
		define("DATABASE","coursdev");
		define("USER","coursdev");
		define("PASSWORD","deveemi");
	}

	// Options de connexion
	$options = array(
					PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	
	// Instanciation de l'objet PDO
	$pdo = new PDO( 'mysql:host='.HOST.';dbname='.DATABASE, 
					USER, PASSWORD, $options );
?>