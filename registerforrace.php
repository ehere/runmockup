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
							<li><a href="./" class="page-scroll">Home </a></li>
							<li><a href="./allevent.php"  class="page-scroll">All Events</a> </li>
							<li><a href="./profile.php" class="page-scroll">สวัสดี สมชาย</a> </li>
							<li><a href="./myracehistory.php" class="page-scroll">รายการแข่งที่สมัคร</a> </li>
							<li><a href="./login.php" class="page-scroll">Logout</a> </li>
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
					<h4 class="feature_title"><b>สมัคร</b>เข้าร่วมกิจกรรม</h4>
					<h3 class="feature_title">Ladkrabang Running 2016</h3>
					<div class="divider"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-sm-12 col-xs-12">
				<form class="form-horizontal" id="register-race" action="./confirmregisterforrace.php" method="post">
					<div class="form-group">
						<label for="racedate" class="col-sm-2 control-label">วันที่แข่งขัน</label>
						<div class="col-sm-10">
							<select name="racedate" id="racedate" class="form-control">
								<option value="" disabled selected>โปรดเลือกวันที่</option>
								<option value="2016-06-04">4 มิถุนายน 2559</option>
								<option value="2016-06-05">5 มิถุนายน 2559</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="race" class="col-sm-2 control-label">ประเภทการแข่ง</label>
						<div class="col-sm-10">
							<select name="race" id="race" class="form-control">
								<option value="" disabled selected>โปรดเลือกการแข่ง</option>
								<option value="rk2km">วิ่งยุวชน 2 กม.</option>
								<option value="r10.5km">วิ่ง 10.5 กม.</option>
								<option value="r5km">วิ่ง 5 กม.</option>
								<option value="w5km">เดิน 5 กม.</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="agegroup" class="col-sm-2 control-label">กลุ่มอายุ</label>
						<div class="col-sm-10">
							ทั่วไป
						</div>
					</div>
					<div class="form-group">
						<label for="shirtsize" class="col-sm-2 control-label">ขนาดเสื้อ</label>
						<div class="col-sm-10">
							<select name="shirtsize" id="shirtsize" class="form-control">
								<option value="" disabled selected>โปรดเลือกขนาดเสื้อ</option>
								<option value="s">S</option>
								<option value="m">M</option>
								<option value="l">L</option>
								<option value="xl">XL</option>
							</select>
						</div>
					</div>

					<div class="divider"></div>

					<div class="form-group form-inline">
						<label for="item1" class="col-sm-2 control-label">บัตรงานเลี้ยงพาสต้า(ผู้ใหญ่)</label>
						<div class="col-sm-10">
							<input name="item1price" value="950" type="number" step="0.01" class="form-control" disabled=""> X
							<input name="item1quantity" value="0" type="number" step="1" min="0" class="form-control">
						</div>
					</div>
					<div class="form-group form-inline">
						<label for="item2" class="col-sm-2 control-label">บัตรงานเลี้ยงพาสต้า(เด็ก)</label>
						<div class="col-sm-10">
							<input name="item2price" value="450" type="number" step="0.01" class="form-control" disabled=""> X
							<input name="item2quantity" value="0" type="number" step="1" min="0" class="form-control">
						</div>
					</div>
					<div class="form-group form-inline">
						<label for="item3" class="col-sm-2 control-label">แพ็คเกจภาพถ่าย</label>
						<div class="col-sm-10">
							<input name="item3price" value="1990" type="number" step="0.01" class="form-control" disabled=""> X
							<input name="item3quantity" value="0" type="number" step="1" min="0" class="form-control">
						</div>
					</div>
					<div class="form-group form-inline">
						<label for="item4" class="col-sm-2 control-label">แบบฝึกฝนเพื่อแข่งขันมาราธอน</label>
						<div class="col-sm-10">
							<input name="item4price" value="1990" type="number" step="0.01" class="form-control" disabled=""> X
							<input name="item4quantity" value="0" type="number" step="1" min="0" class="form-control">
						</div>
					</div>
					<div class="form-group form-inline">
						<label for="item5" class="col-sm-2 control-label">แบบฝึกฝนเพื่อแข่งขันฮาล์ฟมาราธอน</label>
						<div class="col-sm-10">
							<input name="item5price" value="1990" type="number" step="0.01" class="form-control" disabled=""> X
							<input name="item5quantity" value="0" type="number" step="1" min="0" class="form-control">
						</div>
					</div>
					<div class="form-group form-inline">
						<label for="item6" class="col-sm-2 control-label">แบบฝึกฝนเพื่อแข่งขันวิ่ง 10 กม.</label>
						<div class="col-sm-10">
							<input name="item6price" value="1990" type="number" step="0.01" class="form-control" disabled=""> X
							<input name="item6quantity" value="0" type="number" step="1" min="0" class="form-control">
						</div>
					</div>

					<div class="divider"></div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
								<label>
									<input type="checkbox"> ข้าพเจ้าขอยืนยันว่าข้าพเจ้ามีสุขภาพสมบูรณ์แข็งแรงและพร้อมที่จะทำการแข่งขัน ข้าพเจ้ายอมรับว่าการลงทะเบียนเข้าร่วมแข่งขัน เป็นความยินยอมและเป็นความเสี่ยงของข้าพเจ้าเอง และคณะกรรมการผู้จัดงาน ไม่ต้องรับผิดชอบในกรณี บาดเจ็บ เจ็บป่วยหรือสูญเสีย ทรัพย์สิน ที่เกิดระหว่างการแข่งขัน หรืออันเป็นผลเนื่องมาจากการแข่งขัน และข้าพเจ้าได้อ่าน และทำความเข้าใจกฎ กติกา และข้อ บังคับเกี่ยวกับการแข่งขัน เรียบร้อยแล้ว
								</label>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="panel panel-warning">
					<div class="panel-heading">รวมยอดเงิน</div>
					<div class="panel-body" style="padding-bottom: 0px;padding-left: 0px;padding-right: 0px;padding-top: 0px;">
						<table class="table">
						<tr>
							<th>รายการ</th>
							<th>จำนวน</th>
							<th>ราคา</th>
						</tr>
						<tr>
							<td>เดิน 5 กม.</td>
							<td>1</td>
							<td>350</td>
						</tr>
						<tr>
							<td>บัตรงานเลี้ยงพาสต้า(ผู้ใหญ่)</td>
							<td>1</td>
							<td>950</td>
						</tr>
						<tr>
							<td>บัตรงานเลี้ยงพาสต้า(เด็ก)</td>
							<td>2</td>
							<td>900</td>
						</tr>
						<tr>
							<th colspan="2">รวม</th>
							<th>2200</th>
						</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center">
			<button class="btn btn-main featured" onclick="submitForm()">สมัครแข่งขัน</button>
		</div>
		<script type="text/javascript">
			function submitForm(){
				jQuery(function($) { // DOM is now read and ready to be manipulated
					$('#register-race').submit();
				});
			}
		</script>
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
