<?php

require_once('../_functions/functions.php');

class Inscription_model
{
    //private $idUsers;
    private $username;
    private $adresse_email;
    private $Pass_word;
    private $passwrd_confirmed;
    private $passhass;
    private $code;

    function __construct($username,$adresse_email,$password,$passwrd_confirmed){
        global $pdo;

        $this->username = $username;
        $this->adresse_email = $adresse_email;
        $this->Pass_word = $password;
        $this->passwrd_confirmed = $passwrd_confirmed;
        $this->passhass = password_hash($this->Pass_word, PASSWORD_DEFAULT);

    }
 
  public function ajouter_membre_dans_bdd()
  {
    global $pdo;

    try
    {
      $requete = $pdo->prepare('INSERT INTO Users(username,adresse_mail,mot_de_pass) VALUES (:username,:adresse_email,:passhass)');
      $result =$requete->execute(array(
        'username' => $this->username,
        'adresse_email' => $this->adresse_email,
        'passhass' => $this->passhass
      ));
      if($result){
        return $pdo->lastInsertId();
      }
      return $requete->errorInfo();
      //echo "ajout reussi"."<br />";

      /*echo getId;*/
    }
    catch (PDOException $e){
      echo "ajout invalide".$e->getMessage($username);
    }

  }
  public function session($idUsers){

    global $pdo;
    try{

      $requete = $pdo->prepare("SELECT * FROM Users WHERE username = :username");
      $requete->execute(array(
        'username' => $this->username));
      $result = $requete->fetch();
      $_SESSION['idUsers'] = $idUsers;
      $_SESSION['username'] = $this->username;
      $_SESSION['adresse_mail']  = $result['adresse_mail'];
      $_SESSION['code'] = $result['code'];
    }catch(PDOException $e)
    {
      echo "enregistrement de la session du".$e->getMessage($username);
    }

  }
  
}