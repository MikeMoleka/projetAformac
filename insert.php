<?php

	$array = array("mail" => $_POST['mail'], "nom" => $_POST['nom'], "prenom" => $_POST['prenom'], "adresse" => $_POST['adresse'], "age" => $_POST['age'], "telephone" => $_POST['telephone']);
	$trouve = false;
	$cpt = 0;
	$error = 0;


	$mail = $_POST['mail']; 
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$age = $_POST['age'];
	$telephone = $_POST['telephone'];
	$adresse = $_POST['adresse'];

	foreach ($array as $key => $value) {
		$cpt++;
		if($value == NULL){
			$error++;
		}
	}
	if ($cpt == sizeof($array) && $error > 0) {
		echo	"<script type=\"text/javascript\">
					window.alert('$error champs vide veuillez remplir toutes les champs');
					window.location.href = 'index.php?var=$key&mail=$mail&nom=$nom&prenom=$prenom&age=$age&telephone=$telephone&adresse=$adresse';
					</script>";
			exit;
	}else if ($cpt == sizeof($array) && $error == 0){
		echo	"<script type=\"text/javascript\">
					window.alert('formulaire envoyé');
					window.location.href = 'index.php?var=$key&mail=$mail&nom=$nom&prenom=$prenom&age=$age&telephone=$telephone&adresse=$adresse';
					</script>";
			exit;
	}
	
?>