<?php
include "connect.php";
class produitC {
        function ajouterproduit($produit)
        {  
        $sql="insert into produittab (referance,nom,prix,quantite,mesure,couleur,marque,photo) values (:referance,:nom,:prix,:quantite,:mesure,:couleur,:marque,:photo)";
        $db=config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $referance=$produit->getreferance();
            $nom=$produit->getnom();
            $prix=$produit->getprix();
            $quantite=$produit->getquantite();
            $mesure=$produit->getmesure();
            $couleur=$produit->getcouleur();
            $marque=$produit->getmarque();
            $photo=$produit->getphoto();
            $req->bindValue(':referance', $referance);
            $req->bindValue(':nom', $nom);
            $req->bindValue(':prix', $prix);
            $req->bindValue(':quantite', $quantite);
            $req->bindValue(':mesure', $mesure);
            $req->bindValue(':couleur', $couleur);
            $req->bindValue(':marque', $marque);
            $req->bindValue(':photo', $photo);  
            $req->execute();
            ?>

    <script type="text/javascript">
        alert ("Ajout avec succés");</script>
    <?php 
            echo "<META http-equiv='refresh' content='0;URL=ajouterproduit.php'>";
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
            echo "<META http-equiv='refresh' content='0;URL=ajouterproduit.php'>";
        }
        
        }
       /* function stats($id_client,$id_product)
        {
         $sql="insert into booktab (id_client,id_product) values (:id_client,:id_product)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);        
        $req->bindValue(':id_client',$id_client);
        $req->bindValue(':id_product',$id_product);
        $req->execute(); }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
               }
        }
*/
         function modifierpro($produittab,$referance){
        $sql="UPDATE produit SET  referance=:refe, nom=:nom,prix=:prix,quantite=:quantite,mesure=:mesure,couleur=:couleur ,marque=:marque,photo=:photo  WHERE referance=:referance";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $refe=$produittab->getreferance();        
        $nom=$produittab->getnom();
        $prix=$produittab->getprix();
        $quantite=$produittab->getquantite();
        $mesure=$produittab->getmesure();
         $couleur=$produittab->getcouleur();
        $marque=$produittab->getmarque();
          $photo=$promotion->getphoto();
          
      
        $datas = array(':referance'=>$referance, ':refe'=>$refe, ':nom'=>$nom,':prix'=>$prix,':quantite'=>$quantite,':mesure'=>$mesure,':couleur'=>$couleur,':marque'=>$marque,':photo'=>$photo);
        $req->bindValue(':referance',$referance);
        $req->bindValue(':refe',$refe);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':quantite',$quantite);
        $req->bindValue(':mesure',$mesure);
        $req->bindValue(':couleur',$couleur);
        $req->bindValue(':marque',$marque);
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
    function afficherproduit(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SELECT * From produittab ";
        $db = config::getConnexion();
        try{
        $list=$db->query($sql);
        return $list;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
   
    function supprimerproduit($referance)
        {
        $sql="DELETE FROM produittab where referance= :referance";
        $db = config::getConnexion();   
        try{
                    $req=$db->prepare($sql);
                        $req->bindValue(':referance',$referance);
                    $req->execute();  
                   }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function trierpromotiondesc(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SELECT * from produittab ORDER by referance desc";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
    function trierproduitasc(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SELECT * from produittab ORDER by referance asc";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
function searchsupplier($referance)
    {

    $sql="SELECT * From produittab where referance like '%$referance%'";
        $db = config::getConnexion();
        try{
        $list=$db->query($sql);

        return $list;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
        
    }
    function rechercherproduit($referance)
    {

        $db = config::getConnexion();   
        $stmt = $db->prepare("SELECT * FROM produittab where referance=:referance");
        $stmt->execute(['referance' => $referance]); 
while ($row = $stmt->fetch()) {
    echo "produit=";
    echo $row['referance']."<br />\n";
   // echo "types of products=";
echo "le nom est " ;
    echo $row['nom']."<br />\n";
echo "le prix est " ;
    echo $row['prix']."<br />\n";
echo "la quantite est " ;
    echo $row['quantite']."<br />\n";
    //echo $row['img']."<br />\n";
echo "la description est " ;
echo $row['description']."<br />\n";
       }
    }
/*
    function searchclient($id_client)
    {

        $db = config::getConnexion();
                $stmt = $db->prepare("SELECT * FROM clients");
        $stmt->execute(['id' => $id]); 
while ($row = $stmt->fetch()) {
    echo "delivery=";
    echo $row['id_client']."<br />\n";
   if($row['id_client']==$id_client)
   {
    return 1;
   }
 return -1;  
}   
   }
*/
    /*function searchproduct($id_product)
    {

        $db = config::getConnexion();
                $stmt = $db->prepare("SELECT * FROM products");
        $stmt->execute(['id_product' => $id_product]); 
while ($row = $stmt->fetch()) {
    echo "delivery=";
    echo $row['id_product']."<br />\n";
   if($row['id_product']==$id_client)
   {
    return 1;
   }
 return -1;  
}   
   }
*/
   function existenceproduit($referance){
        $db = config::getConnexion();
        $req = $db->query("SELECT count(*) as s FROM produittab WHERE referance = '$referance'");
        if($req->fetch()['s'] > 0)
        {
         return 1;
        }
        else {return 0;}
    }
    function modifierproduit($referance,$prix)
    {
        $sql="UPDATE produittab SET referance=:referance,prix=:prix WHERE referance=:referance";
        $db = config::getConnexion();
        try{
             $req=$db->prepare($sql);
             $req->bindValue(':referance',$referance);
             
        $req->bindValue(':prix',$prix);
       
        
             $req->execute();
              ?>

    <script type="text/javascript">
        alert ("Modifier avec succés");</script>
    <?php 
            echo "<META http-equiv='refresh' content='0;URL=afficherproduit.php'>";
        
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
        
    }
?>