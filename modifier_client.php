<?php
include "client.php";
include "clientC.php";
	

	if ( isset($_GET['id']) && isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['addresse']) && isset($_GET['tel']) && isset($_GET['mail']) && isset($_GET['mdp']) && isset($_GET['mdp2'])) 
{
    
	
	if( !empty($_GET['id']) && !empty($_GET['nom']) && !empty($_GET['prenom']) && !empty($_GET['addresse']) && !empty($_GET['tel']) && !empty($_GET['mail']) && !empty($_GET['mdp']) && !empty($_GET['mdp2']) )
	{
		$db = config::getConnexion();
	    $id = $_GET['id'];
        $mdp = $_GET['mdp'];
	    $req = $db->query("SELECT count(*) as s FROM client WHERE id='$id' and mdp='$mdp'");
	if($req->fetch()['s'] > 0 )
		{
  		 	if(($_GET['mdp'] == $_GET['mdp2'])&&(strlen($_GET['tel'])==8)&&(filter_var($_GET['mail'], FILTER_VALIDATE_EMAIL))){

  		 		$e=new Client($_GET['id'],$_GET['nom'],$_GET['prenom'],$_GET['addresse'],$_GET['tel'],$_GET['mail'],$_GET['mdp']);
				$clientC=new clientC();
				$clientC->modifierclient($e,$_GET['id']);
				echo "<META http-equiv='refresh' content='0;URL=modifier_client.html'>";
			}
			else if($_GET['mdp'] != $_GET['mdp2']){
				?>
				<script type="text/javascript">
        		alert ("Le mot de passe est incorrect. ");</script>
        		echo "<META http-equiv='refresh' content='0;URL=modifier_client.html'>";
    		<?php }
    		else if(strlen($_GET['tel'])!=8){
				?>
				<script type="text/javascript">
        		alert ("Numero Tel incorrect. ");</script>
        		echo "<META http-equiv='refresh' content='0;URL=modifier_client.html'>";
    		<?php }
    		else if(filter_var($_GET['mail'], FILTER_VALIDATE_EMAIL) != 1){
				?>
				<script type="text/javascript">
        		alert ("Le mail est incorrect. ");</script>
        		echo "<META http-equiv='refresh' content='0;URL=modifier_client.html'>";
    		<?php }

		}
		else {
		?>
	<script type="text/javascript">
        alert ("ID ou mot de passe incorrect. ");</script>
        echo "<META http-equiv='refresh' content='0;URL=modifier_client.html'>";}
    <?php }

    

}	
	}

	




?>