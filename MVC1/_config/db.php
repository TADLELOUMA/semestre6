<?php



/*function Bdd()
{*/
  $dsn = 'mysql:host=localhost';
  $user = 'dbname=thdiallo';
  $password = '';
    try {
        $pdo = new PDO($dsn,$user,$password);
        echo "connexion reussi";
    } catch (Exception $e) {
        echo "Failed: " . $e->getMessage();
    }
  //  return $pdo;

//}


?>
