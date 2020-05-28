<?php

include "config.php";

class clientC
{
	function ajouterclient($Client)
	{
		$sql="insert into client (id,nom,prenom,addresse,tel,mail,mdp) values (:id,:nom,:prenom,:addresse,:tel,:mail,:mdp)";
		$db=config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
		    $nom=$Client->getnom();
		    $adr=$Client->getaddresse();
		    $id=$Client->getid();
	     	$prenom=$Client->getprenom();
	     	$tel=$Client->gettel();
	     	$mail=$Client->getmail();
	     	$mdp=$Client->getmdp();
	     	$req->bindValue(':id', $id);
	    	$req->bindValue(':nom', $nom);
	    	$req->bindValue(':prenom', $prenom);
	    	$req->bindValue(':addresse', $adr);
	    	$req->bindValue(':tel', $tel);
	    	$req->bindValue(':mail', $mail); 
	    	$req->bindValue(':mdp', $mdp); 
	    	$req->execute();
	    	?>
	<script type="text/javascript">
        alert ("Ajout avec succés");</script>
    <?php 
	    	echo "<META http-equiv='refresh' content='0;URL=ajouter_client.php'>";
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
		    echo "<META http-equiv='refresh' content='0;URL=ajouter_client.php'>";
	    }
		
	}
	function supprimerclient($id){
		$sql="DELETE FROM client where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
            ?>
	<script type="text/javascript">
        alert ("Suppression avec succés!");</script>
    <?php 
	    	echo "<META http-equiv='refresh' content='0;URL=page1.php'>";
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            echo "<META http-equiv='refresh' content='0;URL=supp_client.php'>";
        }
	}
	function modifierclient($Client,$id){
		$sql="UPDATE client SET id=:id,nom=:nom,prenom=:prenom,addresse=:addresse,tel=:tel,mail=:mail,mdp=:mdp WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		    $nom=$Client->getnom();
		    $adr=$Client->getaddresse();
		    $id=$Client->getid();
	     	$prenom=$Client->getprenom();
	     	$tel=$Client->gettel();
	     	$mail=$Client->getmail();
	     	$mdp=$Client->getmdp();
	    	$req->bindValue(':nom', $nom);
	    	$req->bindValue(':addresse', $adr);
	    	$req->bindValue(':id', $id);
	    	$req->bindValue(':prenom', $prenom);
	    	$req->bindValue(':mail', $mail); 
	    	$req->bindValue(':tel', $tel);
	    	$req->bindValue(':mdp', $mdp); 
		
		
            $s=$req->execute();
			?>
	<script type="text/javascript">
        alert ("Modification avec succés");</script>
    <?php 
	    	echo "<META http-equiv='refresh' content='0;URL=modifier_client.php'>";
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo "<META http-equiv='refresh' content='0;URL=modifier_client.php'>";
        }
		
	}
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
		
	}
	function trierclientsasc(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * from client ORDER by id asc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function trierclientsdesc(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * from client ORDER by id desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
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

	function afficherclient($id){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * from client where id='$id'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    	function afficherclients(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * from client";
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
	
	function existenceclient($id){
		$db = config::getConnexion();
		$req = $db->query("SELECT count(*) as s FROM client WHERE id = '$id'");
		if($req->fetch()['s'] > 0)
		{
  		 return 1;
		}
		else {return 0;}
	}

	function rechercherclient($id){
		$sql="SELECT * from client where Client=$Client";
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