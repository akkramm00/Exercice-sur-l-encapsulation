<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <h2>Exercice sur  L' encapsulation en PHP</h2>
     enoncé ::
    Vous etes developpeur web au sein d'une équipe de 10 personnes et devez réaliser une application de e-commerce pour l'entreprise BigBroZer en vue de permettre le fichage de personnes .
    Supposons que nous ayons une classe "Client" qui stocke des informations sur les clients d'une entreprise. La classe contient les propriétés "nom", "adresse", "email", et "numero de telephone".
    Noius voulons utiliser l'encapsulation pour protéger et permettre l'accès à ces propriétés uniquement via des méthodes publiques.

    Question:
    Ecrivez la classe "Client" en respectant les principes de visibilité et d'encapsulation, puis écrivez le code permettant d'instancier un objet de la classe "Client" avec les informations de votre choix et d'afficher ces informations, il vous est impossible d'utiliser uniquement les méthodes magiques.

    <h2>Solution</h2>

    <?php
class Client {
  private String $nom;
  private String $adresse;
  private String $mail;
  private String $telephone;

  public function getNom() :String {
    return $this->nom;
  }

  public function setNom(String $nom) {
    $this -> nom = $nom;
  } 

  public function getAdresse() :String {
    return $this -> adresse ;
  }
   public function setAdresse(String $adresse) {
     $this->adresse = $adresse;
   }

  public function getEmail() :String {
    return $this -> email ;
  }

  public function setEmail(String $email) {
    $this->email = $email;
  }

  public function getTelephone():String {
    return $this-> telephone;
  }

  public function setTlephone(String $telephone) {
    $this->telephone = $telephone ;
  }

  // METHODES MAGIQUES 
  public function __get($propriete) {
    if(property_exists($this, $propriete)){
      return $this-> $propriete;
    }
  }

  public function __set($propriete, $valeur) {
    if (prorpety_exixts($this, $proriete)) {
      $this ->$propriete = $valeur;
    }
  }
}
?>
  </body>
</html>