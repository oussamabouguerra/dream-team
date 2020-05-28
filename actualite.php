<?php

class Actualite
{
    private $id;
    private $date;
    private $contenu;
    private $id_fournisseur;
    
    function __construct($id,$date,$contenu,$id_fournisseur)
    {
        $this->id=$id;
        $this->date=$date;
        $this->contenu=$contenu;
        $this->id_fournisseur=$id_fournisseur;
    }

    function getid() {return $this->id ;}
    function getdate() {return $this->date ;}
    function getcontenu() {return $this->contenu ;}
    function getid_fournisseur() {return $this->id_fournisseur ;}
    function setid($id){
        $this->id=$id;
    }
    function setdate($date){
        $this->date=$date;
    }
    function setcontenu($contenu){
        $this->contenu=$contenu;
    }
    function setid_fournisseur($id_fournisseur){
        $this->id_fournisseur=$id_fournisseur;
    }
   
}

?>