<!doctype html>
<html lang="en">
<head>
	<!-- Define Charset -->
	<meta charset="UTF-8">

	<!-- Page Title -->
	<title>Futboleros</title>

	<!-- Responsive Metatag --> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
       <link rel="shortcut icon" href="images/favicon.png">   
	<!-- Stylesheet
	===================================================================================================  -->
	<link rel="stylesheet" href="font/fontello.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media-queries.css">
	<!-- Loader helper -->
	<style id="loader_helper" type="text/css">
		.tp-simpleresponsive >ul >li{visibility: hidden !important;}
	</style>
</head>
@include('alerts.message')

<body>

	<div id="loader">

		<!-- Topbar -->
		<section class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 social-media">
						
					</div>
					<div class="col-sm-6 data-info">
						<p><i class="icon-mobile"></i> Soporte Tecnico 099 6264752</p>
					</div>
				</div>
			</div>
		</section>
		<!-- end Topbar -->
	 	
	 	<!-- Fixed navbar -->



		
		<!-- Slider -->
		<section class="slider" id="menu-slider">
			<div class="container">
				<div class="row">
					@yield('content')
				</div>
			</div>
		</section>
		<!-- end Slider -->

		
		<!-- Features -->
		<

		<!-- end Classes -->


		<!-- Upcoming Classes -->
		
		<!-- end Upcoming Classes -->


		<!-- Teachers -->
		

		
		<!-- Call to action -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<h6 class="footer_left">Backend</h6>
						<ul class="footer_center">
							
						</ul>
					</div>
					<div class="col-sm-8">
						<h6 class="footer_right">©Wp.</h6>
					</div>
				</div>
			</div>
		</footer>

		<a href="#" class="scrollup"><i class="icon-up-open"></i></a>      

	</div>
	<!-- end Loader -->


	<div id='siteLoader'> 
		<img src="img/loader.gif" class="loader" alt="loader"/> 
    </div> 

  <!-- ======================= JQuery libs =========================== -->
    <!-- jQuery -->
    <script src="js/jquery-1.9.1.min.js"></script>

    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!--Scroll To-->         
    <script src="js/nav/jquery.scrollTo.js"></script> 
    <script src="js/nav/jquery.nav.js"></script> 

	<!-- Responsive Video -->
    <script src="js/jquery.fitvids.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
	<!-- Custom -->
    <script src="js/script-crear.js"></script>

  <!-- ======================= End JQuery libs ======================= -->

</body>
</html>