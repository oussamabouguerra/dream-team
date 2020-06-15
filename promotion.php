<?php

class promotion
{
    private $id;
    private $nom;
    private $prix;
    private $pourcentage;
    private $prixpromo;
    private $description;
    private $date_debut;
    private $date_fin;
    protected $photo;
    
    function __construct($nom,$prix,$pourcentage,$prixpromo,$description,$date_debut,$date_fin,$photo)
    {
        
        $this->nom=$nom;
        $this->prix=$prix;
        $this->pourcentage=$pourcentage;
        $this->prixpromo=$prixpromo;        
        $this->description=$description;
        $this->date_debut=$date_debut;
        $this->date_fin=$date_fin;
        $this->photo=$photo;
    }

    function getnom() {return $this->nom ;}
    function getprix() {return $this->prix ;}
    function getpourcentage() {return $this->pourcentage ;}
    function getprixpromo() {return $this->prixpromo ;}    
    function getdescription() {return $this->description ;}
    function getdate_debut() {return $this->date_debut ;}
    function getdate_fin() {return $this->date_fin ;}
    function getphoto(){  return $this->photo ;}
    function setnom($nom){
        $this->nom=$nom;
    }
    
    
    function setprix($prix){
        $this->prix=$prix;
    }
    function setpourcentage($pourcentage){
        $this->pourcentage=$pourcentage;
    }
    function setprixpromo($prixpromo){
        $this->prixpromo=$prixpromo;
    }
    
    function setdescription($description){
        $this->description=$description;
    }
    function setdate_debut($date_debut){
        $this->date_debut=$date_debut;
    }
    function setdate_fin($date_fin){
        $this->date_fin=$date_fin;
    }
  function setphoto(){
        return $this->photo;
    }
}
?>