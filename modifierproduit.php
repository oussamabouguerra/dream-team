<?php
class produit
{
	protected $reference;
	protected $nom;
	protected $prix;
	protected $quantite;
	protected $mesure;
	protected $couleur;
	protected $marque;
	protected $photo;
	
	
	function __construct($reference,$nom,$prix,$quantite,$mesure,$couleur,$marque,$photo)
	    {
		$this->reference=$reference;
		$this->nom=$nom;
		$this->prix=$prix;
		$this->quantite=$quantite;
		$this->mesure=$mesure;
		$this->couleur=$couleur;
		$this->marque=$marque;
		$this->photo=$photo;
		
      	}
	function getreference(){
		return $this->reference;
	}
	function getnom(){
		return $this->nom;
	}
	function getprix(){
		return $this->prix;
	}
	function getquantite(){
		return $this->quantite;
	}

	function getmesure(){
		return $this->mesure;
	}

	function getcouleur(){
		return $this->couleur;
	}
	function getmarque(){
		return $this->marque;
	}
	function getphoto(){
		return $this->photo;
	}
	function setreferance($reference){
		$this->reference=$reference;
	}
	function setnom($nom){
		$this->nom=$nom;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setquantite($quantite){
		$this->quantite=$quantite;
	}

	function setmesure($mesure){
		$this->mesure=$mesure;
	}
	function setcouleur($couleur){
		$this->couleur=$couleur;
	}
	function setmarque($marque){
		$this->marque=$marque;
	}
	function setphoto($photo){
		$this->photo=$photo;
	}

}
include "produitC.php";

if(isset($_POST['referance']) && isset($_POST['prix']))
{
$produitC1=new produitC();
$produitC1->modifierproduit($_POST['referance'],$_POST['prix']);
header ("Location:afficherproduit.php");


//$produitC1->afficherproduit();
}
else
{
	echo "verify";
}
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
		<title>Labasni-Admin-Articles</title>

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
                            <img src="assets/img/as.png" alt="user-img" class="avatar-xl rounded-circle mb-1">
                            <span class="pulse bg-success" aria-hidden="true"></span>
                        </div>
                        <div class="user-info">
                            <h6 class=" mb-1 text-dark">Admin</h6>
                        </div>
                    </div>
                </div>

                
					
                    
<li class="slide">
							<a class="side-menu__item"  data-toggle="slide" href="principal.php"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Article</span></a>
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
							<h4 class="page-title">Articles</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Article</a></li>
								<li class="breadcrumb-item active" aria-current="page">supprimer un article</li>
							</ol>
						</div>
						<!--page-header closed-->

                        <!--row open-->
							<div class="row">
							 <a href="afficherarticle.php">Consulter les articles</a></br></br>
							 
							</div>
						<!--row closed-->
						<a href="produit.html">Menu</a><br><br>

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