<?PHP
session_start();
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Truck Assist</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300' rel='stylesheet' type='text/css'>
    <!-- Flaticon CSS -->
    <link href="fonts/flaticon/flaticon.css" rel="stylesheet">
    <!-- font-awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- owl.carousel CSS -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
    <!-- Offcanvas CSS -->
    <link href="css/hippo-off-canvas.css" rel="stylesheet">
    <!-- animate CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/truck-2.ico">

    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	    <script src="js/vendor/html5shim.js"></script>
	    <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>
	<body>
	  <div id="st-container" class="st-container">
	    <div class="st-pusher">
	      <div class="st-content">
	        <div class="st-content-inner">
			   <!-- start of main menu-->
                               <div class="menu">
                                   <?php include 'menu.php';?>
                               </div>
                            <!-- end of main menu-->

<!--from original page>
<div id='fg_membersite_content'>
<p>Welcome back <?= $fgmembersite->UserFullName(); ?>!</p>
<p><a href='change-pwd.php'>Change password</a></p>
<p><a href='logout.php'>Logout</a></p>
</div>
<end from original page-->

                <div id="x-corp-carousel" class="carousel slide hero-slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#x-corp-carousel" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img/slider-bg1.png" alt="Hero Slide">
                            <!--Slide Image-->

                            <div class="container">
                                <div class="carousel-caption">
                                    <small class="animated fadeIn">support@truckassist.co.za</small>
                                    <div class="phone animated lightSpeedIn">021-852-3719</div>
                                    <h1 class="animated lightSpeedIn">Truck Assist</h1>

                                    <p class="lead animated lightSpeedIn">To streamline QC, IT, Operations & Admin tasks</p>

                                    <a class="btn btn-primary animated lightSpeedIn" href="#">Get started</a>
                                </div>
                                <!--.carousel-caption-->
                            </div>
                            <!--.container-->
                        </div>
                        <!--.item-->

                        <div class="item">
                            <img src="img/slider-bg2.png" alt="Hero Slide">
                            <!--Slide Image-->

                            <div class="container">
                                <div class="carousel-caption">

                                    <h1 class="animated bounceIn">Truck Assist</h1>

                                    <p class="lead animated lightSpeedIn">To streamline QC, IT, Operations & Admin tasks</p>
                                    <a class="btn btn-primary animated lightSpeedIn" href="#">Get started</a>
                                </div>
                                <!--.carousel-caption-->
                            </div>
                            <!--.container-->
                        </div>
                        <!--.item-->

                    </div>
                    <!--.carousel-inner-->

                    <!-- Controls -->
                    <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- #x-corp-carousel-->


				<div class="container">
					<div class="content-wrapper">
						<section class="intro-wrapper"> 
							<div class="row"> 
								<div class="col-lg-6 col-md-8">
									<h2 class="wow fadeInDown">Welcome to Truck Assist</h2>
									<p class="wow fadeInDown">This application has been designed to assist QC, IT, Operations, Logistics & Admin tasks.</p>

									<h3 class="wow fadeInDown">Feedback</h3>
									<p class="wow fadeInDown">Send suggestions and feedback to support@truckassist.co.za</p>

									<h3 class="wow fadeInDown">The Mission</h3>
									<p class="wow fadeInDown">Our company has been built on ethical, cost effective and competent service offerings. Wholly understanding and reducing our clients’ exposure to risk is fundamental to our success.</p>

									<a class="btn btn-primary wow fadeInDown" href="#" role="button">Read More</a>
								</div>

								<div class="col-lg-6 col-md-4"></div>
							</div><!-- /.row -->
						</section><!-- /.intro-wrapper -->


						<section class="service-wrapper">
							<h2 class="section-title wow fadeInDown">Core Services</h2>
				            <div class="row">
				              <div class="col-md-6 wow fadeInRight">
				                <div class="media">
				                  <a class="media-left" href="#">
				                    <span class="icon bg1 flaticon-increasing5"></span>
				                  </a>
				                  <div class="media-body">
				                    <h3 class="media-heading"><a href="#">Online Portals</a></h3>
				                    <p>We provide affordable tracking devices, online portals and risk management to both corporates and individuals.</p>
				                  </div> <!-- /.media-body -->
				                </div> <!-- /.media -->
				              </div> <!-- /.col-md-6 -->
				              
				              <div class="col-md-6 wow fadeInRight">
				                <div class="media">
				                  <a class="media-left" href="#">
				                    <span class="icon bg2 flaticon-syncing"></span>
				                  </a>
				                  <div class="media-body">
				                    <h3 class="media-heading"><a href="#">Tracking</a></h3>
				                    <p>Our portal clients are able to track their assets with impressive accuracy and receive notifications of any misdemeanors committed by drivers.</p>
				                  </div> <!-- /.media-body -->
				                </div> <!-- /.media -->
				              </div> <!-- /.col-md-6 -->
				              
				              <div class="col-md-6 wow fadeInRight">
				                <div class="media">
				                  <a class="media-left" href="#">
				                    <span class="icon bg3 flaticon-file24"></span>
				                  </a>
				                  <div class="media-body">
				                    <h3 class="media-heading"><a href="#">Ops Centre</a></h3>
				                    <p>Our Operations Centre is open 24/7 to attend to your company’s incidents, such as accidents, hijacks or spills.</p>
				                  </div> <!-- /.media-body -->
				                </div> <!-- /.media -->
				              </div> <!-- /.col-md-6 -->

				              <div class="col-md-6 wow fadeInRight">
				                <div class="media">
				                  <a class="media-left" href="#">
				                    <span class="icon bg4 flaticon-royalty"></span>
				                  </a>
				                  <div class="media-body">
				                    <h3 class="media-heading"><a href="#">Our Philosophy</a></h3>
				                    <p>Our company has been built on ethical, cost effective and competent service offerings. Wholly understanding and reducing our clients’ exposure to risk is fundamental to our success.</p>
				                  </div> <!-- /.media-body -->
				                </div> <!-- /.media -->
				              </div> <!-- /.col-md-6 -->
				            </div> <!-- /.row -->
						</section>

						
						<section class="trusted-client-wrapper">
							<h2 class="section-title wow fadeInDown">Some off Truck Assist's clients</h2>
                             <ul class="partner-logo" style="">
								<!--li class="wow zoomIn"><a href="#"><img src="img/partner/partner-logo-1.png" alt=""></a></li-->
                                <li class="wow zoomIn" style="width: 17%;"><a href="#"><img src="img/partner/atang.png" alt=""></a></li>
								<li class="wow zoomIn"><a href="#"><img src="img/partner/cosworth.png" alt=""></a></li>
								<li class="wow zoomIn"><a href="#"><img src="img/partner/eldo.png" alt=""></a></li>
								<li class="wow zoomIn"><a href="#"><img src="img/partner/grain.png" alt=""></a></li>
								<li class="wow zoomIn"><a href="#"><img src="img/partner/wamatha.png" alt=""></a></li>
								<li class="wow zoomIn" style="width: 20%;"><a href="#"><img src="img/partner/lmc.png" alt=""></a></li>
								<li class="wow zoomIn"><a href="#"><img src="img/partner/imperial.png" alt=""></a></li>
								<!--li class="wow zoomIn"><a href="#"><img src="img/partner/partner-logo-9.png" alt=""></a></li-->
							</ul>
						</section>

					</div><!-- /.content-wrapper -->
				</div><!-- /.container -->



<!-- start of footer menu-->
                            
                            <?php include 'footer-menu.php';?>
                     
<!-- end of footer menu-->

<!-- start of copyright menu-->
                            
                            <?php include 'copyright.php';?>
                     
<!-- end of copyright menu-->
                                
	        </div> <!-- .st-content-inner -->
	       </div> <!-- .st-content -->
	    </div> <!-- .st-pusher -->

        <!-- ======== START OFFCANVAS MENU ========= -->
                <div class="menu">
                    <?php include 'menu-offcanvas.php';?>
                </div>
        <!-- ======== END OFFCANVAS MENU ========= -->
            
	  </div><!-- /st-container -->


		<!-- Preloader -->
		<div id="preloader">
			<div id="status">
				<div class="status-mes"></div>
			</div>
		</div>
	    <!-- jQuery -->
	    <script src="js/jquery.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="js/bootstrap.min.js"></script>
	    <!-- wow.min.js -->
	    <script src="js/wow.min.js"></script>
	    <!-- owl-carousel -->
	    <script src="owl-carousel/owl.carousel.min.js"></script>
	    <!-- smoothscroll -->
	    <script src="js/smoothscroll.js"></script>
		<!-- Offcanvas Menu -->
		<script src="js/hippo-offcanvas.js"></script>
		<!-- easypiechart -->
		<script src="js/jquery.easypiechart.min.js"></script>
	    <!-- Scrolling Nav JavaScript -->
	    <script src="js/jquery.easing.min.js"></script>
		<!-- Magnific-popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Shuffle.min js -->
		<script src="js/jquery.shuffle.min.js"></script>
	    <!-- Custom Script -->
	    <script src="js/scripts.js"></script>
	</body>
</html>
