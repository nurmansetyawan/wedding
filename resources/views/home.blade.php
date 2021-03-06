
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Fachry and Rizuki Wedding</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="pivot/css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="pivot/css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="pivot/css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="pivot/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="pivot/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="pivot/css/theme.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="pivot/css/additional.css" rel="stylesheet" type="text/css" media="all"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="pivot/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
    	<!--
    	<div class="loader">
    		<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
    	</div>
		-->
		<div class="nav-container">

			<nav class="top-bar overlay-bar offscreen-menu">
				<div class="container">

					<div class="row nav-menu clearfix">

						<div class="col-sm-2 col-xs-6">
							<a>
								<!-- buat logo kiri atas-->
								<img class="logo logo-light" alt="Logo" src="pivot/img/F & R Wedding (grey).png">
								<img class="logo logo-dark" alt="Logo" src="pivot/img/F & R Wedding (black).png">
							</a>
						</div>

						<div class="col-sm-2 col-xs-6 text-right pull-right">
							<div class="offscreen-toggle">
								<i class="icon icon_menu text-white"></i>
							</div>
						</div>
					</div><!--end of row-->

					<div class="row">
						<div class="col-sm-12">
							<hr class="no-margin">
						</div>
					</div><!--end of row-->

				</div><!--end of container-->

				<div class="offscreen-container">
					<img alt="logo" class="logo" src="pivot/img/logo-light.png">
					<ul class="menu">
            <li><a href="#home" class="inner-link" target="default">Home</a></li>
            <li><a href="#services" class="inner-link" target="default">Services</a></li>
            <li><a href="#about" class="inner-link" target="default">About</a></li>
            <li><a href="#work" class="inner-link" target="default">Portfolio</a></li>
            <li><a href="#testimonials" class="inner-link" target="default">testimonials</a></li>
            <li><a href="#contact" class="inner-link" target="default">contact</a></li>
            @if (Auth::guest())
              <li><a href="{{ route('login') }}">Login</a></li>
            @else
              <li>
                  <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Logout
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </li>
            @endif
          </ul>
					<ul class="social-icons">
						<li>
							<a href="#">
								<i class="icon social_twitter"></i>
							</a>
						</li>

						<li>
							<a href="#">
								<i class="icon social_facebook"></i>
							</a>
						</li>

						<li>
							<a href="#">
								<i class="icon social_instagram"></i>
							</a>
						</li>
					</ul>
				</div>
			</nav>


		</div>


		<div class="main-container"><a id="home" class="in-page-link"></a>
			<header class="fullscreen-element no-pad centered-text">
				<div class="background-image-holder parallax-background overlay">
					<img class="background-image" alt="Background Image" src="pivot/img/floral-wallpaper-with-black-background-6-high-resolution-wallpaper.jpeg">
				</div>

				<div class="container align-vertical">
					<div class="row">
						<div class="col-md-12 text-center">
              <!-- NAMA USER -->
							<!-- <span class="text-white alt-font">Hi</span> -->
							<!-- <img src="pivot/img/hogwarts_logo_by_shadopro-d5najhh.png" alt="" style="width:20%; height:20%"> -->
							<h1 class="text-new1">{{ Auth::user()->name }}</h1>
							<p class="lead text-new1">We are pleased to inform you that you have been invited to the wedding of</p>
							<p class="lead1 text-new2">Rizki Siti Fatimah S.Sos <br> &amp; <br> Muhammad Fachry S.Kom</p>
							<p class="lead text-new1">18 - 08 - 2018 (Marriage Statement 14:00 &amp; Receiption 19:00)</p>
							<a href="#end" class="btn1 btn-new1 btn-new2 inner-link" target="default">The Place Map</a>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</header>

			<a id="services" class="in-page-link"></a>
			<section class="pure-text-centered">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
							<span class="sub alt-font">####</span>
							<h1><strong>Love Quote</strong></h1>
							<p class="lead text-new1" >
								What greater thing is there for two human souls, than to feel that they are joined for life–to strength each other in all labor, to rest on each other in all sorrow, to minister to each other in silent unspeakable memories at the moment of the last parting?
								<br>
								-- George Eliot --
							</p>
						</div>
					</div><!--end of row-->

				</div><!--end of container-->
			</section>

			<section class="duplicatable-content">

				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1>Our Love Journey<br>Always start with "beginning"</h1>
						</div>
					</div><!--end of row-->

					<div class="row">
						<div class="col-sm-6">
							<div class="feature feature-icon-large">
								<div class="col-sm-12">
									<div class="pull-left col-sm-5">
										<img src="pivot/img/Cool-256.png" alt="">
									</div>
									<div class="pull-right col-sm-7">
										<h5>First Sight</h5>
										<p>
											Comic cafe at tebet we met for the first time , with charming story from each of us
										</p>
									</div>
								</div>
							</div>
						</div><!--end 6 col-->

						<div class="col-sm-6">
							<div class="feature feature-icon-large">
								<div class="pull-left">
									<i class="icon icon-happy"></i>
								</div>
								<div class="pull-right">
									<h5>Match</h5>
									<p>
										continue with sharing our momment and story of our live
									</p>
								</div>
							</div>
						</div><!--end 6 col-->

						<div class="col-sm-6">
							<div class="feature feature-icon-large">
								<div class="pull-left">
									<i class="icon icon-heart"></i>
								</div>
								<div class="pull-right">
									<h5>Love makes all thing grow</h5>
									<p>
										Spending time together all day long, and Closed the day by saying promise at BCA Tower Rooftop
									</p>
								</div>
							</div>
						</div><!--end 6 col-->

						<div class="col-sm-6">
							<div class="feature feature-icon-large">
								<div class="pull-left">

									<i class="icon icon-lock"></i>

									<i class="icon icon-chat"></i>

								</div>
								<div class="pull-right">
									<h5>Keep The Promise</h5>
									<p>
										Until the day our family meet at sederhana restaurant juanda
									</p>
								</div>
							</div>
						</div><!--end 6 col-->

					</div><!--end of row-->
				</div>

			</section>

			<header class="page-header">
				<div class="background-image-holder parallax-background">
					<img class="background-image" alt="Background Image" src="pivot/img/floral-wallpaper-with-black-background-6-high-resolution-wallpaper.jpeg">
				</div>

				<div class="container">
					<div class="row">
						<div class="text-center col-sm-11">
							<span class="text-new1 alt-font">Mahatma Gandhi</span>
							<h1 class="text-new1">
							“Where there is love there is life.”
							</h1>

						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</header>

			<a id="about" class="in-page-link"></a>
			<section class="team-1">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h1>The Parent</h1>
							<p class="lead">
								We Request the honour of your presence at the marrige of our daughter and son
							</p>
						</div>
					</div><!--end of row-->

					<div class="row">
						<div class="col-sm-4 col-md-3">
							<div class="team-1-member">
								<img alt="Team Member" class="background-image" src="pivot/img/KB.png ">
								<h5>Hendrian Asmarawan</h5>
								<span>Rizuki's Father</span><br>
								<ul class="social-icons">
									<li>
										<a href="#">
											<i class="icon social_twitter"></i>
										</a>
									</li>

									<li>
										<a href="#">
											<i class="icon social_facebook"></i>
										</a>
									</li>

									<li>
										<a href="#">
											<i class="icon social_dribbble"></i>
										</a>
									</li>
								</ul>
							</div><!--end of team member-->
						</div>

						<div class="col-sm-4 col-md-3">
							<div class="team-1-member">
								<img alt="Team Member" class="background-image" src="pivot/img/OW.png ">
								<h5>Nia Kurnia</h5>
								<span>Rizuki's Mother</span><br>
								<ul class="social-icons">
									<li>
										<a href="#">
											<i class="icon social_twitter"></i>
										</a>
									</li>

									<li>
										<a href="#">
											<i class="icon social_facebook"></i>
										</a>
									</li>

									<li>
										<a href="#">
											<i class="icon social_tumblr"></i>
										</a>
									</li>
								</ul>
							</div><!--end of team member-->
						</div>



						<div class="col-sm-4 col-md-3">
							<div class="team-1-member">
								<img alt="Team Member" class="background-image" src="pivot/img/DB.png ">
								<h5>Ujang Abdullah</h5>
								<span>Fachry's Father</span><br>
								<ul class="social-icons">
									<li>
										<a href="#">
											<i class="icon social_twitter"></i>
										</a>
									</li>

									<li>
										<a href="#">
											<i class="icon social_pinterest"></i>
										</a>
									</li>

									<li>
										<a href="#">
											<i class="icon social_instagram"></i>
										</a>
									</li>
								</ul>
							</div><!--end of team member-->
						</div>

						<div class="col-sm-4 col-md-3">
							<div class="team-1-member">
								<img alt="Team Member" class="background-image" src="pivot/img/OW.png ">
								<h5>Enny Sulistyorini</h5>
								<span>Fachry's Mother</span><br>
								<ul class="social-icons">
									<li>
										<a href="#">
											<i class="icon social_googleplus"></i>
										</a>
									</li>

									<li>
										<a href="#">
											<i class="icon social_spotify"></i>
										</a>
									</li>

									<li>
										<a href="#">
											<i class="icon social_linkedin"></i>
										</a>
									</li>
								</ul>
							</div><!--end of team member-->
						</div>


					</div><!--end of row-->

				</div><!--end of container-->
			</section>

			<section class="video-inline">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<h1 class="space-bottom-medium">Pivot is an effortlessly simple startup template with usable features.</h1>
							<p class="lead space-bottom-medium">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
							</p>
							<a href="#" class="btn btn-primary">See Features</a>
							<a href="#" class="btn btn-primary btn-text-only">Learn More</a>
						</div>

						<div class="col-md-6 col-sm-12">
							<div class="inline-video-wrapper">
								<video controls="">
									<source src="pivot/video/video.webm" type="video/webm">
									<source src="pivot/video/video.mp4" type="video/mp4">
									<source src="pivot/video/video.ogv" type="video/ogg">
								</video>
							</div>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>

			<a id="work" class="in-page-link"></a>
			<section class="no-pad-bottom projects-gallery">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
							<h1>Gallery</h1>
							<p class="lead">
								With You, I am Home
							</p>
						</div>
					</div><!--end of row-->

				</div><!--end of container-->

				<div class="projects-wrapper clearfix">
					<div class="container">
						<!--end of row-->
					</div><!--end of container-->

					<div class="container">
						<div class="projects-container column-projects">

							<div class="col-md-4 col-sm-6 project development image-holder">
								<div class="background-image-holder">
									<img class="background-image" alt="Background Image" src="pivot/img/project1.jpg">
								</div>
								<div class="hover-state">
									<div class="align-vertical">
										<h3 class="text-white"><strong>alamat weddingnya</strong> UX</h3>
										<a href="https://www.google.com/maps/search/?api=1&query=760+West+Genesee+Street+Syracuse+NY+13204" class="btn btn-primary btn-white">See Project</a>
									</div>
								</div>
							</div><!--end of individual project-->

							<div class="col-md-4 col-sm-6 project branding image-holder">
								<div class="background-image-holder">
									<img class="background-image" alt="Background Image" src="pivot/img/project2.jpg">
								</div>
								<div class="hover-state">
									<div class="align-vertical">
										<h3 class="text-white"><strong>Medium</strong> Blog Platform</h3>
										<a href="project-single.html" class="btn btn-primary btn-white">See Project</a>
									</div>
								</div>
							</div><!--end of individual project-->

							<div class="col-md-4 col-sm-6 project print image-holder">
								<div class="background-image-holder">
									<img class="background-image" alt="Background Image" src="pivot/img/project3.jpg">
								</div>
								<div class="hover-state">
									<div class="align-vertical">
										<h3 class="text-white"><strong>Identity</strong> Mockup</h3>
										<a href="project-single.html" class="btn btn-primary btn-white">See Project</a>
									</div>
								</div>
							</div><!--end of individual project-->

							<div class="col-md-4 col-sm-6 project print image-holder">
								<div class="background-image-holder">
									<img class="background-image" alt="Background Image" src="pivot/img/project4.jpg">
								</div>
								<div class="hover-state">
									<div class="align-vertical">
										<h3 class="text-white"><strong>Aurora</strong> App Icons</h3>
										<a href="project-single.html" class="btn btn-primary btn-white">See Project</a>
									</div>
								</div>
							</div><!--end of individual project-->

							<div class="col-md-4 col-sm-6 project branding image-holder">
								<div class="background-image-holder">
									<img class="background-image" alt="Background Image" src="pivot/img/project5.jpg">
								</div>
								<div class="hover-state">
									<div class="align-vertical">
										<h3 class="text-white"><strong>Sketchbook</strong> Logo Mockup</h3>
										<a href="project-single.html" class="btn btn-primary btn-white">See Project</a>
									</div>
								</div>
							</div><!--end of individual project-->

							<div class="col-md-4 col-sm-6 project development image-holder">
								<div class="background-image-holder">
									<img class="background-image" alt="Background Image" src="pivot/img/project6.jpg">
								</div>
								<div class="hover-state">
									<div class="align-vertical">
										<h3 class="text-white"><strong>Muzik</strong> Home Screen</h3>
										<a href="project-single.html" class="btn btn-primary btn-white">See Project</a>
									</div>
								</div>
							</div><!--end of individual project-->



						</div><!--end of projects-container-->
					</div><!--end of container-->

				</div><!--end of projects wrapper-->

			</section>

			<section class="clients">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<p class="lead">Some awesome companies we've had the pleasure to work with</p>
						</div>
					</div><!--end of row-->

					<div class="row client-row">
						<div class="row-wrapper">
							<div class="col-sm-3 text-center">
								<img alt="client" src="pivot/img/client4.png">
							</div>

							<div class="col-sm-3 text-center">
								<img alt="client" src="pivot/img/client2.png">
							</div>

							<div class="col-sm-3 text-center">
								<img alt="client" src="pivot/img/client3.png">
							</div>

							<div class="col-sm-3 text-center">
								<img alt="client" src="pivot/img/client1.png">
							</div>
						</div>
					</div><!--end of row-->

					<div class="row client-row">
						<div class="row-wrapper">
							<div class="col-sm-3 text-center">
								<img alt="client" src="pivot/img/client5.png">
							</div>

							<div class="col-sm-3 text-center">
								<img alt="client" src="pivot/img/client6.png">
							</div>

							<div class="col-sm-3 text-center">
								<img alt="client" src="pivot/img/client7.png">
							</div>

							<div class="col-sm-3 text-center">
								<img alt="client" src="pivot/img/client8.png">
							</div>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>

			<a id="testimonials" class="in-page-link"></a>
			<section class="bg-primary">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="testimonials-slider text-center">
								<ul class="slides">
									<li>
										<p class="text-white lead">Pivot is hands down the most flexible and enjoyable HTML template I've ever used. I was a startup framework die-hard but now my eyes have been opened to the sheer power of Variant page builder, I won't be going back!</p>
										<span class="author text-white">Louise Duke - Mother Goose</span>
									</li>

									<li>
										<p class="text-white lead">I was getting fed up with the hassle of setting up bloated WordPress themes. Luckily I've now found Pivot with Variant. Building pages in real-time without a CMS gives me all the power and flexibility I could want.</p>
										<span class="author text-white">Elizabeth Atkinson - Shapewear Australia</span>
									</li>

									<li>
										<p class="text-white lead">The plethora of content blocks available in Pivot has made it my go-to template of choice. I've already used it for a number of clients - all of which have been thrilled with the outcome. Well done Medium Rare!</p>
										<span class="author text-white">Toby Whittaker - Design Dojo</span>
									</li>
								</ul>
							</div>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>

			<section class="instagram-feed">
				<div class="container">
					<div class="row text-center">
						<div><span class="alt-font">Insta <i class="icon social_instagram"></i> Gram</span></div>
					</div><!--end of row-->
				</div><!--end of container-->

				<div class="instafeed" data-user-name="dana_tanamachi">
					<ul></ul>
				</div>
			</section>

			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
							<i class="icon icon-jumbo social_twitter"></i>
							<div id="tweets" data-widget-id="492085717044981760">

							</div>
							<p>
								Follow us <strong><a href="#">@mrareweb</a></strong> for more awesome updates
							</p>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>

			<a id="contact" class="in-page-link"></a>
			<section class="social-bar no-pad">
				<div class="col-md-3 col-sm-6 no-pad">
					<a href="#">
						<div class="link bg-twitter">
							<div class="initial">
								<i class="icon social_twitter"></i>
							</div>

							<div class="hover-state">
								<span class="text-white">Follow On Twitter</span>
							</div>
						</div>
					</a>
				</div><!--end of individual link-->

				<div class="col-md-3 col-sm-6 no-pad">
					<a href="#">
						<div class="link bg-facebook">
							<div class="initial">
								<i class="icon social_facebook"></i>
							</div>

							<div class="hover-state">
								<span class="text-white">Friends on Facebook</span>
							</div>
						</div>
					</a>
				</div><!--end of individual link-->

				<div class="col-md-3 col-sm-6 no-pad">
					<a href="#">
						<div class="link bg-dribbble">
							<div class="initial">
								<i class="icon social_dribbble"></i>
							</div>

							<div class="hover-state">
								<span class="text-white">Shots on Dribbble</span>
							</div>
						</div>
					</a>
				</div><!--end of individual link-->

				<div class="col-md-3 col-sm-6 no-pad">
					<a href="#">
						<div class="link bg-tumblr">
							<div class="initial">
								<i class="icon social_tumblr"></i>
							</div>

							<div class="hover-state">
								<span class="text-white">Thoughts on Tumblr</span>
							</div>
						</div>
					</a>
				</div><!--end of individual link-->
			</section>
		</div>
		<div class="footer-container">


			<footer class="social bg-secondary-1">

				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.66196699162!2d106.83820135004382!3d-6.175987762215856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f43551ca9263%3A0x4949ba549b582667!2sLumire+Hotel+%26+Convention+Center!5e0!3m2!1sen!2sid!4v1532107144466" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
						</div>
					</div><!--end of row-->
				</div><!--end of container-->

				<a id="end" class="in-page-link"></a>

				</div>

			</footer>
		</div>



		    <script src="pivot/js/jquery.min.js"></script>
        <script src="pivot/js/jquery.plugin.min.js"></script>
        <script src="pivot/js/bootstrap.min.js"></script>
        <script src="pivot/js/jquery.flexslider-min.js"></script>
        <script src="pivot/js/smooth-scroll.min.js"></script>
        <script src="pivot/js/skrollr.min.js"></script>
        <script src="pivot/js/spectragram.min.js"></script>
        <script src="pivot/js/scrollReveal.min.js"></script>
        <script src="pivot/js/isotope.min.js"></script>
        <script src="pivot/js/twitterFetcher_v10_min.js"></script>
        <script src="pivot/js/lightbox.min.js"></script>
        <script src="pivot/js/jquery.countdown.min.js"></script>
        <script src="pivot/js/scripts.js"></script>
    </body>
</html>
