<?php
include "produit.php";
include "produitC.php";


	

	if ( isset($_GET['referance']) && isset($_GET['nom']) && isset($_GET['prix']) && isset($_GET['quantite']) && isset($_GET['mesure']) && isset($_GET['couleur']) && isset($_GET['marque'])&& isset($_GET['photo']) ) 
{
    
	
	if( !empty($_GET['referance']) && !empty($_GET['nom']) && !empty($_GET['prix']) && !empty($_GET['quantite'])  && !empty($_GET['mesure']) && !empty($_GET['couleur']) && !empty($_GET['marque']) && !empty($_GET['photo']))
	{
		
		$e=new produit($_GET['referance'],$_GET['nom'],$_GET['prix'],$_GET['quantite'],$_GET['mesure'],$_GET['couleur'],$_GET['marque'],$_GET['photo']);
	    $produitC=new produitC();

	   
		
		
        
	    
		{
			$produitC->ajouterproduit($e);
		echo "<META http-equiv='refresh' content='0;URL=afficherproduit.php'>";}
		
		
    
}
    
}



?>