<?php
include_once('pdo.inc.php');

function lire_mandats($agence) {
	global $pdo;
	// Requete pour récupérer tous les mandats actifs
	// avec au moins une photo et MAN_WEB = 1
	// et éventuellement la sélection de l'agence
	if ($agence==0) {
		$clause_agence = " ";
	}
	else {
		$clause_agence = " AND A.AGE_ID=".$agence." ";
	}
	$query = "SELECT A.MAN_ID, A.AGE_ID, B.PHO_SRC, A.MAN_TITRE, 
					A.MAN_DESCR, A.MAN_TARIF 
				FROM immo_mandats A, immo_photos B
				WHERE A.MAN_ID=B.MAN_ID
					AND MAN_WEB=1"
					.$clause_agence
				." GROUP BY A.MAN_ID";
	$_SESSION["query"]=$query;
	$q = $pdo->query($query);
	$q->setFetchMode(PDO::FETCH_OBJ);

	$i = 0;
	$data = array();
	while( $mandat = $q->fetch() ){

		// Requete pour récupérer toutes les photos du mandat
		$query2 = "SELECT PHO_SRC, PHO_DESCR 
					FROM immo_photos
					WHERE MAN_ID=".$mandat->MAN_ID." ORDER BY PHO_ORDRE";
		$_SESSION["query2"]=$query;
		$q2 = $pdo->query($query2);
		$q2->setFetchMode(PDO::FETCH_OBJ);

		$j = 0;
		$photos = array();
		while( $photo = $q2->fetch() ){
			$reponse2 = array(
								'src'	=> $photo->PHO_SRC,
								'descr'	=> $photo->PHO_DESCR);
			$photos[$j] = $reponse2;
			$j++;
		}
		$q2->closeCursor();

		// Création du tableau des datas
		$reponse = array(
							'titre' 	=> $mandat->MAN_TITRE,
							'descr' 	=> $mandat->MAN_DESCR,
							'tarif' 	=> $mandat->MAN_TARIF,
							'photos' 	=> $photos);
	    $data[$i] = $reponse;
	    $i++; 
	}
	$q->closeCursor();

	// Le model retourne un tableau de toutes les annonces
	return $data;
}
?>