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
      					</button>
      					<!-- hamburger -->

      			</div><!--navbar-header-->

      				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      			    <ul class="nav navbar-nav">
							    <li><a href="index.php" class="active">Accueil</a></li>
							    <li><a href="portfolio.php">Portfolio</a></li>
							    <li><a href="competences.php">Compétences</a></li>
							    <li><a href="contact.php">Contact</a></li>
						    </ul>
					    </div><!-- /.navbar-collapse -->

 	    		</div><!-- /.container-fluid -->
			  </nav><!-- fin navbar -->
      </div><!-- fin fixNavigation -->

		</header>


		<div id="exemple-carrousel" class="carousel slide" data-ride="carousel"> 
 
  			<ol class="carousel-indicators"> 
    			<li data-target="#exemple-carrousel" data-slide-to="0" 
				  class="active"></li> 
    			<li data-target="#exemple-carrousel" data-slide-to="1"></li> 
    			<li data-target="#exemple-carrousel" data-slide-to="2"></li>
			  </ol> 
			<!-- compteur -->
 
 
  			<div class="carousel-inner"> 
   			    <div class="item active"> 
      				<img src="img/luxembourg.jpg" alt="jardin luxembourg"> 
      			</div> 
    			<!-- la première image qui enclenche le défilement -->
    
        		<div class="item"> 
       				<img src="img/caseneuve.png" alt="parc">
       			</div>
       			<div class="item"> 
       				<img src="img/ponton.jpg" alt="ponton lac">
       			</div>
       			<!-- images du caroussel -->
      			
      			<div>
	 				<a class="left carousel-control" href="#exemple-carrousel" 
					data-slide="prev"> 
    				<span class="glyphicon glyphicon-chevron-left"></span> 
  					</a> 
  					<a class="right carousel-control" href="#exemple-carrousel" 
					data-slide="next"> 
    				<span class="glyphicon glyphicon-chevron-right"></span> 
  					</a> 
				</div>
				<!-- petites flèches à gauche et à droite -->
      
        	</div><!-- fin carousel-inner -->
    	</div><!-- fin exemple-carousel -->
   
		<div class="container">
  			<div class="row">
  				<div class="col-md-6">
          
            <h1 class="developpeuse">Développeuse web</h1>
  					
  					<p class="txt-presentation"><strong>Créative</strong> et<strong> passionnée</strong> , je suis captivée par de nouveaux défis. Avec une grande capacité d'écoute et une rapide adaptabilité, je saurai répondre à vos besoins.  Consultez mes<a href="portfolio.php"> réalisations.</a></p>
  				</div>
				<div class="col-md-6">
					<img class="photo2" src="img/photo2.jpg" alt="photoMoi">
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