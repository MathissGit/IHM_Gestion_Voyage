<?php
class client {
    private $NomLieu;
    private $Ville; 
    private $Pays;
    private $Descriptif;
    private $PrixVisite;

    function __construct($NomLieu, $Ville, $Pays, $Descriptif, $PrixVisite){
        $this->NomLieu = $NomLieu;
        $this->Ville = $Ville;
        $this->Pays = $Pays;
        $this->Descriptif = $Descriptif;
        $this->PrixVisite = $PrixVisite;
    }

    //Création du getter pour mes attributs, comme ils sont en private j'y accède depuis cette fonction.
    function getNomLieu(){
        return $this->NomLieu;
    }
    function getVille(){
        return $this->Ville;
    }
    function getPays(){
        return $this->Pays;
    }
    function getDescriptif(){
        return $this->Descriptif;
    }
    function getPrixVisite(){
        return $this->PrixVisite;
    }
}

?>