<?php
include "../entities/promotion.php";
include "../core/promotionC.php";


	if (isset($_POST['id']))
{
	
	$db = config::getConnexion();
	$id = $_POST['id'];
	$req = $db->query("SELECT count(*) as s FROM promotion WHERE id='$id' ");
	if($req->fetch()['s'] > 0 )
		{
  		 	
    if (@$_POST['id']==@$_POST['id']) {
    	
    
    	$promotionC=new promotionC();
				$promotionC->supprimerpromotion(@$_POST['id']);
					    	echo "<META http-equiv='refresh' content='0;URL=supprimerpromotion.html'>";

    }
  }else{
	?>
		<script type="text/javascript">
        alert ("ID n'existe pas");</script>
    	<?php 
    	echo "<META http-equiv='refresh' content='0;URL=supprimerpromotion.html'>";
}}
    
?>