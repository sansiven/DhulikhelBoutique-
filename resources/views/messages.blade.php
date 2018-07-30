<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Dhulikhel Boutique</title>
<link rel="icon" href="img/new%20logo.png" type="image/png">
<link rel="shortcut icon" href="img/new%20logo.png" type="img/x-icon">

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script src="contactform/contactform.js"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

</head>
<body>

	<nav class="main-nav-outer" id="test"><!--main-nav-start-->
		<div class="container">
		   <div class="header--logo">
				<a href="#header"><img src="img/new%20logo.png" alt="dhulikhel"></a>
			</div>
			<ul class="main-nav fl-rt">
				<li><a href="./index.html">Home</a></li>
			   <li><a href="./index.html">About</a></li>
				<li><a href="./index.html">Services</a></li>
				<li><a href="./index.html">Gallery</a></li>
				<!--<li class="small-logo"><a href="#header"><img src="img/new%20logo.png" alt=""></a></li>-->
				<li><a href="./index.html">Review</a></li>

				<li><a href="./index.html">Contact</a></li>
			</ul>
			<a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
		</div>
	</nav><!--main-nav-end-->
	
	<section class="business"><!--business-talking-start-->
		<div class="container">
			<h2 class="book">Let’s Book .</h2>
			<hr class="book-line">
		</div>
	</section><!--business-talking-end-->

	<div class="container">
		<section class="main-section contact" id="contact">
			@if(count($messages) > 0)
				@foreach($messages as $message)
					<ul class="list-group">
						<li class="list-group-item">
							Name: {{$message->name}}
						</li>
						<li class="list-group-item">
							Email: {{$message->email}}
						</li>
						<li class="list-group-item">
							Message: {{$message->message}}
						</li>
					</ul>
				@endforeach
			@endif
		</section>
	</div>
	
	<footer class="footer">
    <div class="container">
        <div class="footer-logo"><a href="#"><img src="img/new%20logo.png" alt=""></a></div>
        <p class="credits">Emathe Marg,Municipality Road,Dhulikhel 45200.</p>
        <span class="copyright">&copy; Dhulikhel Boutique Hotel. All Rights Reserved</span>
        <div class="credits">
            <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Knight
            -->
            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Website Developed </a> by <a href="https://bootstrapmade.com/">Kompany</a>
        </div>
    </div>
</footer>


	<script type="text/javascript">
		$(window).load(function(){

			$('.main-nav li a, .servicelink').bind('click',function(event){
				var $anchor = $(this);

				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top - 102
				}, 1500,'easeInOutExpo');
				/*
				if you don't want to use the easing effects:
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1000);
				*/
		  if ($(window).width() < 768 ) { 
			$('.main-nav').hide(); 
		  }
				event.preventDefault();
			});
		})
	</script>
	<script type="text/javascript">
		$(document).ready(function(e) {
			$('#test').scrollToFixed();
			$('.res-nav_click').click(function(){
				$('.main-nav').slideToggle();
				return false    

			});

		});
	</script>

	
	
	
</body>
</html>