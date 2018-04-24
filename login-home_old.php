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
									<p class="wow fadeInDown">Is to reduce use of paper as far as possible and get all processes web based stored in a central database.</p>

									<a class="btn btn-primary wow fadeInDown" href="#" role="button">Read More</a>
								</div>

								<div class="col-lg-6 col-md-4"></div>
							</div><!-- /.row -->
						</section><!-- /.intro-wrapper -->


						<section class="service-wrapper">
							<h2 class="section-title wow fadeInDown">Quick links</h2>
				            <div class="row">
				              <div class="col-md-6 wow fadeInRight">
				                <div class="media">
				                  <a class="media-left" href="#">
				                    <span class="icon bg1 flaticon-increasing5"></span>
				                  </a>
				                  <div class="media-body">
				                    <h3 class="media-heading"><a href="#">Logistics</a></h3>
				                    <p>Assertively target turnkey technologies whereas covalent ROI. Distinctively grow viral mindshare rather than collaborative meta-services redibly initiate.</p>
				                  </div> <!-- /.media-body -->
				                </div> <!-- /.media -->
				              </div> <!-- /.col-md-6 -->
				              
				              <div class="col-md-6 wow fadeInRight">
				                <div class="media">
				                  <a class="media-left" href="#">
				                    <span class="icon bg2 flaticon-syncing"></span>
				                  </a>
				                  <div class="media-body">
				                    <h3 class="media-heading"><a href="#">IT</a></h3>
				                    <p>Assertively target turnkey technologies whereas covalent ROI. Distinctively grow viral mindshare rather than collaborative meta-services redibly initiate.</p>
				                  </div> <!-- /.media-body -->
				                </div> <!-- /.media -->
				              </div> <!-- /.col-md-6 -->
				              
				              <div class="col-md-6 wow fadeInRight">
				                <div class="media">
				                  <a class="media-left" href="#">
				                    <span class="icon bg3 flaticon-file24"></span>
				                  </a>
				                  <div class="media-body">
				                    <h3 class="media-heading"><a href="#">Operations</a></h3>
				                    <p>Assertively target turnkey technologies whereas covalent ROI. Distinctively grow viral mindshare rather than collaborative meta-services redibly initiate.</p>
				                  </div> <!-- /.media-body -->
				                </div> <!-- /.media -->
				              </div> <!-- /.col-md-6 -->

				              <div class="col-md-6 wow fadeInRight">
				                <div class="media">
				                  <a class="media-left" href="#">
				                    <span class="icon bg4 flaticon-royalty"></span>
				                  </a>
				                  <div class="media-body">
				                    <h3 class="media-heading"><a href="#">Admin</a></h3>
				                    <p>Assertively target turnkey technologies whereas covalent ROI. Distinctively grow viral mindshare rather than collaborative meta-services redibly initiate.</p>
				                  </div> <!-- /.media-body -->
				                </div> <!-- /.media -->
				              </div> <!-- /.col-md-6 -->
				            </div> <!-- /.row -->
						</section>

						
						<section class="trusted-client-wrapper">
							<h2 class="section-title wow fadeInDown">Some of out clients</h2>
							<ul class="partner-logo">
								<li class="wow zoomIn"><a href="#"><img src="img/partner/partner-logo-1.png" alt=""></a></li>
								<li class="wow zoomIn"><a href="#"><img src="img/partner/partner-logo-2.png" alt=""></a></li>
								<li class="wow zoomIn"><a href="#"><img src="img/partner/partner-logo-3.png" alt=""></a></li>
								<li class="wow zoomIn"><a href="#"><img src="img/partner/partner-logo-4.png" alt=""></a></li>
								<li class="wow zoomIn"><a href="#"><img src="img/partner/partner-logo-5.png" alt=""></a></li>
								<li class="wow zoomIn"><a href="#"><img src="img/partner/partner-logo-6.png" alt=""></a></li>
								<li class="wow zoomIn"><a href="#"><img src="img/partner/partner-logo-7.png" alt=""></a></li>
								<li class="wow zoomIn"><a href="#"><img src="img/partner/partner-logo-8.png" alt=""></a></li>
								<li class="wow zoomIn"><a href="#"><img src="img/partner/partner-logo-9.png" alt=""></a></li>
							</ul>
						</section>

					</div><!-- /.content-wrapper -->
				</div><!-- /.container -->


				<section class="footer-widget-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="footer-widget">
									<p class="subcsribe-text wow fadeInDown">Some useful links.</p>

									<h3 class="wow fadeInDown">Social Network Links</h3>

									<div class="social-link wow fadeInDown">
										<ul>
											<!--li><a href="#"><i class="fa fa-rss"></i></a></li-->
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<!--li><a href="#"><i class="fa fa-google-plus"></i></a></li-->
											<li><a href="#"><i class="fa fa-youtube"></i></a></li>
											<!--li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-flickr"></i></a></li-->
										</ul>
									</div>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-6 -->
							<div class="col-md-2 col-sm-4 col-xs-4">
								<div class="footer-widget">
									<h3 class="wow fadeInDown">External Links</h3>
									<ul class="wow fadeInDown">
										<li><a href="http://www.safetgateway.co.za/">CMS Gateway Server</a></li>
										<li><a href="http://129.232.134.18:8080/808gps/login.html">Vehicle Management System</a></li>
										<li><a href="">Truck Assist Website</a></li>
										<li><a href="">Track Me Live Website</a></li>
									</ul>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->
							<div class="col-md-2 col-sm-4 col-xs-4">
								<div class="footer-widget">
									<h3 class="wow fadeInDown">Shortcut links</h3>
									<ul class="wow fadeInDown">
										<li><a href="#">Operations</a></li>
										<li><a href="#">QC</a></li>
										<li><a href="#">Logistics</a></li>
										<li><a href="#">IT</a></li>
										<li><a href="#">Admin</a></li>
									</ul>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->
							<div class="col-md-2 col-sm-4 col-xs-4">
								<div class="footer-widget">
									<h3 class="wow fadeInDown">Contact</h3>
									<ul class="wow fadeInDown">
										<li><a href="#">Reception</a></li>
										<li><a href="#">Operations</a></li>
										<li><a href="#">IT Support</a></li>
									</ul>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</section>


				<footer class="footer-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="copyright wow fadeInDown">
									<p>Copyright &copy; 2017 . All Rights Reserved. Designed by <a href="http://www.truckassist.com/">truckassist.com IT</a> </p>
								</div><!-- /.copyright -->
							</div><!-- /.col-md-12 -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</footer>
	        </div> <!-- .st-content-inner -->
	       </div> <!-- .st-content -->
	    </div> <!-- .st-pusher -->


		<!-- ======== OFFCANVAS MENU ========= -->
	    <div class="offcanvas-menu offcanvas-effect visible-xs">
	      <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
	      <h3>Truck Assist Menu</h3>
	      	<div>
		      <div>
				<ul>
                                    <li><a href="login-home.php">Home</a>
						<ul>
                                                    <li class="active"><a href="logout.php"><i class="fa fa-home"></i>Logout</a></li>
						</ul>
					</li>

					<li><a href="#">About</a>
						<ul>
							<li><a href="about-us.html"><i class="fa fa-life-ring"></i> About Us</a></li>
							<li><a href="about-me.html"><i class="fa fa-user"></i> About me</a></li>
						</ul>
					</li>

					<li><a href="#">Blog</a>
						<ul>
							<li><a href="blog.html"><i class="fa fa-pencil-square-o"></i> Standard Blog</a></li>
							<li><a href="blog-single.html"><i class="fa fa-pencil"></i> Single Article</a></li>
						</ul>
					</li>

					<li><a href="#">Portfolio</a>
						<ul>
							<li><a href="portfolio-four.html"><i class="fa fa-picture-o"></i> Four Column</a></li>
							<li><a href="portfolio-three.html"><i class="fa fa-paper-plane-o"></i> Three Column</a></li>
							<li><a href="portfolio-two.html"><i class="fa fa-magic"></i> Two Column</a></li>
						</ul>
					</li>


					<li><a href="#">Pages</a>
						<ul>
							<li><a href="job-page.html"><i class="fa fa-briefcase"></i> Job Page</a></li>
							<li><a href="clients-page.html"><i class="fa fa-coffee"></i> Clients Page</a></li>
							<li><a href="faq.html"><i class="fa fa-question-circle"></i> FAQ Page</a></li>
							<li><a href="typography.html"><i class="fa fa-puzzle-piece"></i> Typography Page</a></li>
						</ul>
					</li>


					<li><a href="#">Contact</a>
						<ul>
							<li><a href="contact.html"><i class="fa fa-envelope-o"></i> Contact</a></li>
						</ul>
					</li>
				</ul>
			  </div>
			</div>
	    </div><!-- .offcanvas-menu -->
            
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
