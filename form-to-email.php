<?php

	// On récupère les infos que l'utilisateur a entré dans le formulaire.
	$user_name = $_POST['user_name']; // Nom / Pseudo.
	$from = $_POST['email']; // e-mail.
	$user_message = $_POST['user_message']; // Message.
	//=========

	// Déclaration de l'adresse de destination.
	$to = 'maxencebekier@gmail.com';
	//=========

	// Création du header de l'e-mail.
	$header = "From: \"$user_name\" $from"."\n";
	$header.= "MIME-Version: 1.0"."\n";
	//==========

	// Définition du sujet.
	$sujet = "New message from Electrona";
	//=========
	 
	// Création du message.
	$msg = $user_message;
	//==========

	// Envoi de l'e-mail.
	mail($to, $sujet, $msg, $header);
	//==========

	// On attend 2 secondes...
	sleep(2);
	//==========

	// On redirige vers la page de remerciements.
	header('Location: http://max-electrona.000webhostapp.com/thanks-page.html');
	//==========

?>