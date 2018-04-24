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
	</head>

<?php
	include('include/connection.php');
	$button_id = $_POST['button_id'];
	//echo $button_id;
	$logged_by = $_POST["logged-by"];
	$reg_number = $_POST["reg-number"];
	$fleet_number = $_POST["fleet-number"];
	$client_name = $_POST["client-name"];
	$repaired_by = $_POST["repaired-by"];
	$fault_confirmed = $_POST["radio"];
    $fault_type = $_POST["fault-type"];
    $type_of_damage = implode(", ",$fault_type);
	$date_of_log = $_POST["date-of-log"];
	$date_of_complete = $_POST["date-of-complete"];
    echo $date_of_log;
    echo $date_of_complete;
	//$upload_picture = $_POST["fileToUpload"];
	$additional_notes = $_POST["additional-notes"];
    $log_resolved = $_POST["log-resolved"];
    $resolution_notes = $_POST["resolution-notes"];
        
        $sql = "UPDATE logged_faults SET fault_confirmed = '$fault_confirmed', additional_notes = '$additional_notes', repaired_by = '$repaired_by', date_of_complete = '$date_of_complete', 
                log_resolved = '$log_resolved', resolution_notes = '$resolution_notes', reg_number = '$reg_number', 
                fleet_number = '$fleet_number', client_name = '$client_name', type_of_damage = '$fault_type' WHERE id = $button_id";

			if (mysqli_query($conn, $sql)) {
    			//echo "New record updated successfully";
			} else {
    			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
								  <li class="active">Faults Log Form Update</li>
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
									<h2>Faults Log Form Update</h2>
									<div class="job-details">
										<div class="row">
                <div class="col-sm-12">
            
            <br>
            <h4>
            <p>
            	<a href=""><button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-export"></span> Download PDF</button></a>
                <a href="faults-log-ajax-search.php"><button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-search"></span> Search for logged faults</button></a>
            	<a href="faults-log-query-results.php"><button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search"></span> View all faults</button></a>
                <a href="faults-log-form.php"><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Log a fault</button></a>
            </p>
        </h4>
<br>
        <div class="row">
            <div class="col-sm-4" style="">
        	<fieldset>
                    <legend>Fault log updated successfully</legend>
                        <p><b>Fault has been confirmed by Zakiyyah:</b> <?php echo $fault_confirmed; ?></p>
                        <p><b>Logged by:</b> <?php echo $logged_by; ?></p>
                        <p><b>Registration <sup>no.</sup> </b> <?php echo $reg_number; ?></p>
                        <p><b>Fleet <sup>no.</sup> </b> <?php echo $fleet_number; ?></p>
                        <p><b>Repaired by </b> <?php echo $repaired_by; ?></p>
                        <p><b>Type of Fault: </b> Previously specified damage saved</p>
                        <p><b>Date of Log: </b> <?php echo $date_of_log;?></p>
                        <p><b>Date of Completed: </b> <?php echo $date_of_complete;?></p>
                        <p><b>Uploaded Picture of Damage: </b> Previously uploaded picture saved</p>
	        			<p><b>Additional Notes: </b> <?php echo $additional_notes; ?></p>
                        <p><b>Resolution Notes: </b> <?php echo $resolution_notes; ?></p>
                        <p><b>Fault resolved?: </b> <?php echo $log_resolved; ?></p>
	        </fieldset>   
            </div>

            <div class="col-sm-4" style="">
            </div>

            <div class="col-sm-4" style="">
            </div>     
      </div>
<?php             
mysqli_close($conn);
?>
										
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