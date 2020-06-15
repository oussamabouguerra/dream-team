<!DOCTYPE html>
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
<script type="text/javascript">
                         function Calcul(){
                                var a = document.getElementById('id1').value ;
                                var b = document.getElementById('id2').value ;
                                var c = 100
                                document.getElementById('prixpromo').value =  parseFloat(a) *  parseFloat(b) /parseFloat(c) ; 

                        };
                </script>
                <script type="text/javascript">
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
                </script>

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
							   <a class="side-menu__item"  data-toggle="slide" href="principal.php"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Menu</span></a>
							<a href="afficherpromotion.php"  class="side-menu__item" ><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Afficher promotion</span></a>
<a href="ajouterpromotion.html"  class="side-menu__item" ><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Ajouter promotion</span></a>
<a href="supprimerpromotion.html"  class="side-menu__item" ><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Supprimer promotion</span></a>
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
								<li class="breadcrumb-item active" aria-current="page">modifier promotion</li>
							</ol>
						</div>
						<!--page-header closed-->
<?PHP
include "../entities/promotion.php";
include "../core/promotionC.php";
if (isset($_GET['id'])){
	$promotionC=new promotionC();
    $result=$promotionC->recupererpromotion($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nom=$row['nom'];
		$prix=$row['prix'];
		$pourcentage=$row['pourcentage'];
		$prixpromo=$row['prixpromo'];
		$description=$row['description'];
		$date_debut=$row['date_debut'];
		$date_fin=$row['date_fin'];
		$photo=$row['photo'];
		
?> 
	<div class="app-content">
					<section class="section">

                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Promotion</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Promotion</a></li>
								<li class="breadcrumb-item active" aria-current="page">modifier promotion</li>
							</ol>
						</div>
						<!--page-header closed-->

                        <!--row open-->
							<div class="row">
							<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>Modifier une promotion</h4>
									</div>
									<div class="card-body">
										<form class="form-horizontal" method="GET" action="modifierpromo.php" name="f">
											<div class="form-group row">
												<label class="col-md-3 col-form-label">id </label>
												<div class="col-md-9">
<td><input readonly="id" type="number" name="id" placeholder="id:" class="form-control" value="<?PHP echo $id ?>"></td>
												</div>
											</div>
									
											<div class="form-group row">
												<label class="col-md-3 col-form-label">nom </label>
												<div class="col-md-9">
<td><input type="text" name="nom" placeholder="nom:" class="form-control" value="<?PHP echo $nom ?>"></td>
												</div>
											</div>
											
											<div class="form-group row">
												<label class="col-md-3 col-form-label">prix </label>
												<div class="col-md-9">
			<input TYPE="parseFloat" ID="id2" placeholder="prix:"   class="form-control"  name="prix" value="<?PHP echo $prix ?>" /> 
			
												</div>
											</div>
										<div class="form-group row">
												<label class="col-md-3 col-form-label">pourcentage </label>
												<div class="col-md-9">
																<input TYPE="number" ID="id1" placeholder="pourcentage:"  class="form-control"  name="pourcentage" value="<?PHP echo $pourcentage ?>" /> 

												</div>
											</div>
												<div class="form-group row">
												<label class="col-md-3 col-form-label">prixpromo</label>
												<div class="col-md-9">

			<input TYPE="parseFloat" ID="prixpromo"   class="form-control"  name="prixpromo" value="<?PHP echo $prixpromo ?>" /> 
			<input type="button" onClick="Calcul();" value="Calcul" /> 

												</div>
											</div>
											
											
											
											<div class="form-group row">
												<label class="col-md-3 col-form-label">description</label>
												<div class="col-md-9">
													<input type="text" placeholder="description:" class="form-control"  name="description" value="<?PHP echo $description ?>" required>
												</div>
											</div>
											 <div class="form-group row">
												<label class="col-md-3 col-form-label">date_debut </label>
												<div class="col-md-9">
													<input type="date" placeholder="date:" class="form-control"  name="date_debut" value="<?PHP echo $date_debut ?>">
												</div>
											</div>
											 <div class="form-group row">
												<label class="col-md-3 col-form-label">date_fin </label>
												<div class="col-md-9">
													<input type="date" placeholder="date:" class="form-control"  name="date_fin" value="<?PHP echo $date_fin ?>">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">photo</label> 
												<div class="figure">
													<input type="file" placeholder="photo:" class="form-control"  name="photo" value="<?PHP echo $photo ?>" required>
												</div>
											</div>
											<a href="accueil.html">retour</a><br><br>
										<script>
                                    
                                      </script>
																		

									</div>
								</div>
							</div>
						<!--row closed-->
						

			</div>
		</div>
<?PHP
	}
}
if (isset($_GET['modifier'])){
	$promotionC=new promotionC(@$_GET['id'],@$_GET['nom'],@$_GET['prix'],@$_GET['pourcentage'],@$_GET['prixpromo'],@$_GET['description'],@$_GET['date_debut'],@$_GET['date_fin'],@$_GET['photo']    );
	$promotionC->modifierpromotion($promotionC,@$_GET['idd']);
	echo @$_GET['idd'];
	//header('Location: principal.php');

}                                                
?>
											<button type="submit" onclick="modifierpromotion()" class="btn btn-primary mt-1 mb-0" >Modifier</button>


	<!-- Back to top -->
											</form>
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
