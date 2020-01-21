<?

// Vérification des droits d'accès de la page
if (utilisateur_est_connecte()) {

  echo "Inutile d'accéder à cette page si vous êtes connecté";
   // On affiche la page d'erreur comme quoi l'utilisateur est déjà connecté
   //include CHEMIN_VUE_GLOBALE.'erreur_deja_connecte.php';

 } else {

    // Reste de la page comme avant
  }
