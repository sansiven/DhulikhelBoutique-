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




</head>
<body>

	<nav class="main-nav-outer" id="test"><!--main-nav-start-->
		<div class="container">
		   <div class="header--logo">
				<a href="#header"><img src="img/new%20logo.png" alt="dhulikhel"></a>
			</div>
			<ul class="main-nav fl-rt">
				<li><a href={{URL::to('/')}}>Home</a></li>
			   <li><a href={{URL::to('/#about')}}>About</a></li>
				<li><a href={{URL::to('/#services')}}>Services</a></li>
				<li><a href={{URL::to('/#Portfolio')}}>Gallery</a></li>
				<!--<li class="small-logo"><a href="#header"><img src="img/new%20logo.png" alt=""></a></li>-->
				<li><a href={{URL::to('/#review')}}>Review</a></li>

				<li><a href={{URL::to('/#contact')}}>Contact</a></li>
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
			<div class="row">
				<div class="col-lg-8 col-sm-9 wow fadeInLeft">
					 <div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
						  <ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner">
							<div class="item active">
							  <img src="img/room3.jpg" alt="Los Angeles">
							  <div class="roomname">
							  	EMATHE
							  	<ol>Amenities
							  		<li>towel</li>
							  		<li>slippers</li>
							  		<li>TV</li>
							  		<li>Hot Water Jar</li>
							  	</ol>
							  </div>
							</div>

							<div class="item">
							  <img src="img/room1.jpg" alt="Chicago">
							</div>

							<div class="item">
							  <img src="img/room5.jpg" alt="New York">
							</div>
						  </div>

						  <!-- Left and right controls -->
						  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#myCarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						  </a>
						</div>

					</div>
					<div class="col-lg-4 col-sm-3 wow fadeInUp delay-05s">
						{!! Form::open(['url' => 'book/submit']) !!}
						<div class="form">
							
							 @if(count($errors) > 0) 
							@foreach($errors ->all() as $error)
								<div class="alert alert-danger">
									{{$error}}
								</div>
							@endforeach
						@endif
                        
                        @if(session('success'))
                        	<div class="alert alert-success">
                        		{{session('success')}}
                        	</div>
                        @endif

							<div id="sendmessage">Your message has been sent. Thank you!</div>
							<div id="errormessage"></div>
							<form action="" th:action="@{/book}" method="post" th:object=${booker} role="form" class="contactForm">
								
								<div class="form-group">
									{{Form::text('roomname', '', ['class' => 'form-control input-text','placeholder' => '--Roomname--'])}}
									<!--<input type="text" th:Field="*{roomname}" name="name" class="form-control input-text" id="name" placeholder="--RoomName--" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />-->
									<!--<select th:field="*{roomname}" class="form-control input-text">
										<option value="">-- Select Room -- </option>
										<option value="emathe">Emathe</option>
										<option value="rara">Rara</option>
										<option value="ecima">Ecima</option>
										<option value="phoksundo">Phoksundo</option>
										<option value="tilicho">Tilicho</option>
										<option value="bishnumati">Bishnumati</option>
										<option value="mahakali">Mahakali</option>
										<option value="indrawati">Indrawati</option>
									</select> -->
									<div class="validation"></div>
								</div>
								
								
								
								
								<div class="form-group">
									{{Form::text('fullname', '', ['class' => 'form-control input-text','placeholder' => 'Full Name'])}}
									<!--<input type="text" th:Field="*{firstname}" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
									<div class="validation"></div>-->
								</div>
																				
								<div class="form-group">
								{{Form::text('email', '', ['class' => 'form-control input-text','placeholder' => 'example@email.com'])}}
									<!--<input th:field="*{email}" type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
									<div class="validation"></div>-->
								</div>
								
								
								<div class="form-group">
								{{Form::text('phone', '', ['class' => 'form-control input-text','placeholder' => 'Phone'])}}
									<!--<input th:field="*{phone}" type="text" class="form-control input-text" name="phone" id="phone" placeholder="Phone" data-rule="minlen:10" data-msg="Please enter at least 10 numbers" />
									<div class="validation"></div>-->
								</div>
								
								
								<div class="form-group">
								{{Form::date('arrival', '', ['class' => 'form-control input-text','placeholder' => 'Arrival'])}}
									<!--<input type="text" class="form-control input-text" name="adate" placeholder="Arrival"/>

									<div class="validation"></div>-->
								</div>

								
								<div class="form-group">
								{{Form::date('departure', '', ['class' => 'form-control input-text','placeholder' => 'Departure'])}}
									<!--<input type="text" class="form-control input-text" name="adate" placeholder="Departure"/>
									<div class="validation"></div>-->
								</div>


							
								<div class="form-group">
								{{Form::text('message', '', ['class' => 'form-control input-text text-area','placeholder' => 'Your Message', 'rows' => '5'])}}
									<!--<textarea class="form-control input-text text-area" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
									<div class="validation"></div>-->
								</div>
					
								
								<div class="text-center">
									{{Form::submit('Confirm', ['class' => 'input-btn'])}}
									<!--<button type="submit" class="input-btn">Confirm!</button>-->
								</div>
							</form>
							{!! Form::close() !!}
						</div>	
					</div>
				</div>
		</section>
	</div>
	
	<footer class="footer">
    <div class="container">
        <div class="footer-logo"><a href="#"><img src="img/new%20logo.png" alt=""></a></div>
        <p class="credits">Emathe Marg,Municipality Road,Dhulikhel 45200.</p>
        <span class="copyright">&copy; Dhulikhel Boutique Hotel. All Rights Reserved</span>
        
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