<?php
include "client.php";
include "clientC.php";


	

	if ( isset($_GET['id']) && isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['addresse']) && isset($_GET['tel']) && isset($_GET['mail']) && isset($_GET['mdp']) ) 
{
    
	
	if( !empty($_GET['id']) && !empty($_GET['nom']) && !empty($_GET['prenom']) && !empty($_GET['addresse']) && !empty($_GET['tel']) && !empty($_GET['mail']) && !empty($_GET['mdp']))
	{
		
		$e=new Client($_GET['id'],$_GET['nom'],$_GET['prenom'],$_GET['addresse'],$_GET['tel'],$_GET['mail'],$_GET['mdp']);
	    $clientC=new clientC();

	    if ($clientC->existenceclient($_GET['id'])!=0)
		{
		?>
		<script type="text/javascript">
        alert ("Client existe dejà");</script>
    	<?php 
    	echo "<META http-equiv='refresh' content='0;URL=ajouter_client.html'>";
		}
	    else if(($_GET['mdp'] == $_GET['mdp2'])&&(strlen($_GET['tel'])==8)&&(strlen((string)$_GET['id'])==10)&&(strlen($_GET['mdp'])>7)&&(filter_var($_GET['mail'], FILTER_VALIDATE_EMAIL)))
		{$clientC->ajouterclient($e);
		echo "<META http-equiv='refresh' content='0;URL=page1.html'>";}
		else if(($_GET['mdp'] != $_GET['mdp2'])||(strlen($_GET['mdp'])<8))
		{
			?>
	<script type="text/javascript">
        alert ("Mot de passe invalide!");</script>
    <?php
        echo "<META http-equiv='refresh' content='0;URL=ajouter_client.html'>";
     
		}
		else if(strlen($_GET['tel'])!=8)
		{
			?>
	<script type="text/javascript">
        alert ("Numéro Tel invalide!");</script>
    <?php 
        echo "<META http-equiv='refresh' content='0;URL=ajouter_client.html'>";
    }
    
		
		else if (filter_var($_GET['mail'], FILTER_VALIDATE_EMAIL) == 0) {
			
			?>
	<script type="text/javascript">
        alert ("Mail invalide!");</script>
    <?php 
        echo "<META http-equiv='refresh' content='0;URL=ajouter_client.html'>";
    
		}
		
    else if(strlen((string)$_GET['id'])!=10)
		{
			?>
	<script type="text/javascript">
        alert ("ID invalide!");</script>
    <?php 
        echo "<META http-equiv='refresh' content='0;URL=ajouter_client.html'>";
    
		}
		
    
}
    
}



?>