<?php

include "config.php";

class actualiteC
{
	function ajouteractualiter($Actualite)
	{
		$sql="insert into actualite (id,date,contenu,id_fournisseur) values (:id,:date,:contenu,:id_fournisseur)";
		$db=config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
		    $id=$Actualite->getid();
		    $date=$Actualite->getdate();
		    $contenu=$Actualite->getcontenu();
	     	$id_fournisseur=$Actualite->getid_fournisseur();
	     	$req->bindValue(':id', $id);
	    	$req->bindValue(':date', $date);
	    	$req->bindValue(':contenu', $contenu);
	    	$req->bindValue(':id_fournisseur', $id_fournisseur);
	    	$req->execute();
	    	?>
	<script type="text/javascript">
        alert ("Ajout avec succés");</script>
    <?php 
	    	echo "<META http-equiv='refresh' content='0;URL=ajouter_actualite.php'>";
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
		    echo "<META http-equiv='refresh' content='0;URL=ajouter_actualite.php'>";
	    }
		
	}
	function supprimeractualite($id){
		$sql="DELETE FROM actualite where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
            ?>
	<script type="text/javascript">
        alert ("Suppression avec succés!");</script>
    <?php 
	    	echo "<META http-equiv='refresh' content='0;URL=gestion_actualite.php'>";
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            echo "<META http-equiv='refresh' content='0;URL=supp_actualite.php'>";
        }
	}
	function modifieractualite($Actualite,$id){
		$sql="UPDATE actualite SET id=:id,date=:date,contenu=:contenu,id_fournisseur=:id_fournisseur WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		    
		    $id=$Actualite->getid();
		    $date=$Actualite->getdate();
		    $contenu=$Actualite->getcontenu();
	     	$id_fournisseur=$Actualite->getid_fournisseur();
	     	$req->bindValue(':id', $id);
	    	$req->bindValue(':date', $date);
	    	$req->bindValue(':contenu', $contenu);
	    	$req->bindValue(':id_fournisseur', $id_fournisseur);
	    	
            $s=$req->execute();
			?>
	<script type="text/javascript">
        alert ("Modification avec succés");</script>
    <?php 
	    	echo "<META http-equiv='refresh' content='0;URL=gestion_actualite.php'>";
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo "<META http-equiv='refresh' content='0;URL=modifier_actualite.php'>";
        }
		
	}
	/*
	function modifiermdpclient($id,$mdp){
		$sql="UPDATE client SET mdp=:mdp WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	    	$req->bindValue(':mdp', $mdp);
	    	$req->bindValue(':id', $id);
            $s=$req->execute();
			?>
	<script type="text/javascript">
        alert ("Modification mot de passe avec succés");</script>
    <?php 
	    	echo "<META http-equiv='refresh' content='0;URL=page1.php'>";
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo "<META http-equiv='refresh' content='0;URL=recup_client.php'>";
        }
		
	}*/
	/*function decrement_quantite($id,$nb){
		$sql="UPDATE event SET quantite=:nb WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		    
	    	$req->bindValue(':nb', $nb);
	    	$req->bindValue(':id', $id);
		
		
            $s=$req->execute();
	    	echo "<META http-equiv='refresh' content='0;URL=pdf_event.php'>";
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo "<META http-equiv='refresh' content='0;URL=afficher_event.php'>";
        }
		
	}*/

	function afficheractualite($id){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * from actualite where id='$id'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficheractualites(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * from actualite";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function trieractualitesasc(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * from actualite ORDER by date asc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function trieractualitesdesc(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * from actualite ORDER by date desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
/*	function recupererevent($id){
		$sql="SELECT * from event where id='$id'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererevents($search){
		$sql="SELECT * from event where nom='$search'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
	
	function existenceactualite($id){
		$db = config::getConnexion();
		$req = $db->query("SELECT count(*) as s FROM actualite WHERE id = '$id'");
		if($req->fetch()['s'] > 0)
		{
  		 return 1;
		}
		else {return 0;}
	}

	function rechercheractualite($id){
		$sql="SELECT * from actualite where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
/*
	function verif_client($id,$mdp){
		$db = config::getConnexion();
	    $req = $db->query("SELECT count(*) as s FROM client WHERE id='$id' and mdp='$mdp'");
	if($req->fetch()['s'] == 1 )
		{
			return $id;
		}
	else {return 0;}
	}*/

}





?>