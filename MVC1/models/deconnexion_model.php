<?php

// Vérification des droits d'accès de la page
if (!utilisateur_est_connecte()) {

	// On affiche la page d'erreur comme quoi l'utilisateur doit être connecté pour voir la page
	//include CHEMIN_VUE_GLOBALE.'erreur_non_connecte.php';
  echo "Vous devez être connecté pour accéder à cette page";
} else {

	// Reste de la page comme avant
}
