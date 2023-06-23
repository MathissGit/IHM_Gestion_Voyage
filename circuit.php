<?php
class circuit {
    private $Id_Circuit;
    private $Descriptif; 
    private $VilleDepart;
    private $VilleArrivee;
    private $PaysDepart;
    private $PaysArrivee;
    private $DateDepart; 
    private $Duree;
    private $PrixInscripton;

    function __construct($Id_Circuit, $Descriptif, $VilleDepart, $VilleArrivee, $PaysDepart, $PaysArrivee, $DateDepart, $Duree, $PrixInscripton){
        $this->Id_Circuit = $Id_Circuit;
        $this->Descriptif = $Descriptif;
        $this->VilleDepart = $VilleDepart;
        $this->VilleArrivee = $VilleArrivee;
        $this->PaysDepart = $PaysDepart;
        $this->PaysArrivee = $PaysArrivee;
        $this->DateDepart = $DateDepart;
        $this->Duree = $Duree;
        $this->PrixInscripton = $PrixInscripton;
    }

    //Création du getter pour mes attributs, comme ils sont en private j'y accède depuis cette fonction.
    function getId_Circuit(){
        return $this->Id_Circuit;
    }
    function getDescriptif(){
        return $this->Descriptif;
    }
    function getVilleDepart(){
        return $this->VilleDepart;
    }
    function getVilleArrivee(){
        return $this->VilleArrivee;
    }
    function getPaysDepart(){
        return $this->PaysDepart;
    }
    function getDateDepart(){
        return $this->DateDepart;
    }
    function getDuree(){
        return $this->Duree;
    }
    function getPrixInscripton(){
        return $this->PrixInscripton;
    }
}

?>