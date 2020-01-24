<?php

require_once('../_config/db.php');
require_once('../controllers/inscription_controller.php');
//require_once('../models/Inscription_model.php');
require_once('../_functions/functions.php');

// On vérifie qu'un hash est présent

if (!empty($_GET['code'])) {
	require_once('../models/validerCompteAvecCode_model.php');
	$code = $_GET['code'];
	if($code == '1'){
		echo "Votre compte est déjà actif !";
	}else{

		if (valider_compte_avec_code($code)) {
	
		// Affichage de la confirmation de validation du compte
			echo "compte valide";
		} else {
		
			// Affichage de l'erreur de validation du compte
			echo "error activation 1";
		}
	
	}

}