<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Meshotels | Contact</title>
<!--
Holiday Template
http://www.templatemo.com/tm-475-holiday
-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
	<link href="css/flexslider.css" rel="stylesheet">
	<link href="css/templatemo-style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	<!-- Header -->
	<div class="tm-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
  					<img src="img/logomeshotel.png" style="
    margin-top: -20px;
" />
  				</div>
				<div class="col-lg-6 col-md-8 col-sm-9">
					<div class="mobile-menu-icon">
						<i class="fa fa-bars"></i>
					</div>
					<nav class="tm-nav">
						<ul>
							<li><a href="index.html">Accueil</a></li>
							<li><a href="about.html">Appartements & Villa</a></li>
							<li><a href="tours.html"  >Voyages & Hôtels</a></li>
							<li><a href="contact.php"  class="active" >Contact</a></li>
						</ul>
					</nav>		
				</div>				
			</div>
		</div>	  	
	</div>

	<!-- Banner -->
	<section class="tm-banner">
		<!-- Flexslider -->
		<div class="flexslider flexslider-banner">
		  <ul class="slides">
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Your <span class="tm-yellow-text">Special</span> Tour</h1>
					<p class="tm-banner-subtitle">For Upcoming Holidays</p>
					<a href="#contactez" class="tm-banner-link">Contactez nous</a>	
				</div>
				<img src="img/banner-3.jpg" alt="Banner 3" />	
		    </li>		    
		  </ul>
		</div>	
	</section>

	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
		<div class="row">
			<!-- slider -->
			<div class="flexslider effect2 effect2-contact tm-contact-box-1">
				<ul class="slides">
					<li>
						<img src="img/world-map.png" alt="image" class="contact-image" />
						<div class="contact-text">
							<h2 class="slider-title">Notre contact :</h2>
							<h3 class="slider-subtitle">Pays: Maroc<br>
											Ville: Marrakech<br>
											Téléphone: 00212 (6) 61 84 32 91<br>
											Email: <a href="mailto:" >contact@meshotels.ma</a></h3>
							<p class="slider-description"></p>
							<div class="slider-social">
								<a href="#" class="tm-social-icon" target="_blank" ><i class="fa fa-twitter"></i></a>
								<a href="https://www.facebook.com/meshotels.ma" class="tm-social-icon" target="_blank" ><i class="fa fa-facebook"></i></a>
								<a href="#" class="tm-social-icon" target="_blank" ><i class="fa fa-pinterest"></i></a>
								<a href="#" class="tm-social-icon" target="_blank" ><i class="fa fa-google-plus"></i></a>
							</div>
						</div>			      
					</li>
				</ul>
			</div>
		</div>
	</section>		
	
	<!-- white bg -->
	<section class="section-padding-bottom" id="contactez" >
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Contactez Nous</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				<!-- contact form -->
				<?php
							
							if ( isset($_POST['submit']) and !empty($_POST['email']) and !empty($_POST['name']) and !empty($_POST['message']) and $tmp == 0 ) {
							$email = $_POST["email"];
							$tmp = 0 ;
							if ( isset($_POST['submit']) and !filter_var($email, FILTER_VALIDATE_EMAIL)) {
								?>
							<script type="text/javascript">
							alert("Invalid email format");
							$tmp++ ;
							</script>
								<?php
							}
							$sujet = 'Demande de contact';
							$message = "Bonjour,<br />
							<strong>Nouvelle demande de contact : </strong><br />"
							."Nom : ".$_POST['name']."<br />"
							."Email : ".$_POST['email']."<br />"
							."Message : ".htmlspecialchars(nl2br($_POST['message']));

							$destinataire = 'contact@meshotels.ma ';
							$headers = "From: \"meshotels.ma\"<contact@meshotels.ma >\n";
							$headers .= "Reply-To: contact@meshotels.ma  \n";
							$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";
									
							if(mail($destinataire,$sujet,$message,$headers) == true){
									echo "<h2>Votre demande a bien été envoyée, nous vous répondrons dans les plus brefs délais.</h2>";
								}
							   else
									 echo "<h2>Une erreur c'est produite lors de l'envois de l'email.</h2>";
									
							}else if( isset($_POST['submit']) and ( empty($_POST['email']) or empty($_POST['name']) or empty($_POST['message']) )){
							
									}
							?>
				<form action="#" method="post" class="tm-contact-form">
					<div class="col-lg-6 col-md-6">
						<div style="float : right !important ;">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3396.9843801602806!2d-8.012859385466019!3d31.63427804867492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafee8e8eb9f237%3A0x7b2ace3a4e3022f1!2s10+Rue+Sourya%2C+Marrakech%2C+Maroc!5e0!3m2!1sfr!2s!4v1466515447184" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
						<div class="contact-social">
							<a href="https://www.facebook.com/meshotels.ma/" class="tm-social-icon tm-social-facebook"><i class="fa fa-facebook"></i></a>
				      		<a href="#" class="tm-social-icon tm-social-dribbble"><i class="fa fa-dribbble"></i></a>
				      		<a href="#" class="tm-social-icon tm-social-twitter"><i class="fa fa-twitter"></i></a>
				      		<a href="#" class="tm-social-icon tm-social-instagram"><i class="fa fa-instagram"></i></a>
				      		<a href="#" class="tm-social-icon tm-social-google-plus"><i class="fa fa-google-plus"></i></a>
						</div>
					</div> 
					<div class="col-lg-6 col-md-6 tm-contact-form-input">
						<div class="form-group">
							<input name="name" required type="text" id="contact_name" class="form-control" placeholder="NAME" />
						</div>
						<div class="form-group">
							<input name="email" required type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
						</div>
						
						<div class="form-group">
							<textarea name="message" required id="contact_message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
						</div>
						<div class="form-group">
							<button class="tm-submit-btn" type="submit" name="submit">Envoyer</button> 
						</div>               
					</div>
				</form>
			</div>			
		</div>
	</section>
	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Copyright &copy; 2016 Marrakech, Maroc 
                
                Conçu par <a rel="nofollow" href="http://www.504Com.com" title="Agence de communication web Maroc, création site web Marrakech" target="_parent">504 Communication</a></p>
			</div>
		</div>		
	</footer>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>			<!-- flexslider js -->
	<script type="text/javascript" src="js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
	<script>
		/* Google map------------------------------------------------*/
      	var map = '';
      	var center;

      	function initialize() {
	        var mapOptions = {
	          	zoom: 14,
	          	center: new google.maps.LatLng(37.769725, -122.462154),
	          	scrollwheel: false
        	};
        
	        map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

	        google.maps.event.addDomListener(map, 'idle', function() {
	          calculateCenter();
	        });
        
	        google.maps.event.addDomListener(window, 'resize', function() {
	          map.setCenter(center);
	        });
      	}

	    function calculateCenter() {
	        center = map.getCenter();
	    }

	    function loadGoogleMap(){
	        var script = document.createElement('script');
	        script.type = 'text/javascript';
	        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
	        document.body.appendChild(script);
	    }
	
      	// DOM is ready
		$(function() {

			// https://css-tricks.com/snippets/jquery/smooth-scrolling/
			$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top
						}, 1000);
						return false;
					}
				}
			});

		  	// Flexslider
		  	$('.flexslider').flexslider({
		  		controlNav: false,
		  		directionNav: false
		  	});

		  	// Google Map
		  	loadGoogleMap();
		  });
	</script>
</body>
</html>
