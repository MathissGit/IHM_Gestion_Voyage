<?php
class client {
    private $nom;
    private $prenom; 
    private $dateNaissance;
    private $telephone;
    private $mail;

    function __construct($nom, $prenom, $dateNaissance, $telephone, $mail){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->telephone = $telephone;
        $this->mail = $mail;
    }

    //Création du getter pour mes attributs, comme ils sont en private j'y accède depuis cette fonction.
    function getNom(){
        return $this->nom;
    }
    function getPrenom(){
        return $this->prenom;
    }
    function getDateNaissance(){
        return $this->dateNaissance;
    }
    function getTelephone(){
        return $this->telephone;
    }
    function getMail(){
        return $this->mail;
    }
}

?>