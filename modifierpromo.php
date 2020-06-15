<?php
include "../core/promotionC.php";	
$promotionC=new promotionC();

	if ( isset($_GET['id']) && isset($_GET['nom']) && isset($_GET['prix']) && isset($_GET['pourcentage']) && isset($_GET['prixpromo'])  && isset($_GET['description']) && isset($_GET['date_debut']) && isset($_GET['date_fin']) && isset($_GET['photo']) ) 
{
    
	
	if( !empty($_GET['id']) && !empty($_GET['nom']) && !empty($_GET['prix']) && !empty($_GET['pourcentage']) && !empty($_GET['prixpromo'])  && !empty($_GET['description']) && !empty($_GET['date_debut']) && !empty($_GET['date_fin']) && !empty($_GET['photo']))
	{
		
		$e=new promotionC($_GET['id'],$_GET['nom'],$_GET['prix'],$_GET['pourcentage'],$_GET['prixpromo'],$_GET['description'],$_GET['date_debut'],$_GET['date_fin'],$_GET['photo']);
	    $promotionC=new promotionC();

	    if ($promotionC->existencepromotion(@$_GET['id'])!=1)
		{
		?>
		<script type="text/javascript">
        alert ("ID n'existe pas");</script>
    	<?php 
    	echo "<META http-equiv='refresh' content='0;URL=modifierpromotion.html'>";
		}
		elseif (@$_GET['date_debut']>@$_GET['date_fin']) {
			?>

			<script type="text/javascript">
        alert ("Date invalide");</script>
    	<?php 
    	echo "<META http-equiv='refresh' content='0;URL=afficherpromotion.php'>";
		}
		

	    else 
		{
$promotionC->modifierpromo(@$_GET['id'],@$_GET['nom'],@$_GET['prix'],@$_GET['pourcentage'],@$_GET['prixpromo'],@$_GET['description'],@$_GET['date_debut'],@$_GET['date_fin'],@$_GET['photo']);}}}
?>

