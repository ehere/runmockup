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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
		<script type="text/javascript" src="js/jquery.js"></script>
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
							<li class="active"><a href="./register.php" class="page-scroll">สมัครสมาชิก</a> </li>
							<li><a href="./login.php" class="page-scroll">เข้าสู่ระบบ</a> </li>
						</ul>
					 </nav>
				</div><!-- /.container-fluid -->
</header>

<!-- Conatct Area Start-->

<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="feature_header text-center">
					<h3 class="feature_title">มาเป็น<b>ส่วนหนึ่ง</b>ของเรา</h3>
					<h4 class="feature_sub">สมัครสมาชิกกับเราเพื่อร่วมวิ่งกับงานที่หลากหลาย</h4>
					<div class="divider"></div>
				</div>
			</div>
		</div>
		<div class="row">
			 <div class="contact_full">
				<div class="col-md-12">
					<form action="role">
						<div class="row">
							<div class="col-md-6 left">
								<div class="form-level">
									<input name="name" placeholder="ชื่อ" id="firstname"  value="" type="text" class="input-block">
									<span class="form-icon fa fa-user"></span>
								</div>
							</div>
							<div class="col-md-6 right">
								<div class="form-level">
									<input name="name" placeholder="นามสกุล" id="lastname"  value="" type="text" class="input-block">
									<span class="form-icon fa fa-user"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<div class="form-level">
									<input name="name" placeholder="รหัสประจำตัวประชาชน" id="thaiid"  value="" type="text" class="input-block">
									<span class="form-icon fa fa-barcode"></span>
								</div>
							</div>
							<div class="col-md-1" style="text-align:center;margin-top: 1em;margin-bottom: 1em;">
								<b>OR</b>
							</div>
							<div class="col-md-5">
								<div class="form-level">
									<input name="name" placeholder="Passport ID" id="passportid"  value="" type="text" class="input-block">
									<span class="form-icon fa fa-plane"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 left">
								<div class="form-level">
									<input name="email" placeholder="อีเมล์" id="mail" class="input-block" value="" type="email">
									<span class="form-icon fa fa-envelope-o"></span>
								</div>
							</div>
							<div class="col-md-6 right">
								<div class="form-level">
									<input name="phone" placeholder="เบอร์โทรศัพท์" id="phone" class="input-block" value="" type="text">
									<span class="form-icon fa fa-phone"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-level">
									<select name="gender" id="gender" class="form-control" onchange="updateGenderIcon()">
										<option value="" disabled selected>เพศ</option>
										<option value="male">ชาย</option>
										<option value="female">หญิง</option>
									</select>
									<span id="gender-icon" class="form-icon fa fa-genderless"></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-level">
									<input name="birthday" placeholder="วันเกิด" id="birthday" class="input-block" type="text"  onclick="toTypeDate()" onblur="checkDateValue()">
									<span class="form-icon fa fa-birthday-cake"></span>
								</div>
								<script type="text/javascript">
								function checkDateValue(){
									jQuery(function($) { // DOM is now read and ready to be manipulated
										if(!$("#birthday").val()){
											$("#birthday").prop("type", "text");
											$('.fa-birthday-cake').removeClass('hidden');
										}
									});
								}
								function toTypeDate(){
									jQuery(function($) {
										$("#birthday").prop("type", "date");
										$('.fa-birthday-cake').addClass('hidden');
									});
								}
								function updateGenderIcon(){
									jQuery(function($) {
										var element = $('#gender-icon');
										element.removeClass('fa-genderless');
										if($('#gender').val() == 'male'){
											element.removeClass('fa-venus').addClass('fa-mars');
										} else {
											element.removeClass('fa-mars').addClass('fa-venus');
										}
									});
								}
								</script>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 left">
								<div class="form-level">
									<input name="password" placeholder="รหัสผ่าน" id="password" class="input-block" value="" type="password">
									<span class="form-icon fa fa-lock"></span>
								</div>
							</div>
							<div class="col-md-6 right">
								<div class="form-level">
									<input name="repassword" placeholder="ยืนยันรหัสผ่าน" id="repassword" class="input-block" value="" type="password">
									<span class="form-icon fa fa-lock"></span>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-12 text-center">
					<button class="btn btn-main featured">สมัครสมาชิก</button>
				</div>
			</div>
		</div>
	</div>
</section>


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
			 <!-- Custom js -->
		<script src="js/custom.js"></script>

 
	</body>
</html>
