
<?php 
include "../core/promotionC.php";
$promotionC1=new promotionC();
$list=$promotionC1->rechercherpromotion(@$_POST['id']);
?>
