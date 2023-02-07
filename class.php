<?php
// définition de la classe Voiture
class Voiture {
  // définition de la propriété "marque"
  public $marque;
  
  // définition de la propriété "modele"
  public $modele;
  
  // constructeur de la classe
  public function __construct($marque, $modele) {
    // initialisation de la propriété "marque" avec la valeur passée en paramètre
    $this->marque = $marque;
    
    // initialisation de la propriété "modele" avec la valeur passée en paramètre
    $this->modele = $modele;
  }
  
  // définition de la méthode "demarrer"
  public function demarrer() {
    // affichage du message "La voiture démarre."
    echo "La voiture démarre.";
  }
}

// création d'un objet de la classe Voiture
$maVoiture = new Voiture("Peugeot", "208");

// appel de la méthode "demarrer" sur l'objet $maVoiture
$maVoiture->demarrer();

/**
 * Dans ce code, nous avons défini une classe Voiture avec deux propriétés marque et modele,
 * ainsi qu'une méthode demarrer. Nous avons également défini un constructeur pour initialiser les propriétés de la classe
 * lorsqu'un objet est créé. Enfin, nous avons créé un objet de la classe Voiture et appelé la méthode demarrer sur cet objet.
 */
?>
