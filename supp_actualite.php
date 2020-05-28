<?php
include "actualite.php";
include "actualiteC.php";



	if (isset($_GET['id']))
{
	
	$db = config::getConnexion();
	$id = $_GET['id_fournisseur'];
    $mdp = $_GET['mdp_fournisseur'];
	$req = $db->query("SELECT count(*) as s FROM fournisseur WHERE id='$id' and mdp='$mdp'");
	if($req->fetch()['s'] > 0 )
		{
  		 	
				$actualiteC=new actualiteC();
				$actualiteC->supprimeractualite($_GET['id']);
				echo "<META http-equiv='refresh' content='0;URL=gestion_actualite.html'>";
			
    		

		}
		else {
		?>
	<script type="text/javascript">
        alert ("ID ou mot de passe incorrect. ");</script>
        <META http-equiv='refresh' content='0;URL=supp_actualite.html'>
    <?php }

       }
?>