<?php

class articles
{
    private $id;
    private $nom;
    private $prix;
    private $marque;
    private $quantite;
    private $couleur;
    protected $photo;
    
    function __construct($nom,$prix,$marque,$quantite,$couleur,$photo)
    {
        
        $this->nom=$nom;
        $this->prix=$prix;
        $this->marque=$marque;
        $this->quantite=$quantite;        
        $this->couleur=$couleur;
        $this->photo=$photo;
    }

    function getnom() {return $this->nom ;}
    function getprix() {return $this->prix ;}
    function getmarque() {return $this->marque ;}
    function getquantite() {return $this->quantite ;}    
    function getcouleur() {return $this->couleur ;}
    function getphoto(){  return $this->photo ;}
    function setnom($nom){
        $this->nom=$nom;
    }
    
    
    function setprix($prix){
        $this->prix=$prix;
    }
    function setmarque($marque){
        $this->marque=$marque;
    }
    function setquantite($quantite){
        $this->quantite=$quantite;
    }
    
    function setcouleur($couleur){
        $this->couleur=$couleur;
    }
 
  function setphoto(){
        return $this->photo;
    }
}
?>