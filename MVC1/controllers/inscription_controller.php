<?
require_once('../_config/db.php');
require_once('../models/Inscription_model.php');
require_once('../_functions/functions.php');

global $pdo;

$username =  $_POST['username'];
$adresse_email = $_POST['email'];
$mot_de_pass =  $_POST['password'];
$passwrd_confirmed =  $_POST['confirmedpassword'];

// Création d'un tableau des erreurs
$erreurs_inscription = array();

// On vérifie si les 2 mots de passe correspondent
if(str_secur($mot_de_pass) != str_secur($passwrd_confirmed) ){
  $erreurs_inscription[] = "Les deux mots de passes entrés sont différents !";
}
$inscription = new Inscription_model($username,$adresse_email,$mot_de_pass,$passwrd_confirmed);

$id_utilisateur= $inscription->ajouter_membre_dans_bdd();
  
  // Si la base de données a bien voulu ajouter l'utliisateur (pas de doublons)
if(ctype_digit($id_utilisateur)) {

  
  // Preparation du mail
	/*$message_mail = '<html><head></head><body>
	  <p>Merci de vous être inscrit sur "mon site" !</p>
	  <p>Veuillez cliquer sur <a href="#>ce lien</a> pour activer votre compte !</p>
    </body></html>';
    
  $headers_mail  = 'MIME-Version: 1.0'                           ."\r\n";
	$headers_mail .= 'Content-type: text/html; charset=utf-8'      ."\r\n";
	$headers_mail .= 'From: "Mon site" <contact@monsite.com>'      ."\r\n";
	
  // Envoi du mail
	mail($mot_de_pass, 'Inscription sur <monsite.com>', $message_mail, $headers_mail);
  */
  
  
  // Affichage de la confirmation de l'inscription

 // include_once('../views/validerCompteAvecCode_view.php');
  
  //// On enregistre les informations dans la session
  $inscription->session($id_utilisateur);
  
// Gestion des doublons
} else{

  // Changement de nom de variable (plus lisible)
	$erreur =& $id_utilisateur;
  
  // On vérifie que l'erreur concerne bien un doublon
  if (23000 == $erreur[0]) { // Le code d'erreur 23000 siginife "doublon" dans le standard ANSI SQL
  
		preg_match("`Duplicate entry '(.+)' for key \d+`is", $erreur[2], $valeur_probleme);
    $valeur_probleme = $valeur_probleme[1];
    
    if ($adresse_email == $valeur_probleme) {
		
			$erreurs_inscription[] = "Cette adresse e-mail est déjà utilisée.";
		
		} else {
		
			$erreurs_inscription[] = "Erreur ajout SQL : doublon non identifié présent dans la base de données.";
		}
	
	} else {

    $erreurs_inscription[] = sprintf("Erreur ajout SQL : cas non traité (SQLSTATE = %d).", $erreur[0]);
  }
  // On affiche à nouveau le formulaire d'inscription
  include_once('../views/inscriptionError_view.php');


}