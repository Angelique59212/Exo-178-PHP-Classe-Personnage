<?php

// Ma classe s'apelle personnage
class Personnage {

    // La propriété id est privée, je ne peux pas la modifier ou la lire directement en dehors de cette classe
    private $id;
    private $nom;
    public $x;
    public $y;

    // Constructeur de ma classe permettant de définir des valeurs par défaut lorsqu'elle est instanciée
    public function __construct() {
        $this->nom = "Nom par défaut";
        $this->x = 0;
        $this->y = 0;
    }

    // Méthode permettant de déplacer le personnage vers la droite
    public function walkRight() {
        $this->x += 1;
    }

    public function walkLeft() {
        $this -> x -= 1;
    }

    public function walkTop() {
        $this -> y += 1;
    }

    public function walkBottom() {
        $this -> y -= 1;
    }


    // Setter permettant de définir l'attribut privé id
    public function setId($id) {
        $this->id = $id;
    }

    // Getter permettant de retourner l'attribut privé id
    public function getId() {
        return $this->id;
    }

    // Setter permettant de définir l'attribut privé nom
    public function setNom($nom) {
        $this->nom = $nom;
    }

    //Getter permettant de retourner l'attribut public nom
    public function getNom() {
        return $this ->nom;
    }
} 