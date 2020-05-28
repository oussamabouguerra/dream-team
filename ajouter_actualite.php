<?php
include "actualite.php";
include "actualiteC.php";


	

	if ( isset($_GET['id']) ) 
{
    
	
	if( !empty($_GET['id']) )
	{
		
	$db = config::getConnexion();
	$id = $_GET['id_fournisseur'];
    $mdp = $_GET['mdp_fournisseur'];
	$req = $db->query("SELECT count(*) as s FROM fournisseur WHERE id='$id' and mdp='$mdp'");
	if($req->fetch()['s'] > 0 ) 
		{
  		 	
		$e=new Actualite($_GET['id'],$_GET['date'],$_GET['contenu'],$_GET['id_fournisseur']);
	    $actualiteC=new actualiteC();


	    if ($actualiteC->existenceactualite($_GET['id'])!=0)
		{
		?>
		<script type="text/javascript">
        alert ("Actualité existe dejà");</script>
    	<?php 
    	echo "<META http-equiv='refresh' content='0;URL=ajouter_actualite.html'>";
		}
	    else if((strlen((string)$_GET['id'])==4)&&(strlen($_GET['contenu'])<100))
		{$actualiteC->ajouteractualiter($e);
		echo "<META http-equiv='refresh' content='0;URL=gestion_actualite.html'>";}
		
		else if(strlen((string)$_GET['id'])!=4)
		{
			?>
	<script type="text/javascript">
        alert ("ID actualité invalide!");</script>
     <?php 
        echo "<META http-equiv='refresh' content='0;URL=ajouter_actualite.html'>";
    
}
		else if (strlen($_GET['contenue'])>100) {
			
			?>
	<script type="text/javascript">
        alert ("Contenu trop long!");</script>
    <?php
        echo "<META http-equiv='refresh' content='0;URL=ajouter_actualite.html'>";
    
}
		}
		else {
		?>
	<script type="text/javascript">
        alert ("ID ou mot de passe incorrect. ");</script>
        <META http-equiv='refresh' content='0;URL=ajouter_actualite.html'>
    <?php }
		
		
    

    
}
}


?>