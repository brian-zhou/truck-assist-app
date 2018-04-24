<?php
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Truck Assist</title>
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
	<!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
  
	</head>


	<body>
	  <div id="st-container" class="st-container">
	    <div class="st-pusher">
	      <div class="st-content">
	        <div class="st-content-inner">
			    <!-- start of main menu-->
                             
                   <!-- end of main menu-->

				<section class="page-header-wrapper">
					
				</section>


				<div class="container">
					<div class="content-wrapper" style="margin-top: 5%; margin-left: 31%; margin-right: 31%; margin-bottom: 141%";>
						<div class="job-page-wrapper">
							<div class="row">
								<div class="col-md-12">
									
									<div class="job-details">
										<dl>
 <?PHP
require_once("./include/membersite_config.php");
if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("login-home.php");
   }
}
?>
            <div class="col-sm-12">
                <!-- Form Code Start -->
                <div id='fg_membersite'>
                	<div id = "login-box">
                    <form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                    	<div id = logo>
									<img src="img/main-logo.png" class="img-responsive" alt="Truck Assist Logo">
								</div>
                        <fieldset>

                            <!--p><legend>Verify Yourself</legend></p-->
                            <div class="form-group">
                                <input type='hidden' name='submitted' id='submitted' value='1' />

                                <div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
                                <div class=''>
                                    <label for='username'>User Name:</label>
                                    <input type='text' class="form-control" name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay(' username ') ?>' maxlength="50" />
                                    <br/>
                                    <span id='login_username_errorloc' class='error'></span>
                                </div>
                                <div class=''>
                                    <label for='password'>Password*:</label>
                                    <br/>
                                    <input type='password' class="form-control" name='password' id='password' maxlength="50" />
                                    <br/>
                                    <span id='login_password_errorloc' class='error'></span>
                                </div>

                                <p>
                                    <input type='submit' name='Submit' class="btn btn-primary" value='Submit' />
                                </p>

                                <!--p><a href="reset-pwd-req.php">Forgot Password?:

          <span class="glyphicon glyphicon-user"></span>
        </a>
      </p-->

                            <p><a href="">Forgot Password?:<span class="glyphicon glyphicon-user"></span></a></p>
                        </fieldset>
                    </form>
                </div>
                </div>
            </div>


                <!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

                <script type='text/javascript'>
                    // <![CDATA[

                    var frmvalidator = new Validator("login");
                    frmvalidator.EnableOnPageErrorDisplay();
                    frmvalidator.EnableMsgsTogether();

                    frmvalidator.addValidation("username", "req", "Please provide your username");

                    frmvalidator.addValidation("password", "req", "Please provide the password");

                    // ]]>
                </script>
            </div>
										</dl>
										
									</div>
								</div>
							</div>
						</div><!-- /.job-page-wrapper -->
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
									<p>Copyright &copy; 2017 . All Rights Reserved. Designed by <a href="http://www.truckassist.com/">truckassist.com</a> </p>
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
	      <h3>Mobile Menu</h3>
	      	<div>
		      <div>
				<ul>
					<li><a href="#">Home</a>
						<ul>
							<li class="active"><a href="index.html"><i class="fa fa-home"></i> Home Style One</a></li>
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
		<!-- jQuery REVOLUTION Slider  -->
		<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
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
