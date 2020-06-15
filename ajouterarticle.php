<?php
include "../entities/article.php";
include "../core/articleC.php";


	

		$e=new articleC($_GET['nom'],$_GET['prix'],$_GET['marque'],$_GET['quantite'],$_GET['couleur'],$_GET['photo']);
	    $articleC=new articleC();


		
	    $articleC->ajouterarticle($e);
		echo "<META http-equiv='refresh' content='0;URL=afficherarticle.php'>";
		
		
    
    




?>