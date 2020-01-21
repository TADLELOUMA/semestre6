<?

class Users
{
    private $id;
    private $username;
    private $adresse_email;
    private $Pass_word;
    private $passwrd_confirmed;
    private $passhass;

    function __construct($username,$adresse_email,$password,$passwrd_confirmed){
        global $pdo;

        $this->username = $username;
        $this->adresse_email = $adresse_email;
        $this->Pass_word = $password;
        $this->passwrd_confirmed = $passwrd_confirmed;
        $this->passhass = password_hash($this->Pass_word, PASSWORD_DEFAULT);

    }
    public function getId()
    {
      global $pdo;
      return $this->id;
    }

    public function existsMail($adresse_email)
    {
      global $pdo;

      $req = $pdo->prepare("SELECT * FROM Users WHERE adresse_email= ?");
      $req->execute(array($adresse_email));
      return $req->rowCount()>0;

    }
    public function verificationUsers()
    {
      if(existsMail($this->adresse_email))
        return "adresse mail exists deja";

      if(strlen($this->adresse_email) == 0 AND strlen($this->adresse_email) < 8)
        return "Veuiller choisir au moins 8 caractere";

      if(!isset($this->username))
        return "VEUILLER RENSEIGNER UN Username VALIDE";

      if(!isset($this->adresse_email))
        return "VEUILLER RENSEIGNER UNE ADRESSE MAIL VALIDE";

      if(!isset($this->Pass_word))
        return "VEUILLER RENSEIGNER UN password VALIDE";

      if(!isset($this->passwrd_confirmed))
        return "VEUILLER RENSEIGNER UN password VALIDE";

      return "verification ok";
    }

    public function ajouter_membre_dans_bdd()
    {
      global $pdo;

      try
      {

        $req = $pdo->prepare('INSERT INTO Users(username,email,passWord) VALUES (:username,:adresse_email,:passhass)');
        $req->execute(array(
          'username' => $this->username,
          'adresse_email' => $this->adresse_email,
          'passhass' => $this->passhass
        ));
        echo "ajout reussi"."<br />";

        /*echo getId;*/
      }
      catch (PDOException $e){
          echo "ajout invalide".$e->getMessage();
      }
      return "error";

    }
    /*public function ajouter_membre_dans_bdd($username,$adresse_email, $passWord) {

	     global $pdo;

	     $requete = $pdo->prepare("INSERT INTO Users SET
		   username = :nom_utilisateur,
		   adresse_email = :adresse_email,
       passWord = :passhass,

	     $requete->bindValue(':nom_utilisateur', $nom_utilisateur);
	     $requete->bindValue(':mot_de_passe',    $mdp);
	     $requete->bindValue(':adresse_email',   $adresse_adresse_email);
	     $requete->bindValue(':hash_validation', $hash_validation);

	if ($requete->execute()) {

		return $pdo->lastInsertId();
	}
	return $requete->errorInfo();
}*/

    //envoie de tous les utilisateurs
    static function getAllUsers(){
        global $pdo;


        $reqUsers = $pdo->prepare('SELECT * FROM Users');
        $reqUsers->execute([]);
        return $reqUsers->fetchAll();
    }


}
