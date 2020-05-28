<?php
include "config.php";


if (isset($_POST['id'])){
	$db = config::getConnexion();
	$id = $_POST['id'];
    $mdp = $_POST['mdp'];
	$req = $db->query("SELECT count(*) as s FROM client WHERE id='$id' and mdp='$mdp'");
	if($req->fetch()['s'] > 0 )
		{
		
  		 echo "<META http-equiv='refresh' content='0;URL=modifier_client.html'>";
		}
		else {
		?>
	<script type="text/javascript">
        alert ("ID ou le mot de passe incorrect. ");</script>
        echo "<META http-equiv='refresh' content='0;URL=login2.html'>";}
    <?php }
}
?>