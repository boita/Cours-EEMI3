<!DOCTYPE html>
<html>
	<head>
		<title>Affichage dynamique</title>
		<meta charset="utf-8" />
		
		<script src="lib/jquery-1.9.1.js" charset="utf-8"></script>
		<script src="lib/cogi_lib.js" charset="utf-8"></script>
		<script src="js/ajax.js" charset="utf-8"></script>
		
		<!-- bxSlider Javascript file -->
		<script src="slider/jquery.bxslider.min.js"></script>
		<!-- bxSlider CSS file -->
		<link href="slider/jquery.bxslider.css" rel="stylesheet" />
		
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	</head>
	<body>
		<h1 id="lancer">
			Vitrine 
			(<?php echo "Agence = ".$_SESSION["agence"]
						." - Vitesse = ".$_SESSION["delai"]; ?>)
		</h1>
		<div id="affichage"></div>
	</body>
</html>