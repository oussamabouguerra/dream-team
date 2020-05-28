<?php

class Client
{
    private $id;
    private $nom;
    private $prenom;
    private $addresse;
    private $tel;
    private $mail;
    private $mdp;
    
    function __construct($id,$nom,$prenom,$addresse,$tel,$mail,$mdp)
    {
        $this->id=$id;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->addresse=$addresse;
        $this->tel=$tel;
        $this->mail=$mail;
        $this->mdp=$mdp;
    }

    function getid() {return $this->id ;}
    function getnom() {return $this->nom ;}
    function getaddresse() {return $this->addresse ;}
    function getprenom() {return $this->prenom ;}
    function gettel() {return $this->tel ;}
    function getmail() {return $this->mail ;}
    function getmdp() {return $this->mdp ;}
    function setid($id){
        $this->id=$id;
    }
    function setnom($nom){
        $this->nom=$nom;
    }
    function setaddresse($addresse){
        $this->addresse=$addresse;
    }
    function setprenom($prenom){
        $this->prenom=$prenom;
    }
    function settel($tel){
        $this->tel=$tel;
    }
    function setmail($mail){
        $this->mail=$mail;
    }
    function setmdp($mdp){
        $this->mdp=$mdp;
    }
}

?>