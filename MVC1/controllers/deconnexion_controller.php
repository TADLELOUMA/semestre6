<?php

require_once('../_functions/functions.php');


// Vérification des droits d'accès de la page
if (!utilisateur_est_connecte()) {

	// On affiche la page d'erreur comme quoi l'utilisateur doit être connecté pour voir la page
  echo "Vous devez être connecté pour accéder à cette page";
} else {

	
	// Suppression de toutes les variables et destruction de la session
	$_SESSION = array();
	session_destroy();

	// Suppression des cookies de connexion automatique
	setcookie('idUsers', '');
	//setcookie('connexion_auto', '');

	require_once("../views/deconnexion_ok_view.php");

}
