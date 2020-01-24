<?php

require_once('../_config/db.php');
require_once('../controllers/inscription_controller.php');
//require_once('../models/Inscription_model.php');
require_once('../_functions/functions.php');

// On vérifie qu'un hash est présent
//if (!empty($_GET['code'])) {

	require_once('../models/validerCompteAvecCode_model.php');
	
	if (valider_compte_avec_code($_SESSION['code'])) {
	
		// Affichage de la confirmation de validation du compte
		echo "compte valide";
	} else {
	
		// Affichage de l'erreur de validation du compte
		echo "error activation 1";
	}
