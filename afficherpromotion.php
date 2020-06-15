<?PHP
include "../core/promotionC.php";
$promotionC1=new promotionC();
$list=$promotionC1->afficherpromotion();

//var_dump($listeEmployes->fetchAll());
?>


<html lang="en">
	<style>
/* width */
::-webkit-scrollbar {
  width: 10px;
  height: 30px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: darkblue; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: black; 
}
</style>
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Labasni-Admin-Promotions</title>

		<!--Favicon -->
		<link rel="icon" href="favicon.html" type="image/x-icon"/>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

		<!--Icons css-->
		<link rel="stylesheet" href="assets/css/icons.css">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

		<!--gallery css-->
		<link rel="stylesheet" href="assets/plugins/gallery/main.css">

		<!--Style css-->
		<link rel="stylesheet" href="assets/css/style.css">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="assets/plugins/toggle-menu/sidemenu.css">

	</head>

	<body class="app ">
	<div class="wave -three"></div>

		<div id="spinner"></div>
				<!--anv open-->
            <nav class="navbar navbar-expand-lg main-navbar">
                <a class="header-brand" href="index-2.html">
                    <img src="assets/img/brand/logo.png" class="header-brand-img" alt="Splite-Admin  logo">
                </a>
                <ul class="navbar-nav navbar-right">
                    
                    <li class="dropdown dropdown-list-toggle d-none d-lg-block">
                        <a href="#" class="nav-link nav-link-lg full-screen-link">
                            <i class="fa fa-expand " id="fullscreen-button"></i>
                        </a>
                    </li>
                    
                </ul>
            </nav>
            <!--nav closed-->
               

                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Galerie</h4>
						</div>

						<!--page-header closed-->
				<!--aside open-->
				<aside class="app-sidebar">
                <div class="app-sidebar__user">
                    <div class="dropdown user-pro-body text-center">
                        <div class="nav-link pl-1 pr-1 leading-none ">
                            <img src="assets/img/avatar.jpg" alt="user-img" class="avatar-xl rounded-circle mb-1">
                            <span class="pulse bg-success" aria-hidden="true"></span>
                        </div>

                        <div class="user-info">
                            <h6 class=" mb-1 text-dark">Fournisseur</h6>
                        </div>
                    </div>
                </div>

                
					
                    
<li class="slide">
							
<a href="ajouterpromotion.html"  class="side-menu__item" ><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Ajouter promotion</span></a>
<a href="accueil.html"  class="side-menu__item" ><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Quitter</span></a>
							<ul class="slide-menu">
								
							</ul>
						</li>
                </ul>
            </aside>
				<!--aside closed-->

                <!--app-content open-->
				<div class="app-content">
					<section class="section">

                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Promotion</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Promotion</a></li>
								<li class="breadcrumb-item active" aria-current="page">affichage des  Promotions</li>
							</ol>
						</div>
						<!--page-header closed-->
                        <!--row open--><div class="topnav">
  <div class="search-container">
    <form method="POST" action="search.php">
      <input type="text" placeholder="Search.." name="id">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<div style="padding-left:16px">
  
</div>

							<div class="row">
							<table border="1">
						
<td><input class="btn btn-primary btn-xl text-uppercase" type=button align="center" value="PDF" onClick="window.print()"></td>

<tr>
<td>id</td>
<td>nom</td>
<td>prix</td>
<td>pourcentage</td>
<td>prixpromo</td>
<td>description</td>
<td>date_debut</td>
<td>date_fin</td>
<td>photo</td>
</tr>
<?PHP

foreach($list as $row){

	?>

	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prix']; echo "DT"; ?></td>
	<td><?PHP echo $row['pourcentage']; echo "%";?></td>
	<td><?PHP echo $row['prixpromo']; echo "DT";?></td>
	<td><?PHP echo $row['description']; ?></td>
	<td><?PHP echo $row['date_debut']; ?></td>
	<td><?PHP echo $row['date_fin']; ?></td>
   <td><img src="imageproduit/<?PHP echo $row['photo']; ?>" alt=""></td>	</tr>
<td><form method="POST" action="supprimerPromo.php">
	<input type="submit" name="supprimer" class="btn btn-primary mt-1 mb-0" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	
<td>
	<a href="modifierpromotion.php?id=<?PHP echo $row['id']; ?>"><button type="submit" class="btn btn-primary mt-1 mb-0" >Modifier</button></a>
</td> 



    	</tr>
	
  


	<?PHP

}

?>

</table>

<td><a href="trierpromotion2.php?id=<?PHP echo $row['id']; ?>"><button type="submit" class="btn btn-primary mt-1 mb-0" >Trie Desc</button></a></td><td>
<a href="trierpromotion.php?id=<?PHP echo $row['id']; ?>"><button type="submit" class="btn btn-primary mt-1 mb-0" >Trie Asc</button></a></td>

							</div>
						<!--row closed-->
						

			</div>
		</div>
		<!--app closed-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-angle-up"></i></a>

		<!-- Popup-chat -->
		<a href="#" id="addClass"><i class="ti-comment"></i></a>

		<!--Jquery.min js-->
		<script type="text/javascript" src="js/form.js"></script>
		<script src="assets/js/jquery.min.js"></script>

		<!--popper js-->
		<script src="assets/js/popper.js"></script>

		<!--Tooltip js-->
		<script src="assets/js/tooltip.js"></script>

		<!--Bootstrap.min js-->
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Jquery star rating-->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

		<!--Jquery.nicescroll.min js-->
		<script src="assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>

		<!--Scroll-up-bar.min js-->
		<script src="assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

		<!--mCustomScrollbar js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Sidemenu js-->
		<script src="assets/plugins/toggle-menu/sidemenu.js"></script>

		<!--Scripts js-->
		<script src="assets/js/scripts.js"></script>
		<script src="js/form.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>

	 </body>

<!-- Mirrored from www.spruko.com/demo/splite/formelements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:42 GMT -->
</html>