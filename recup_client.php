<?php
include "client.php";
include "clientC.php";


	if (isset($_POST['id']))
{
	
	$db = config::getConnexion();
	$id = $_POST['id'];
    $mdp = $_POST['mdp'];
	$req = $db->query("SELECT count(*) as s FROM client WHERE id='$id' and mdp='$mdp'");
	if($req->fetch()['s'] > 0 )
		{
  		 	if(($_POST['mdp2'] == $_POST['mdp3'])&&($_POST['mdp2']>7)){
				$clientC=new clientC();
				$clientC->modifiermdpclient($_POST['id'],$_POST['mdp2']); 
				echo "<META http-equiv='refresh' content='0;URL=page1.html'>";
			}
			else {
				?>
				<script type="text/javascript">
        		alert ("Le mot de passe est incorrect. ");</script>
        		<META http-equiv='refresh' content='0;URL=recup_client.html'>
    		<?php }

		}
		else {
		?>
	<script type="text/javascript">
        alert ("ID ou mot de passe incorrect. ");</script>
        <META http-equiv='refresh' content='0;URL=recup_client.html'>
    <?php }

    

}
?>