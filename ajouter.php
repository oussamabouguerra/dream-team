<?php
include "../entities/promotion.php";
include "../core/promotionC.php";

	

	if ( isset($_GET['nom'])  && isset($_GET['prix']) && isset($_GET['pourcentage']) && isset($_GET['prixpromo']) &&  isset($_GET['description']) && isset($_GET['date_debut']) && isset($_GET['date_fin'])&& isset($_GET['photo']) ) 
{
    
	
	if(  !empty($_GET['nom'])  && !empty($_GET['prix']) && !empty($_GET['pourcentage']) && !empty($_GET['prixpromo']) &&  !empty($_GET['description']) && !empty($_GET['date_debut']) && !empty($_GET['date_fin']) && !empty($_GET['photo']))
	{
		
		$e=new promotion($_GET['nom'],$_GET['prix'],$_GET['pourcentage'],$_GET['prixpromo'],$_GET['description'],$_GET['date_debut'],$_GET['date_fin'],$_GET['photo']);
	    $promotionC=new promotionC();


		if (@$_GET['date_debut']>@$_GET['date_fin']) {
			?>

			<script type="text/javascript">
        alert ("Date invalide");</script>
    	<?php 
    	echo "<META http-equiv='refresh' content='0;URL=ajouterpromotion.html'>";
		}
		elseif (@$_GET['prix']<@$_GET['prixpromo']) {
			?>

			<script type="text/javascript">
        alert ("Prix invalide");</script>
    	<?php 
    	echo "<META http-equiv='refresh' content='0;URL=ajouterpromotion.html'>";
		}
		
		
        
	    else 
		{$promotionC->ajouter($e);
		echo "<META http-equiv='refresh' content='0;URL=ajouterpromotion.html'>";}
            
}
    
}


?>