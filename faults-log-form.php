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

<?php


// if submitted check response
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
?>
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
								  <li><a href="#">Operations</a></li>
								  <li class="active">Log a Fault</li>
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
									<h2>Log a Fault</h2>
									<div class="job-details">
										<h4>
                        <p>
                        <a href="dom-pdf-test.php"><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-export"></span> Download PDF</button></a>
                        <a href="faults-log-ajax-search.php"><button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-search"></span> Search for logged faults</button></a>
                        <a href="faults-log-report.php"><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span> View Reports</button></a>
                        <a href="faults-log-query-results.php"><button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> View all faults</button></a>
                        <a href="login-home.php"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-off"></span> Exit</button></a>           
                        </p>
                        <p>Provide as much details as possible</p>
                    </h4>
        <br>
        <div class="row">
            <div class="col-sm-4">

                <form action="faults-log-form-submit.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="sel1">Logged by (Operator's name):</label>
                        <select class="form-control" id="logged-by" name="logged-by">
                        	<option>Select Your Name</option>
                        	<option>Emmerith</option>
                            <option>Zakiyyah</option>
                            <option>Anita</option>
                            <option>Chelsea</option>
                            <option>Osman</option>
                            <option>Nastasha</option>
                            <option>Shanaaz</option>
                            <option>Pamela</option>
                            <option>Patricia</option>
                            <option>Elizabeth</option>
                            <option>Warrick</option>
                            <option>Jason</option>
                            <option>Cale</option>
                            <option>Wendell</option>
                            <option>Brownynne</option>
                            <option>Servious</option>
                            <option>Marius</option>
                            <option>Shari</option>
                            <option>Magda</option>
                            <option>Brian</option>
                            <option>Sharidine</option>
                            <option>Candice</option>
                            <option>Faith</option>
                            <option>Wendell</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="reg-number">Registration <sup>no. </sup></label>
                        <input type="text" class="form-control" name="reg-number">
                    </div>

                    <div class="form-group">
                        <label for="reg-number">Fleet <sup>no.</sup></label>
                        <input type="text" class="form-control" name="fleet-number">
                    </div>

                    <div class="form-group">
                        <label for="sel1">Client's Name:</label>
                        <select class="form-control" id="client-name" name="client-name">
                            <option>All Port Cargo</option>
                            <option>AM Security</option>
                            <option>Atang Logistics</option>
                            <option>ATS Transport</option>
                            <option>Autogistix</option>
                            <option>Baleka</option>
                            <option>Boetie</option>
                            <option>Bulldog</option>
                            <option>Campossub</option>
                            <option>Campos Transport</option>
                            <option>Cape Cement</option>
                            <option>Cheval Carriers</option>
                            <option>Corpclo 1071 CC T/A Hospitality</option>
                            <option>Cosworth Carriers</option>
                            <option>Dannys Auto</option>
                            <option>David Woodley</option>
                            <option>De Wet Vrugte en Vervoer</option>
                            <option>Decore</option>
                            <option>DMJ</option>
                            <option>Duncan Stead</option>
                            <option>Eldo Coaches</option>
                            <option>Eljo</option>
                            <option>Fox Transport</option>
                            <option>Gerrys Motors</option>
                            <option>Goenberg</option>
                            <option>GP van Niekerk</option>
                            <option>Gundle Plastics Group</option>
                            <option>Grain Carriers South Africa</option>
                            <option>Grain Carriers Namibia</option>
                            <option>Groenberg Cartage</option>
                            <option>H&M Removals</option>
                            <option>Hal Transport</option>
                            <option>Harmhout</option>
                            <option>Herlendir Transport</option>
                            <option>HG Travel Services</option>
                            <option>Hitech Tyres</option>
                            <option>Jahvis Transport</option>
                            <option>JJZ Gerber Houtwerke BK</option>
                            <option>Johista</option>
                            <option>Justin Lusso</option>
                            <option>Justin Sykes</option>
                            <option>KW van Wyk</option>
                            <option>K&H Freight</option>
                            <option>Leon Van Vuuren Bulk Carriers</option>
                            <option>Liberty Foods</option>
                            <option>LMC Express</option>
                            <option>Lourensford</option>
                            <option>Lucerne Transport</option>
                            <option>MA Duplessis</option>
                            <option>M&A Logistics</option>
                            <option>MultiSnack</option>
                            <option>New Approach</option>
                            <option>Palm Logistics</option>
                            <option>Pk Vleis</option>
                            <option>RB & Sons</option>
                            <option>RMG Trucking</option>
                            <option>RPH</option>
                            <option>Rubix Group</option>
                            <option>Salvador Properties</option>
                            <option>Silver Meadow</option>
                            <option>Siyabonwa</option>
                            <option>Sumeil Transport</option>
                            <option>Swartland Logistics</option>
                            <option>Tacet</option>
                            <option>Tez Truck Plant & Civils</option>
                            <option>Themba Transport</option>
                            <option>Thido Carriers Trust</option>
                            <option>Top Crop</option>
                            <option>Tornado Timbers</option>
                            <option>TSU</option>
                            <option>VDM Vervoer</option>
                            <option>Virgo</option>
                            <option>M & A</option>
                            <option>Wamatha Logistics</option>
                            <option>Winetram </option>
                            <option>WP Vleis</option>
                            <option>Express Removals</option>
                            <option>Yatcht Camera</option>
                            <option>ZSS Security</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="sel1">Repaired by:</label>
                        <select class="form-control" id="repaired-by" name="repaired-by">
                            <option>Not yet repaired</option>
                            <option>Richard</option>
                            <option>Cale</option>
                            <option>Kudakwashe</option>
                            <option>Clinton</option>
                            <option>Jacob</option>
                            <option>Chris</option>
                            <option>Ricardo</option>
                        </select>
                    </div>
            </div>

            <div class="col-sm-4">

                <label for="client-notified-of-tamper">Fault Confirmed?</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="radio" value="Yes">Yes</label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="radio" value="No" checked="checked">No</label>
                </div>
                <br>
                <div id="initial-checklist">
                    <label for="type-of-damage">Specify Type of Fault:</label>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="Video Loss" name="fault-type[]">Video Loss</label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="GPS Error" name="fault-type[]">GPS Error </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="Offline" name="fault-type[]">Offline</label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="HDD Error" name="fault-type[]">HDD Error</label>
                    </div>
                    
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="SD Error" name="fault-type[]">SD Card Error</label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="Camera Moved" name="fault-type[]">Camera Moved</label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="Other" name="fault-type[]">Other</label>
                    </div>

                </div>

            </div>

            <div class="col-sm-4">
             
                <div class="form-group">
                    <label for="date">Date Logged: &nbsp;&ensp;&ensp;</label>
                    <input type="text" name="date-of-log" value="<?php echo date('d-m-Y')?>">
                </div>

                <div class="form-group">
                    <label for="date">Date Completed:</label>
                    <input type="date" name="date-of-complete">
                </div>

                <br>
                
                <!-- start of file upload process>  
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <label for="upload-picture">Upload Picture of Damaged Device:</label>
                    <p><input type="file" name="fileToUpload" id="fileToUpload"></p>
                    <p><input type="submit" value="Upload Image" name="submit"></p>
                </form>
                <!-- start of file upload process-->
                
              
                    <label for="upload-picture">Upload picture of damaged device:</label>
                    <p><input type="file" name="fileToUpload" id="fileToUpload"></p>
                    <!--p><input type="submit" value="Upload Image" name="submit"></p-->
              
                <br>
                <div class="form-group">
                    <label for="comment">Additional Notes of Fault:</label>
                    <textarea class="form-control" rows="3" id="" name="additional-notes"></textarea>
                </div>
            </div>

        </div>

        <hr>
        
        <input type="submit" name="submit" class="btn btn-success" value = "Save" style="margin-bottom: 40px;">
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
