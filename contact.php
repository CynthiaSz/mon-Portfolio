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
								<li><a href="portfolio.php">Portfolio</a></li>
								<li><a href="competences.php">Compétences</a></li>
								<li><a href="contact.php" class="active">Contact</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
 	    			</div><!-- /.container-fluid -->
				</nav><!-- fin navbar -->
			</div><!-- fin fixNavigation -->
			
		</header>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p class="txtcont">Un site est l'outil de communication sur internet.</br>Votre activité doit être mise en valeur, c'est pourquoi je vous propose de créer un site personnalisé, en accord avec l'image que vous désirez véhiculer.</br></br> N'hésitez pas à me demander un devis, c'est gratuit.</br>Je suis disponible du lundi au vendredi, de 8h30 à 19h30.</br>
					Vous pouvez me contacter par<a href="mailto:cynthiaszarzynski30@gmail.com" class="mail"> mail</a>, <a href="" class="tel">téléphone</a>, ou via ma page <a href="" class="fb">Facebook</a>.</p>
					<div>
						<h4 class="coordonnees">Mes coordonnées</h4>
						<ul class="contact">
							<img src="img/enveloppe.png"><a href="mailto:contact@madysign.fr" class="mail"> contact@madysign.fr </a>
							<li><img src="img/phone.png"> <a href="" class="tel">0-667-189-309</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<img class="moi" src="img/Carte.jpg">
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