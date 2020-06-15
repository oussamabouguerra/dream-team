<?php

include "../connect.php";

class promotionC
{
	function ajouterpromotion($promotion)
	{
		$sql="insert into promotion (nom,prix,pourcentage,prixpromo,description,date_debut,date_fin,photo) values (:nom,:prix,:pourcentage,:prixpromo,:description,:date_debut,:date_fin,:photo)";
		$db=config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
		    //$id=$promotion->getid();
		    $nom=$promotion->getnom();
	     	$prix=$promotion->getprix();
	     	 $pourcentage=$promotion->getpourcentage();
	     	$prixpromo=$promotion->getprixpromo();
	     	$description=$promotion->getdescription();
	     	$date_debut=$promotion->getdate_debut();
	     	$date_fin=$promotion->getdate_fin();
	     	$photo=$promotion->getphoto();
	     	//$req->bindValue(':id', $id);
	    	$req->bindValue(':nom', $nom);
	    	$req->bindValue(':prix', $prix);
	    	$req->bindValue(':pourcentage', $pourcentage);
	    	$req->bindValue(':prixpromo', $prixpromo);
	    	$req->bindValue(':description', $description);
	    	$req->bindValue(':date_debut', $date_debut); 
	    	$req->bindValue(':date_fin', $date_fin);
	    	$req->bindValue(':photo', $photo);  
	    	$req->execute();
	    	?>

	<script type="text/javascript">
        alert ("Ajout avec succés");</script>
    <?php 
	    	echo "<META http-equiv='refresh' content='0;URL=ajouterpromotion.php'>";
        }
    
    catch(Exception $e)
	    {
		    echo 'Erreu' .$e->getMessage() ;
		    ?>
	<script type="text/javascript">
		var variableRecuperee = <?PHP echo $e->getMessage();?>;
		alert(variableRecuperee);
    </script>
    <?php 
		    echo "<META http-equiv='refresh' content='0;URL=ajouterpromotion.php'>";
	    }
		
	}
	function ajouter($promotion)
	{
		$sql="insert into promotion (nom,prix,pourcentage,prixpromo,description,date_debut,date_fin,photo) values (:nom,:prix,:pourcentage,:prixpromo,:description,:date_debut,:date_fin,:photo)";
		$db=config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
		    //$id=$promotion->getid();
		    $nom=$promotion->getnom();
	     	$prix=$promotion->getprix();
	     	 $pourcentage=$promotion->getpourcentage();
	     	$prixpromo=$promotion->getprixpromo();
	     	$description=$promotion->getdescription();
	     	$date_debut=$promotion->getdate_debut();
	     	$date_fin=$promotion->getdate_fin();
	     	$photo=$promotion->getphoto();
	     	//$req->bindValue(':id', $id);
	    	$req->bindValue(':nom', $nom);
	    	$req->bindValue(':prix', $prix);
	    	$req->bindValue(':pourcentage', $pourcentage);
	    	$req->bindValue(':prixpromo', $prixpromo);
	    	$req->bindValue(':description', $description);
	    	$req->bindValue(':date_debut', $date_debut); 
	    	$req->bindValue(':date_fin', $date_fin);
	    	$req->bindValue(':photo', $photo);  
	    	$req->execute();
	    	?>
 <script type="text/javascript">
        alert ("ajout avec succés!"); 
    </script>

    <?php 
	    	echo "<META http-equiv='refresh' content='0;URL=afficherpromotion.php'>";
        }
    
    catch(Exception $e)
	    {
		    echo 'Erreu' .$e->getMessage() ;
		    ?>
	<script type="text/javascript">
		var variableRecuperee = <?PHP echo $e->getMessage();?>;
		alert(variableRecuperee);
    </script>
    <?php 
		    echo "<META http-equiv='refresh' content='0;URL=afficherpromotion.php'>";
	    }
		
	}
	function supprimerpromotion($id){
		$sql="DELETE FROM promotion where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
            ?>
	<script type="text/javascript">
        alert ("Suppression avec succés!");</script>
    <?php 
	    	echo "<META http-equiv='refresh' content='0;URL=afficherpromotion.php'>";
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            echo "<META http-equiv='refresh' content='0;URL=supp_client.php'>";
        }
	}
	
   function modifierpromotion($promotion,$id){
		$sql="UPDATE produit SET  id=:idd, nom=:nom,prix=:prix,pourcentage=:pourcentage,prixpromo=:prixpromo,description=:description ,date_debut=:date_debut,date_fin=:date_fin,photo=:photo  WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$promotion->getid();        
		$nom=$promotion->getnom();
        $prix=$promotion->getprix();
        $pourcentage=$promotion->getpourcentage();
        $prixpromo=$promotion->getprixpromo();
         $description=$promotion->getdescription();
        $date_debut=$promotion->getdate_debut();
         $date_fin=$promotion->getdate_fin();
          $photo=$promotion->getphoto();
          
      
		$datas = array(':id'=>$id, ':idd'=>$idd, ':nom'=>$nom,':prix'=>$prix,':pourcentage'=>$pourcentage,':prixpromo'=>$prixpromo,':description'=>$description,':date_debut'=>$date_debut,':date_fin'=>$date_fin,':photo'=>$photo);
		$req->bindValue(':id',$id);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':pourcentage',$pourcentage);
		$req->bindValue(':prixpromo',$prixpromo);
		$req->bindValue(':description',$description);
		$req->bindValue(':date_debut',$date_debut);
		$req->bindValue(':date_fin',$date_fin);
		$req->bindValue(':photo',$photo);

			
		

		
		
		
            $s=$req->execute();
			 
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}	

	function modifierpromo($id,$nom,$prix,$pourcentage,$prixpromo,$description,$date_debut,$date_fin,$photo)
    {
        $sql="UPDATE promotion SET id=:id, nom=:nom,prix=:prix,pourcentage=:pourcentage,prixpromo=:prixpromo,description=:description,date_debut=:date_debut,date_fin=:date_fin,photo=:photo WHERE id=:id";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        $req->bindValue(':nom',$nom);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':pourcentage',$pourcentage);
	    $req->bindValue(':prixpromo',$prixpromo);
		$req->bindValue(':description',$description);
        $req->bindValue(':date_debut',$date_debut);
        $req->bindValue(':date_fin',$date_fin);
        $req->bindValue(':photo',$photo);

    ?>
    <script type="text/javascript">
        alert ("promotion modifier!");</script>
    <?php 
        echo "<META http-equiv='refresh' content='0;URL=afficherpromotion.php'>";
        
		
             $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
	
	function trierpromotionasc(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * from promotion ORDER by id asc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    	function trierpromotionascprix(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * from promotion ORDER by prix asc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function trierpromotiondesc(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * from promotion ORDER by id desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	

/*function afficher()
	{
        $db = config::getConnexion();
		$stmt = $db->query("SELECT * FROM promotion");
    while ($row = $stmt->fetch()) 
    {
	echo '<table border="1" >';
    echo '<tr>';
    echo '<td>'.$row['id'].'</td>';
    echo '<td>'.$row['nom'].'</td>';
    echo '<td>'.$row['prix'].'</td>';
    echo '<td>'.$row['pourcentage'].'</td>';
    echo '<td>'.$row['prixpromo'].'</td>';
    echo '<td>'.$row['description'].'</td>';
    echo '<td>'.$row['date_debut'].'</td>';
    echo '<td>'.$row['date_fin'].'</td>';
    echo '<td>'.$row['photo'].'</td>';
   
    echo '</tr>';
    echo '</table>';
    }
	}*/
    	function afficherpromotion(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From promotion ";
        $db = config::getConnexion();
        try{
        $list=$db->query($sql);
        return $list;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
function recupererpromotion($id){
		$sql="SELECT * from promotion where id='$id'";
		$db = config::getConnexion();
		try{
		$list=$db->query($sql);
		return $list;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function existencepromotion($id){
		$db = config::getConnexion();
		$req = $db->query("SELECT count(*) as s FROM promotion WHERE id = '$id'");
		if($req->fetch()['s'] > 0)
		{
  		 return 1;
		}
		else {return 0;}
	}


function searchsupplier($id)
	{

	$sql="SELECT * From promotion where id like '%$id%'";
        $db = config::getConnexion();
        try{
        $list=$db->query($sql);

        return $list;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
        
	}


}



?>