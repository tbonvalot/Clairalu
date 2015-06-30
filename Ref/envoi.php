<?php
	$errors = [];

	if(!array_key_exists('nomS', $_POST) || $_POST['nomS'] == ''){ //si cette valeur n'existe pas y'a erreur
		$errors['nameS]'] = "ATTENTION vous n'avez pas renseigner le nom de la société !";
		}
	if(!array_key_exists('nom', $_POST) || $_POST['nom'] == ''){ //si cette valeur n'existe pas y'a erreur
		$errors['name]'] = "ATTENTION vous n'avez pas renseigner votre nom !";
		}
	if(!array_key_exists('prenom', $_POST) || $_POST['prenom'] == ''){ 
		$errors['prenom]'] = "ATTENTION vous n'avez pas renseigner votre prenom !";
		}
		if(!array_key_exists('fp', $_POST) || $_POST['fp'] == ''){ //si cette valeur n'existe pas y'a erreur
		$errors['fp]'] = "ATTENTION vous n'avez pas renseigner le numero de téléphone souhaité. !";
		}
	if(!array_key_exists('mail', $_POST) || $_POST['mail'] == '' || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){ //fonction php qui verifie auto si c'est une adresse mail valide
		$errors['mail'] = "ATTENTION vous n'avez pas renseigner une adresse email valide (exemple@exemple.fr) !";
		}
	if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){ 
		$errors['message'] = "ATTENTION vous n'avez pas renseigner votre message !";
		}

session_start();

	if(!empty($errors)){ //si erreur le renvoyer sur la page precedente
		$_SESSION['errors'] = $errors; //recupere les erreurs du tableau errors pour l'user
		$_SESSION['inputs'] = $_POST; //Variable avec les données que l'user avais rentrer avant de rencontrer les erreurs

		header('location: index.php?p=contact'); //renvoi sur la page contact
	}
	else{
		$_SESSION['succes'] =1;
		$message = $_POST['message'];
	 	$headers = 'FROM:' . $_POST['mail'];
	 	mail('t.bonvalot@outlook.fr', "Contact de " . " " . Strtoupper($_POST['nom']) . " " . $_POST['prenom'], $_POST['message'], $headers); //Destinataire, objet, variable message et le from
	}

		header('location: index.php?p=contact'); //renvoi sur la page contact

?>
