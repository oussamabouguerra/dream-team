<?php

include "../connecte.php";

class articleC
{
	
	

function afficher()
	{
        $db = config::getConnexion();
		$stmt = $db->query("SELECT * FROM articles");
    while ($row = $stmt->fetch()) 
    {
	echo '<table border="1" >';
    echo '<tr>';
    echo '<td>'.$row['id'].'</td>';
    echo '<td>'.$row['nom'].'</td>';
    echo '<td>'.$row['prix'].'</td>';
    echo '<td>'.$row['marque'].'</td>';
    echo '<td>'.$row['quantite'].'</td>';
    echo '<td>'.$row['couleur'].'</td>';
    echo '<td>'.$row['photo'].'</td>';
   
    echo '</tr>';
    echo '</table>';
    }
	}
    	function afficherarticle(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From articles ";
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
		$sql="SELECT * from articles where id='$id'";
		$db = config::getConnexion();
		try{
        
		$list=$db->query($sql);
		return $list;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    function supprimerarticle($id){
        $sql="DELETE FROM articles where id= :id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
            ?>
    <script type="text/javascript">
        alert ("Suppression avec succés!");</script>
    <?php 
            echo "<META http-equiv='refresh' content='0;URL=afficherarticle.php'>";
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            echo "<META http-equiv='refresh' content='0;URL=supp_client.php'>";
        }
    }
/*
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
*/

}



?>