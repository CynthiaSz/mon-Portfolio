<?php include "header.php";?>

	<body>
		<header>
			<div>
				<nav class="navbar navbar-default">
  					<div class="container-fluid">

  						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
     			    			<span class="sr-only">Toggle navigation</span>
       			    			<span class="icon-bar"></span>
       			    			<span class="icon-bar"></span>
        						<span class="icon-bar"></span>
      						</button><!-- hamburger -->
      					</div><!--navbar-header-->
      					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      						<ul class="nav navbar-nav">
								<li><a href="index.php">Accueil</a></li>
								<li><a href="portfolio.php" class="active">Portfolio</a></li>
								<li><a href="competences.php">Compétences</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
 	    			</div><!-- /.container-fluid -->
				</nav><!-- fin navbar -->
			</div><!-- fin fixNavigation -->

		</header>
		
		<div class="projet">
			<h3>Projets réalisés</h3>
		</div>

		<div class="container">
  			<div class="row">
				<div class="col-md-6 container-element">
					<img class="myCave" src="img/myCave.png">
					<p class="text element-absolute">Inventorier les bouteilles d'une cave à vin <a class="lienPhoto" href="/myCave/"> MyCave</a></p>
				</div>

				<div class="col-md-6 container-element">
					<img class="ecoCity" src="img/ecoCity.png">
					<p class="text element-absolute">Organiser la collecte des encombrants dans Bordeaux <a class="lienPhoto" href="http://trash.lequentrec.xyz/"> EcoCity</a></p>
				</div>
			</div>
		</div>

		<div class="enCours">
			<h3>Projets en cours</h3>	
		</div>
		
		<div class="container">
  			<div class="row">
				<div class="col-md-6 container-element">
					<img class="taxiLerm" src="img/taxiLerm.png">
					<p class="text2 element-absolute">Réservation de<a class="lienPhoto" href=""> Taxi</a></p>
				</div>

				<div class="col-md-6 container-element">
					<img class="fauteuil" src="img/fauteuil.png">
					<p class="text3 element-absolute">Dans le cadre d'un cours de développement que je dispense</br> nous réalisons un site de <a class="lienPhoto" href="">brocante</a>.</p>
				</div>
			</div>
		</div>

		
		<?php include "footer.php"; ?>

	</body>

	
		
		<script
  		src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
 	    integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  		crossorigin="anonymous"></script><!-- pour appeler la bibliothèque -->

		<script src="js/basic.js"></script><!-- pour intégrer ma page jQuery -->




</html>