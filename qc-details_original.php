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
    <link rel="shortcut icon" href="img/truck-2.ico">
    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
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

				<section class="page-header-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="page-header">
								  <h1>Operations</h1>
								</div>
								<ol class="breadcrumb">
								  <li><a href="#">Home</a></li>
								  <li><a href="#">Quality Control</a></li>
								  <li class="active">Device Details</li>
								</ol>
							</div>
						</div><!-- /.row -->
					</div><!-- /.container-fluid -->
				</section>


				<div class="container">
					<div class="content-wrapper">
						<div class="job-page-wrapper">
							<div class="row">
								<div class="col-md-12">
									<p><h3>QC (Quality Control) Details</h3></p>
									<div class="job-details">
										<h4>
                        <p>
                        <a href=""><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-export"></span> Download PDF</button></a>
                        <!--a href="faults-log-ajax-search.php"><button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-search"></span> Search for logged faults</button></a>
                        <a href="faults-log-report.php"><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span> View Reports</button></a-->
                        <a href="qc-details-records.php"><button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> View All Repaired Devices</button></a>
                        <a href="login-home.php"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-off"></span> Cancel</button></a><br><br>

                        
                        <!--p><marquee><h4 style="color: maroon"><?php echo "Today is " . @date("d-m-Y")?> </h4></marquee></p-->
                        <br>
                        </p>
                    </h4>
        <div class="row">
            <div class="col-sm-4">

                <form action="qc-details-submitted.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="device-type">Created By:</label>
                        <select class="form-control" id="created-by" name="created-by">
                            <option>---Select a name---</option>
                            <option>Cale</option>
                            <option>Wendell</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="device-type">Device Type:</label>
                        <select class="form-control" id="device-type" name="device-type">
                            <option>---Select number of channels---</option>
                            <option>MDVR 2CH</option>
                            <option>MDVR 8CH</option>
                            <option>MDVR 8CH</option> 
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="device-version-number">Device Version Number:</label>
                        <select class="form-control" id="device-version-number" name="device-version-number">
                            <option>---Select firmware version---</option>
                            <option>T16071301</option>
                            <option>T16120701</option>
                            <option>T16032611</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="disk-type">Disk Type:</label>
                        <select class="form-control" id="disk-type" name="disk-type">
                            <option>---Select disk type---</option>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>                        
                        </select>
                    </div>
                  
            </div>

            <div class="col-sm-4">

                    <div class="form-group">
                        <label for="device-phone-number">Device  <sup>No&nbsp;&ensp;&ensp;&nbsp;&nbsp;&ensp;&ensp;&nbsp;&nbsp;&ensp;&ensp;&nbsp;</sup></label>
                        <input type="number" class="device-number" name="device-number">
                    </div>

                    <div class="form-group">
                        <label for="device-phone-number">Device Phone <sup>No</sup></label>
                        <input type="number" class="device-phone-number" name="device-phone-number">
                    </div>

                    <label for="upload-picture">Upload picture of damaged device:</label>
                    <p><input type="file" name="fileToUpload" id="fileToUpload"></p>

            </div>

            <div class="col-sm-4">

                <div class="form-group">
                    <label for="date">Date Logged (Time Stamp): </label>
                    <input type="text" name="date-of-log" value="<?php echo date('d-m-Y')?>">
                </div>

                <div class="form-group">
                    <label for="date">Pick Completed Date:&nbsp;&ensp;&ensp;&nbsp;&ensp;&ensp;</label>
                    <input type="date" name="date-of-complete">
                </div>
                
           
            <div id="qc-approved">        
                 <label for="qc-approved">QC Approved:</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="radio" value="Yes">Yes</label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="radio" value="No" checked="checked">No</label>
                </div>    
            </div>
              
                <div class="form-group">
                    <label for="additional-notes">Problem?:</label>
                    <textarea class="form-control" rows="3" id="problem" name="problem"></textarea>
                </div>

            </div>

                <br>
           
            </div>

        </div>

        <hr>
        
        <input type="submit" name="submit" class="btn btn-success" value = "Save to Database" style="margin-bottom: 40px;">
        </form>
            
										
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
									<p>Copyright &copy; 2018. All Rights Reserved. Designed by <a href="http://www.truckassist.com/">truckassist.com</a> </p>
								</div><!-- /.copyright -->
							</div><!-- /.col-md-12 -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</footer>
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
