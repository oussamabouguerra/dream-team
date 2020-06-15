<?PHP
include "../core/promotionC.php";
$promotionC=new promotionC();
if (isset($_POST["id"])){
	$promotionC->supprimerpromotion($_POST["id"]);
	header('Location: afficherpromotion.php');
}

?>