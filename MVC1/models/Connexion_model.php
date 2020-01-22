<?
class Connexion_model
{

    private $username;
    private $mot_de_pass;

    function __construct($username,$mot_de_pass){
        global $pdo;

        $this->username = $username;
        $this->mot_de_pass = $mot_de_pass;

    }

	public function combinaison_connexion_valide($username, $password) {

		global $pdo;
		
		$requete = $pdo->prepare("SELECT * FROM Users 
			WHERE
			username  = :username" );
			$requete->execute(array(
			'username' => $this->username));
			$result = $requete->fetch();
		
		if ($result) {
	
			return $result['idUsers'];
		}else
			return false;
	}

	public function lire_infos_utilisateur($idUsers) {

  		global $pdo;

  		$requete = $pdo->prepare("SELECT *
    		FROM Users
    		WHERE
    		idUsers = :idUsers");

  		$requete->bindValue(':idUsers', $idUsers);
  		$requete->execute();
  
  		if ($result = $requete->fetch(PDO::FETCH_ASSOC)) {
  
    		return $result;
  		}
  		return false;
	}

}