<?PHP
											
	if (isset($_POST['to'])){
	ini_set('SMTP','smtp.topnet.tn');
	$to = $_POST['to'];
	$objet = $_POST['objet'];
	$contenu = $_POST['contenu'];
	mail($to, $objet, $contenu);
	?>
		<script type="text/javascript">
        alert ("Mail envoyé!");</script>
    	<?php
	echo "<META http-equiv='refresh' content='0;URL=envoyer_mail_client.html'>";
	}
?>