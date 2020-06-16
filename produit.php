<?php
class produit
{
	protected $referance;
        
	protected $nom;
	protected $prix;
	protected $quantite;
	protected $mesure;
	protected $couleur;
	protected $marque;	
	protected $photo;
	
	
	function __construct($referance,$nom,$prix,$quantite,$mesure,$couleur,$marque,$photo)
	    {
		$this->referance=$referance;
               
		$this->nom=$nom;
		$this->prix=$prix;
		$this->quantite=$quantite;
		$this->mesure=$mesure;
		$this->couleur=$couleur;
		$this->marque=$marque;
		$this->photo=$photo;
		
      	}
	function getreferance(){
		return $this->referance;
	}

	function getnom(){
		return $this->nom;
	}
	function getprix(){
		return $this->prix;
	}
	function getquantite(){
		return $this->quantite;
	}

	function getmesure(){
		return $this->mesure;
	}
	function getcouleur(){
		return $this->couleur;
	}
	function getmarque(){
		return $this->marque;
	}
	function getphoto(){
		return $this->photo;
	}
	function setreferance($referance){
		$this->referance=$referance;
	}

	
	function setnom($nom){
		$this->nom=$nom;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setquantite($quantite){
		$this->quantite=$quantite;
	}

	function setmesure($mesure){
		$this->mesure=$mesure;
	}
	function setcouleur($couleur){
		$this->couleur=$couleur;
	}
	function setmarque($marque){
		$this->marque=$marque;
	}
	function setphoto($photo){
		$this->photo=$photo;
	}
}
?>


