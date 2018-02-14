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
								<li><a href="competences.php" class="active">Compétences</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav><!-- fin navbar -->
			</div><!-- fin fixNavigation -->
			
		</header>

		<div class="en-tete">
			<div>
				<h2 class="ouam">Mady sign</h2>
			</div>	
		</div>

		
		<h4 class="comp">Compétences en développement web</h4>
		<!-- <h5 class="devweb">Développement web</h5> -->
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="img/html.jpg" class="html">
				</div>
				<div class="col-md-4">
					<img src="img/php.png" class="php">
				</div>
				<div class="col-md-4">
					<img src="img/jquery.jpg" class="jquery">
				</div>
				<div class="col-md-4">
					<img src="img/bootstrap.jpg" class="bootstrap">
				</div>
				<div class="col-md-4">
					<img src="img/prestashop.png" class="presta">
				</div>
				<div class="col-md-4">
					<img src="img/wordpress.jpg" class="word">
				</div>
			</div><!-- fin row -->
		</div><!-- fin container -->

		<!-- <div>
			<HR class="trait" size=4 align=center width="100%">
		</div>
		<h4 class="comp2">Compétences en design</h4>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="img/illustrator.jpg" class="illus">
				</div>
				<div class="col-md-6">
					<img src="img/photoshop.jpg" class="photoshop">
				</div>
			</div>
		</div> -->
		<!-- <div>
			<HR class="trait2" size=4 align=center width="100%">
		</div>

		<div>
		<h4 class="exp">Expériences</h4>
			<ul class="stages">
				<li class="stage1"><strong>Juin-Août 2016 : Stage 1twitif Bègles</strong></li>
				<ul>
					<li>Utilisation de Xampp, Webstorm, Phpstorm, Git, Github, Docker</li>
					<li>Intégration et design du site co-transcript (html 5, CSS 3)</li>
					<li>Travail de l'ergonomie des formulaires</li>
				</ul>
					<li class="stage2"><strong>Février-Mars 2016: Stage IDC Soft Pessac</strong>
				<ul>
					<li>Apprentissage du logiciel WINDEV 17</li>
					<li>Mise en application des aquis WINDEV 17
					</li>
				</ul>
			</ul>
		</div> -->

	
		<?php include "footer.php"; ?>
	

	</body>


		<script
  		src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
 	    integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  		crossorigin="anonymous"></script><!-- pour appeler la bibliothèque -->

		<script src="js/basic.js"></script><!-- pour intégrer ma page jQuery -->

</html>