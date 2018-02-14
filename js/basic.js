$('.carousel').carousel()

$(document).ready(function() { // prépare ma fonction
	$('.js').on('click', function() { // Au clic sur un élément
		var page = $(this).attr('href'); // Page cible
		$('body').animate( { scrollTop: $(page).offset().top }); // Go
	});


$(function(){
	   $(window).scroll(function () {//Au scroll dans la fenetre on déclenche la fonction
	      if ($(this).scrollTop() > 0) { //si on a défilé du haut vers le bas
	          $('.navbar').addClass("fixNavigation"); //on ajoute la classe "fixNavigation" à <div class="navbar">
	      } else {
	      $('.navbar').removeClass("fixNavigation");//sinon on retire la classe "fixNavigation" à <div class="navbar">
	      }
	 	});
	});

});

