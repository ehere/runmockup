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
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.css">
  		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.js"></script>
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
							<li class="active"><a href="./adminorder.php" class="page-scroll">รายการใบสมัคร</a> </li>
							<li><a href="./admintransfer.php" class="page-scroll">รายการแจ้งโอนเงิน</a> </li>
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
						<div class="col-md-12">
							<h3 class="feature_title" style="margin:0;width:100%"><b>รายการใบสมัคร</b></h3>
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
				<div class="panel-body">
					<table class="table">
						<thead>
							<tr>
								<th>หมายเลขใบสมัคร</th>
								<th>ชื่องาน</th>
								<th>ชื่อผู้ใช้</th>
								<th>สถานะ</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href="./result-paid.php">11234</a></td>
								<td><a href="./event.php">LADKRABANG RUNNING 2016</a></td>
								<td>นายสมหมาย ทองดี</td>
								<td><span class="label label-danger">ยังไม่ได้ชำระเงิน</span></td>
								<td>
									<a href="#" class="btn btn-default"><i class="fa fa-level-up"></i> Mask as Paid</a>
								</td>
							</tr>
							<tr>
								<td><a href="./result-paid.php">10562</a></td>
								<td><a href="./event.php">Phuket Marathon</a></td>
								<td>นายสมชาย ชาติไทย</td>
								<td><span class="label label-success">ชำระเงินแล้ว</span></td>
								<td>
									<a href="#" class="btn btn-default"><i class="fa fa-level-down"></i> Mask as Unpaid</a>
								</td>
							</tr>
							<tr>
								<td><a href="./result-paid.php">9643</a></td>
								<td><a href="./event.php">Laguna Phuket International Marathon 2016</a></td>
								<td>นายทวี มีมาก</td>
								<td><span class="label label-success">ชำระเงินแล้ว</span></td>
								<td>
									<a href="#" class="btn btn-default"><i class="fa fa-level-down"></i> Mask as Unpaid</a>
								</td>
							</tr>
							<tr>
								<td><a href="./result-paid.php">11235</a></td>
								<td><a href="./event.php">LADKRABANG RUNNING 2016</a></td>
								<td>นายสมนึก คึกคัก</td>
								<td><span class="label label-danger">ยังไม่ได้ชำระเงิน</span></td>
								<td>
									<a href="#" class="btn btn-default"><i class="fa fa-level-up"></i> Mask as Paid</a>
								</td>
							</tr>
							<tr>
								<td><a href="./result-paid.php">10563</a></td>
								<td><a href="./event.php">Phuket Marathon</a></td>
								<td>นางสมศรี สมรสาว</td>
								<td><span class="label label-success">ชำระเงินแล้ว</span></td>
								<td>
									<a href="#" class="btn btn-default"><i class="fa fa-level-down"></i> Mask as Unpaid</a>
								</td>
							</tr>
							<tr>
								<td><a href="./result-paid.php">9644</a></td>
								<td><a href="./event.php">Laguna Phuket International Marathon 2016</a></td>
								<td>นายทวัต ทวีโชค</td>
								<td><span class="label label-success">ชำระเงินแล้ว</span></td>
								<td>
									<a href="#" class="btn btn-default"><i class="fa fa-level-down"></i> Mask as Unpaid</a>
								</td>
							</tr>
							<tr>
								<td><a href="./result-paid.php">11236</a></td>
								<td><a href="./event.php">LADKRABANG RUNNING 2016</a></td>
								<td>นายสมปอง สนองคุณ</td>
								<td><span class="label label-danger">ยังไม่ได้ชำระเงิน</span></td>
								<td>
									<a href="#" class="btn btn-default"><i class="fa fa-level-up"></i> Mask as Paid</a>
								</td>
							</tr>
							<tr>
								<td><a href="./result-paid.php">10564</a></td>
								<td><a href="./event.php">Phuket Marathon</a></td>
								<td>นางสาวสมหญิง จริงใจ</td>
								<td><span class="label label-success">ชำระเงินแล้ว</span></td>
								<td>
									<a href="#" class="btn btn-default"><i class="fa fa-level-down"></i> Mask as Unpaid</a>
								</td>
							</tr>
							<tr>
								<td><a href="./result-paid.php">9645</a></td>
								<td><a href="./event.php">Laguna Phuket International Marathon 2016</a></td>
								<td>นายสมชาติ มาดแมน</td>
								<td><span class="label label-success">ชำระเงินแล้ว</span></td>
								<td>
									<a href="#" class="btn btn-default"><i class="fa fa-level-down"></i> Mask as Unpaid</a>
								</td>
							</tr>
							<tr>
								<td><a href="./result-paid.php">11237</a></td>
								<td><a href="./event.php">LADKRABANG RUNNING 2016</a></td>
								<td>นายสมใจ ไพศาล</td>
								<td><span class="label label-danger">ยังไม่ได้ชำระเงิน</span></td>
								<td>
									<a href="#" class="btn btn-default"><i class="fa fa-level-up"></i> Mask as Paid</a>
								</td>
							</tr>
							<tr>
								<td><a href="./result-paid.php">10565</a></td>
								<td><a href="./event.php">Phuket Marathon</a></td>
								<td>นายสมศักดิ์ รักชาติ</td>
								<td><span class="label label-success">ชำระเงินแล้ว</span></td>
								<td>
									<a href="#" class="btn btn-default"><i class="fa fa-level-down"></i> Mask as Unpaid</a>
								</td>
							</tr>
							<tr>
								<td><a href="./result-paid.php">9646</a></td>
								<td><a href="./event.php">Laguna Phuket International Marathon 2016</a></td>
								<td>นางสาวสวย ล้นโลก</td>
								<td><span class="label label-success">ชำระเงินแล้ว</span></td>
								<td>
									<a href="#" class="btn btn-default"><i class="fa fa-level-down"></i> Mask as Unpaid</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
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
		<script type="text/javascript">
		$(document).ready( function () {
			jQuery(function($) { // DOM is now read and ready to be manipulated
				$('table').DataTable({
					"order": [[ 0, "desc" ]]
				});
			});
		    
		} );
		</script>
 
	</body>
</html>
