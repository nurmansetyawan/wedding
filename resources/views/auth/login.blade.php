
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Pivot | Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="pivot/css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="pivot/css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="pivot/css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="pivot/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="pivot/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="pivot/css/theme.css" rel="stylesheet" type="text/css" media="all"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="pivot/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
    	<div class="loader">
    		<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
    	</div>
		<div class="main-container">
			<section class="no-pad login-page fullscreen-element">

				<div class="background-image-holder">
					<img class="background-image" alt="Poster Image For Mobiles" src="pivot/img/hero6.jpg">
				</div>

				<div class="container align-vertical">
					<div class="row">
						<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
							<h1 class="text-white">Login to continue</h1>
							<div class="photo-form-wrapper clearfix">

                <!-- FORM CONTENT -->
								<form class="form-horizontal" method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									         <input id="email" class="form-email" type="text" placeholder="Email Address" name="email" required autofocus>
                           @if ($errors->has('email'))
                               <span class="help-block">
                                   <strong>{{ $errors->first('email') }}</strong>
                               </span>
                           @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <input id="password" class="form-password" type="password" placeholder="Password" name="password" required>
                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="form-group">
									       <input class="login-btn btn-filled" type="submit" value="Login">
                    </div>

								</form>

							</div><!--end of photo form wrapper-->
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>
		</div>
		<div class="footer-container"></div>

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
