 <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<!-- Basic Page Needs
	================================================== -->
		<meta charset="utf-8">
		<title>Cypras-One page html5 template</title>
		<meta name="description" content="">
		<!-- Mobile Specific Metas
	================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		 <!-- CSS
		 ================================================== -->
		<!-- Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<!-- FontAwesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css"/>
		<!-- Animation -->
		<link rel="stylesheet" href="css/animate.css" />
		<!-- Owl Carousel -->
		<link rel="stylesheet" href="css/owl.carousel.css"/>
		<link rel="stylesheet" href="css/owl.theme.css"/>
		<!-- Pretty Photo -->
		<link rel="stylesheet" href="css/prettyPhoto.css"/>
		<!-- Main color style -->
		<link rel="stylesheet" href="css/red.css"/>
		<!-- Template styles-->
		<link rel="stylesheet" href="css/custom.css" />
		<!-- Responsive -->
		<link rel="stylesheet" href="css/responsive.css" />
		<link rel="stylesheet" href="css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
		<style type="text/css">
			body{background-color: #e5e5e5;}
		</style>
	</head>

 <body data-spy="scroll" data-target=".navbar-fixed-top">
		<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

	<header id="section_header" class="navbar-fixed-top main-nav" role="banner">
		<div class="container">
			<!-- <div class="row"> -->
				 <div class="navbar-header ">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">
							<img src="images/logo2.png" alt="">
						</a>
				 </div><!--Navbar header End-->
					<nav class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
						<ul class="nav navbar-nav navbar-right ">
							<li><a href="./" class="page-scroll">หน้าหลัก </a></li>
							<li><a href="./allevent.php"  class="page-scroll">อีเว้นท์ทั้งหมด</a> </li>
							<li class="active"><a href="./myracehistory.php" class="page-scroll">รายการแข่งที่สมัคร</a> </li>
							<li><a href="./login.php" class="page-scroll">ออกจากระบบ</a> </li>
						</ul>
					 </nav>
				</div><!-- /.container-fluid -->
</header>
<!-- Event Title Start -->
<section id="event-title" style="padding-top:100px;padding-bottom:14px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="feature_header">
					<div class="row">
						<div class="col-md-7">
							<h3 class="feature_title" style="margin:0;width:100%"><b>รายการแข่งที่สมัคร</b></h3>
						</div>
						<div class="col-md-5">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="ใส่คำค้น">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button">ค้นหา</button>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>  <!-- Col-md-12 End -->
		</div>	
	</div>
</section>
<!-- Event Title end -->

<section id="event-detail">
<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-warning">
				<div class="panel-heading">รายการใบสมัคร</div>
				<div class="panel-body" style="padding-bottom: 0px;padding-left: 0px;padding-right: 0px;padding-top: 0px;">
					<table class="table">
						<tr>
							<th>หมายเลขใบสมัคร</th>
							<th>ชื่องาน</th>
							<th>สถานะ</th>
							<th></th>
						</tr>
						<tr>
							<td><a href="./result-notpaid.php">11234</a></td>
							<td><a href="./event.php">LADKRABANG RUNNING 2016</a></td>
							<td><span class="label label-danger">ยังไม่ได้ชำระเงิน</span></td>
							<td>
								<a href="./result-notpaid.php" class="btn btn-default"><i class="fa fa-desktop"></i> เปิด</a>
								<a href="./informtransfer.php" class="btn btn-default"><i class="fa fa-money"></i> แจ้งโอนเงิน</a>
							</td>
						</tr>
						<tr>
							<td><a href="./result-paid.php">10562</a></td>
							<td><a href="./event.php">Phuket Marathon</a></td>
							<td><span class="label label-success">ชำระเงินแล้ว</span></td>
							<td>
								<a href="./result-paid.php" class="btn btn-default"><i class="fa fa-desktop"></i> เปิด</a>
							</td>
						</tr>
						<tr>
							<td><a href="./result-paid.php">9643</a></td>
							<td><a href="./event.php">Laguna Phuket International Marathon 2016</a></td>
							<td><span class="label label-success">ชำระเงินแล้ว</span></td>
							<td>
								<a href="./result-paid.php" class="btn btn-default"><i class="fa fa-desktop"></i> เปิด</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row pagination">
		<div class="col-xs-5">
			<a href="#" class="btn btn-lg btn-default pull-right"><i class="fa fa-chevron-left"></i> ก่อนหน้า</a>
		</div>
		<div class="col-xs-2">
			<div class="input-group">
				<input type="number" class="form-control" placeholder="Jump to" min="1">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button">ไป !</button>
				</span>
			</div><!-- /input-group -->
		</div>
		<div class="col-xs-5">
			<a href="#" class="btn btn-lg btn-default pull-left">ถัดไป <i class="fa fa-chevron-right"></i></a>
		</div>			
	</div>
</div>
</section>
<!-- Event Detail end -->

<!-- Footer Area Start -->
<section id="footer">
	<div class="footer_top">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<h3 class="menu_head">Main Menu</h3>
					<div class="footer_menu">
						<ul>
							<li><a href="#about">Home</a></li>
							<li><a href="#service">Service</a></li>
							<li><a href="#portfolio">Portfolio</a></li>
							<li><a href="#blog">Blog</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<h3 class="menu_head">Useful Links</h3>
					<div class="footer_menu">
						<ul>
							<li><a href="#">Terms of use</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#"> inventore natus ullam eum</a></li>
							<li><a href="#">consectetur adipisicing elit.</a></li>
							<li><a href="#">Frequently Asked Questions</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<h3 class="menu_head">Contact us</h3>
					<div class="footer_menu_contact">
						<ul>
							<li> <i class="fa fa-home"></i>
								<span> 12 Segun Bagicha, 10th Floor </span></li>
							<li><i class="fa fa-globe"></i>
								<span> +880-12345678</span></li>
							<li><i class="fa fa-phone"></i>
								<span> info@mail.com</span></li>
							<li><i class="fa fa-map-marker"></i>
							<span> www.web.com</span></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
					<h3 class="menu_head">Tags</h3>
					<div class="footer_menu tags">
						<a href="#"> Design</a>
						<a href="#"> User Interface</a>
						<a href="#"> Graphics</a>
						<a href="#"> Web Design</a>
						<a href="#"> Development</a>
						<a href="#"> Asp.net</a>
						<a href="#"> Bootstrap</a>
						<a href="#"> Joomla</a>
						<a href="#"> SEO</a>
						<a href="#"> Wordepress</a>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="footer_b">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="footer_bottom">
						<p class="text-block"> &copy; Copyright reserved to <span>Cyprass </span></p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="footer_mid pull-right">
						<ul class="social-contact list-inline">
							<li> <a href="#"><i class="fa fa-facebook"></i></a></li>
							<li> <a href="#"><i class="fa fa-twitter"></i></a></li>
							<li> <a href="#"><i class="fa fa-rss"></i></a></li>
							<li> <a href="#"><i class="fa fa-google-plus"></i> </a></li>
							<li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"> <i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- Footer Area End -->

<!-- Back To Top Button -->
	<div id="back-top">
		<a href="#slider_part" class="scroll" data-scroll>
			<button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-up"></i></button>
		</a>
	</div>
	<!-- End Back To Top Button -->



<!-- Javascript Files
	================================================== -->
	<!-- initialize jQuery Library -->

		<!-- initialize jQuery Library -->
		<!-- Main jquery -->
			<script type="text/javascript" src="js/jquery.js"></script>
		<!-- Bootstrap jQuery -->
		 <script src="js/bootstrap.min.js"></script>
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Isotope -->
		<script src="js/isotope.min.js"></script>

		<script src="js/imagesloaded.min.js"></script>
		<!-- Pretty Photo -->
			<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
		<!-- SmoothScroll -->
		<script type="text/javascript" src="js/smooth-scroll.js"></script>
		<!-- Image Fancybox -->
		<script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.5"></script>
		<!-- Counter  -->
		<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
		<!-- waypoints -->
		<script type="text/javascript" src="js/waypoints.min.js"></script>
		<!-- Bx slider -->
		<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
		<!-- Scroll to top -->
		<script type="text/javascript" src="js/jquery.scrollTo.js"></script>
		<!-- Easing js -->
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		 <!-- PrettyPhoto -->
		<script src="js/jquery.singlePageNav.js"></script>
		<!-- Wow Animation -->
		<script type="js/javascript" src="js/wow.min.js"></script>
		<!-- Google Map  Source -->
		<script type="text/javascript" src="js/gmaps.js"></script>
			 <!-- Custom js -->
		<script src="js/custom.js"></script>
		 <script>
		// Google Map - with support of gmaps.js
	 var map;
		map = new GMaps({
		  div: '#map',
		  lat: 23.709921,
		  lng: 90.407143,
		  scrollwheel: false,
		  panControl: false,
		  zoomControl: false,
		});

		map.addMarker({
		  lat: 23.709921,
		  lng: 90.407143,
		  title: 'Smilebuddy',
		  infoWindow: { 
			content: '<p> Smilebuddy, Dhanmondhi 27</p>'
		  },
		  icon: "images/map1.png"
		});
		</script>
 
	</body>
</html>
