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
    return $this ->email ;
  }

  public function setEmail(String $email) {
    $this->email = $email;
  }

  public function getTelephone():String {
    return $this-> telephone;
  }

  public function setTelephone(String $telephone) {
    $this->telephone = $telephone ;
  }

  // METHODES MAGIQUES 
  public function __get($propriete) {
    if(property_exists($this, $propriete)){
      return $this-> $propriete;
    }
  }

  public function __set($propriete, $valeur) {
    if (property_exists($this, $propriete)) {
      $this ->$propriete = $valeur;
    }
  }
}
?>
<p>
  Avec cette classe, nous pouvons créer des objets "Client" et accéder à leurs propriétés via les méthodes publiques 'get' et 'set'.Les propriétés sont protégéées et ne peuvent etre modifiées que par les méthodes 'set'.
</p>

<?php
$client = new Client();
$client-> setNom("John Doe");
$client->setAdresse("123 rue de la paix");
$client->setEmail("johndoe@example.com");
$client->setTelephone("0123456789");

echo $client->getNom();
echo "<br>";// affiche "John Doe"
echo $client-> getAdresse(); // affiche "123 rue de la paix"
echo "<br>";
echo $client-> getEmail();
echo "<br>";
echo $client->getTelephone();
?>
<h2>
      Pourquoi est-il important de limiter l'accés aux propriétés d'une classe?
</h2>

    <p>
      L'encapsulation est un concept fondamental de la programmation orientée objet qui permet de limiter l'accès aux propriétés et méthodes d'une classe .En php, cela peut etre réalisé en utilisant les niveux de visibilité tel que public,protected et privat. En limitant l'accès aux propriétés, on peut mieux controler leur utilisation et leur modification, ce qui peut eviter des erreurs et des bugs difficiles à résoudre. De plus, cela permet mieux organiser le code et de rendre le systeme plus robuste et maintenable.
      En effet, si l'accès aux propriétés n'est pas controlé, n'importe quelle partie du code peut les modifier, ce qui peut entrziner des effets de bords non désirés. En limitant leur accessibilité aux parties de code qui en ont réellement besoin, on peut renforcer l'encapsulation des données et mieux organiser le code. Cela peut également faciliter la compréhension du code ;par d'autres développeurs et rendre le code plus facile à maintenir à long terme.
    </p>
<h2>AUTRE EXEMPLE </h2>

    <?php 
class User {
  private $id;
  private $name;
  private $email;

  public function  __construct(string $id, string $name, string $email) {
  $this-> id = $id;
  $this->name =$name;
  $this->email = $email;
    }
public function getId() :String {
  return$this->id;
}
public function getName() :String {
  return $this-> name;
}
public function getEmail() :String {
  return $this-> email;
}

public function setName (string $name) {
  $$this ->name = $name;
}

public function setEmail(string $email) {
  $this->email = $email;
}
  }
?>

  
  </body>
</html>