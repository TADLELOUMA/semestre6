<?php
require_once('../_config/db.php');
require_once('../models/Inscription_model.php');

function valider_compte_avec_code($code) {

  global $pdo ;

  $requete = $pdo->prepare('UPDATE Users SET
    code = "1"
    WHERE
    code = :code');

  $requete->bindValue(':code', $code);
  
  $requete->execute();

  return ($requete->rowCount() == 1);
}



