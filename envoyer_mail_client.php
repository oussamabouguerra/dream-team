<?php
include "client.php";
include "clientC.php";


	if (isset($_POST['id']))
{
	
	$db = config::getConnexion();
	$id = $_POST['id'];
    $mdp = $_POST['mdp'];
	$req = $db->query("SELECT count(*) as s FROM client WHERE id='$id' and mdp='$mdp'");
	if($req->fetch()['s'] > 0 )
		{
  		 	if($_POST['mdp'] == $_POST['mdp2']){
				$clientC=new clientC();
				$list=$clientC->afficherclient($_POST['id']);
				?>
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
<!-- Mirrored from www.spruko.com/demo/splite/formelements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:42 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Envoyer E-mail</title>

		<!--Favicon -->
		<link rel="icon" href="favicon.html" type="image/x-icon"/>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

		<!--Icons css-->
		<link rel="stylesheet" href="assets/css/icons.css">

		<!--Style css-->
		<link rel="stylesheet" href="assets/css/style.css">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="assets/plugins/toggle-menu/sidemenu.css">

		<!--Morris css-->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">
		<script src="v.js"></script>

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
                <!--app-content open-->
        <div class="app-content">
          <section class="section">

                        <!--page-header open-->
            <div class="page-header">
              <h4 class="page-title"></h4>
            </div>
            <!--page-header closed-->
        <!--aside open-->
        <aside class="app-sidebar">
                <div class="app-sidebar__user">
                    <div class="dropdown user-pro-body text-center">
                        <div class="nav-link pl-1 pr-1 leading-none ">
                            <img src="assets/img/avatar.png" alt="user-img" class="avatar-xl rounded-circle mb-1">
                            <span class="pulse bg-success" aria-hidden="true"></span>
                        </div>
                        <div class="user-info">
                            <h6 class=" mb-1 text-dark">Client</h6>
                        </div>
                    </div>
                </div>

              
            </li>
                   
                                  </li>
                  <li class="slide">
<a href="modifier_client.html"  class="side-menu__item" ><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Modifier mon compte</span></a>
<ul class="slide-menu">

</ul>
<a href="afficher_client.html"  class="side-menu__item" ><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Afficher mon compte</span></a>
<ul class="slide-menu">

</ul>
<a href="recup_client.html"  class="side-menu__item" ><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Changer mon mdp</span></a>
<ul class="slide-menu">

</ul>
<a href="supp_client.html"  class="side-menu__item" ><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Supprimer mon compte</span></a>
<ul class="slide-menu">

</ul>
<li class="slide">
<a href="page1.html"  class="side-menu__item" ><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Quitter</span></a>
<ul class="slide-menu">

</ul>

 
                    

                </ul>
            </aside>
        <!--aside closed-->

          

                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Envoyer E-mail</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Client</a></li>
								<li class="breadcrumb-item active" aria-current="page">Envoyer E-mail</li>
							</ol>
						</div>
						<!--page-header closed-->

                        <!--row open-->
							<div class="row">
							<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>E-mail</h4>
									</div>
									<div class="card-body">
										<form class="form-horizontal" method="POST" action="action_mail.php"  name="f">
											<div class="form-group row">
												
												<table border="1">
												<tr>
												<td>From:</td>
												<td>To:</td>
												<td>Objet:</td>
												<td>Contenu</td>
												</tr>

												<?PHP 
												foreach($list as $row){
												?>
												<tr>
												<td><?PHP echo $row['mail']; ?></td>
												<td><input type="text" placeholder="TO:" class="form-control"  name="to" required></td>
												<td><input type="text" placeholder="OBJET:" class="form-control"  name="objet" required></td>
												<td><input type="text" placeholder="CONTENU:" class="form-control"  name="contenu" required></td>
												</tr>
												<?PHP
												
												}

												?>
												</table>

											</div>
											<button type="submit" class="btn btn-primary mt-1 mb-0" >Envoyer</button>
											</form>
											
											


											
											
																		

									</div>
								</div>
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
			
			<?php } }
			else {
				?>
				<script type="text/javascript">
        		alert ("Le mot de passe est incorrect. ");</script>
        		echo "<META http-equiv='refresh' content='0;URL=envoyer_mail_client.html'>";}
    		<?php }

		}
		else {
		?>
	<script type="text/javascript">
        alert ("ID ou mot de passe incorrect. ");</script>
        echo "<META http-equiv='refresh' content='0;URL=envoyer_mail_client.html'>";}
    <?php }

    


?>