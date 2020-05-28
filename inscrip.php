<?php
include "actualiteC.php";



if (isset($_POST['id'])){
	$db = config::getConnexion();
	$id = $_POST['id'];
    $mdp = $_POST['mdp'];
	$req = $db->query("SELECT count(*) as s FROM client WHERE id='$id' and mdp='$mdp'");
  $req2 = $db->query("SELECT count(*) as c FROM fournisseur WHERE id='$id' and mdp='$mdp'");//nouveau
  if($req2->fetch()['c'] > 0 )
  {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style2.css" />
</head>
<body>

<form class="box" action="page1_fournisseur.html" method="post" name="login">
<h1 class="box-logo box-title">Labasni.tn</h1>
<h3 align="center">ESPACE FOURNISSEUR</h3>
<input type="submit" value="Entrer " name="submit" class="box-button">
</form>
</body>
</html>
  
  <?php
}
	else if($req->fetch()['s'] > 0 )
		{ 

      ?>
       <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Labasni.tn</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Labasni.tn</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#accueil">Actualités</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#Adidas">Adidas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#Umbro">Umbro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#Nike">Nike</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#connexion">Déconnexion/Options</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Welcome To Our store!</div>
        <div class="intro-heading text-uppercase">Vos courbatures d'aujourd'hui sont vos muscles de demain</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#accueil">NEWS!</a>
      </div>
    </div>
  </header>

  <!-- Actualité -->
  <section class="page-section" id="accueil">
    <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="section-heading text-uppercase">Actualités</h1>
            <?php $actualiteC=new actualiteC();
          $list=$actualiteC->afficheractualites(); ?>
        <table border="1" align="center">
                        <tr> 
                        <?PHP 
                        foreach($list as $row){
                        ?>
                        <td><h1><?PHP echo $row['contenu']; ?></h1></td>
                        </tr>
                        <?PHP
                        }
                        ?>
        </table>

        </div>
      </div>

  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="Adidas">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Adidas</h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 Adidas-item">
          <a class="Adidas-link" data-toggle="modal" href="#AdidasModal1">
            <div class="Adidas-hover">
              <div class="Adidas-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
          </a>
          <div class="Adidas-caption">
    <h4>short</h4>
            
           
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#AdidasModal2">
            <div class="Adidas-hover">
              <div class="Adidas-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
          </a>
          <div class="Adidas-caption">
            <h4>superstar</h4>
            
          </div>
        </div>
        <div class="col-md-4 col-sm-6 Adidas-item">
          <a class="Adidas-link" data-toggle="modal" href="#AdidasModal3">
            <div class="Adidas-hover">
              <div class="Adidas-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
          </a>
          <div class="Adidas-caption">
            <h4>Sweatshirt Adidas</h4>
            
          </div>
        </div>
        <div class="col-md-4 col-sm-6 Adidas-item">
          <a class="Adidas-link" data-toggle="modal" href="#AdidasModal4">
            <div class="Adidas-hover">
              <div class="Adidas-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Pantalon Adidas</h4>
           
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#AdidasModal5">
            <div class="Adidas-hover">
              <div class="Adidas-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
          </a>
          <div class="Adidas-caption">
            <h4>Ballon</h4>
            
          </div>
        </div>
        <div class="col-md-4 col-sm-6 Adidas-item">
          <a class="portfolio-link" data-toggle="modal" href="#AdidasModal6">
            <div class="Adidas-hover">
              <div class="Adidas-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
          </a>
          <div class="Adidas-caption">
            <h4>Casquette</h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="bg-light page-section" id="Umbro">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Umbro</h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 Umbro-item">
          <a class="Umbro-link" data-toggle="modal" href="#UmbroModal1">
            <div class="Umbro-hover">
              <div class="Umbro-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/umbro/shortumbro.jpg" alt="">
          </a>
          <div class="Umbro-caption">
            <h4>Short</h4>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 Umbro-item">
          <a class="Umbro-link" data-toggle="modal" href="#UmbroModal2">
            <div class="Umbro-hover">
              <div class="Umbro-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/umbro/pullumbro.jpg" alt="">
          </a>
          <div class="Umbro-caption">
            <h4>Pull</h4>
          
          </div>
        </div>
        <div class="col-md-4 col-sm-6 Umbro-item">
          <a class="Umbro-link" data-toggle="modal" href="#UmbroModal3">
            <div class="Umbro-hover">
              <div class="Umbro-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/umbro/pantalonumbro.jpg" alt="">
          </a>
          <div class="Umbro-caption">
            <h4>Pantalon</h4>
            
          </div>
        </div>
        <div class="col-md-4 col-sm-6 Nike-item">
          <a class="Nike-link" data-toggle="modal" href="#UmbroModal4">
            <div class="Umbro-hover">
              <div class="Umbro-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/umbro/chaussureumbro.jpg" alt="">
          </a>
          <div class="Umbro-caption">
            <h4>Chaussures de sport</h4>
            
          </div>
        </div>
        <div class="col-md-4 col-sm-umbro-item">
          <a class="Umbro-link" data-toggle="modal" href="#UmbroModal5">
            <div class="Umbro-hover">
              <div class="Umbro-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/umbro/casquetteumbro.jpg" alt="">
          </a>
          <div class="Umbro-caption">
            <h4>Casquette</h4>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 Umbro-item">
          <a class="Umbro-link" data-toggle="modal" href="#UmbroModal6">
            <div class="Umbro-hover">
              <div class="Umbro-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/umbro/chaussetteumbro.jpg" alt="">
          </a>
          <div class="Umbro-caption">
            <h4>Chaussette</h4>
            
          </div>
        </div>
      </div>
    </div>
  </section>
 <section class="bg-light page-section" id="Nike">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Nike</h2>
          <h3 class="section-subheading text-muted">Just do it.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 Nike-item">
          <a class="Nike-link" data-toggle="modal" href="#NikeModal1">
            <div class="Nike-hover">
              <div class="Nike-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/nike/shortnike.jpg" alt="">
          </a>
          <div class="Nike-caption">
            <h4>Short</h4>
  
          </div>
        </div>
        <div class="col-md-4 col-sm-6 Nike-item">
          <a class="Nike-link" data-toggle="modal" href="#NikeModal2">
            <div class="Nike-hover">
              <div class="Nike-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/nike/pullnike.jpg" alt="">
          </a>
          <div class="Nike-caption">
            <h4>Pull</h4>
            
          </div>
        </div>
        <div class="col-md-4 col-sm-6 Adidas-item">
          <a class="Nike-link" data-toggle="modal" href="#NikeModal3">
            <div class="Nike-hover">
              <div class="Nike-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/nike/pantalonnike.jpg" alt="">
          </a>
          <div class="Nike-caption">
            <h4>Pantalon</h4>
            
          </div>
        </div>
        <div class="col-md-4 col-sm-6 Nike-item">
          <a class="Nike-link" data-toggle="modal" href="#NikeModal4">
            <div class="Nike-hover">
              <div class="Nike-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/nike/chaussurenike.jpg" alt="">
          </a>
          <div class="Nike-caption">
            <h4>Chaussures</h4>
            
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="Nike-link" data-toggle="modal" href="#NikeModal5">
            <div class="Nike-hover">
              <div class="Nike-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/nike/casquettenike.jpg" alt="">
          </a>
          <div class="Nike-caption">
            <h4>Casquette</h4>
            
          </div>
        </div>
        <div class="col-md-4 col-sm-6 Nike-item">
          <a class="Nike-link" data-toggle="modal" href="#NikeModal6">
            <div class="Nike-hover">
              <div class="Nike-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/nike/chaussettenike.jpg" alt="">
          </a>
          <div class="Nike-caption">
            <h4>Chaussettes</h4>
            
          </div>
        </div>
      </div>
    </div>
  </section>
 

  <!-- Clients -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/logo-adidas.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/Umbro-symbol.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/nike-symbol.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/NEW.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Connexion -->
  <section class="page-section" id="connexion">
    <CENTER>
<FORM name=login>
<TABLE width=225 border=1 cellpadding=3>
<tr><td colspan=2 align=center><input class="btn btn-primary btn-xl text-uppercase" type=button value="Se déconnecter" onClick="Logout()"></td>
<td colspan=2 align=center><input class="btn btn-primary btn-xl text-uppercase" type=button value="Options" onClick="gerer_compte2()"></td>
</tr>
</TABLE>
</FORM>
</CENTER>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Your Website 2020</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Threads</li>
                  <li>Category: Illustration</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Explore</li>
                  <li>Category: Graphic Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Finish</li>
                  <li>Category: Identity</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Lines</li>
                  <li>Category: Branding</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Southwest</li>
                  <li>Category: Website Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Window</li>
                  <li>Category: Photography</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/connexion2.js"></script>


  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>

    <?php 
    }
		else {
		?>
	<script type="text/javascript">
        alert ("ID ou mot de passe incorrect. ");</script>
        echo "<META http-equiv='refresh' content='0;URL=login.html'>";}
    <?php }
  }

?>