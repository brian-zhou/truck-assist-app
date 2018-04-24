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
								  <li><a href="#">Administration</a></li>
								  <li class="active">Leave Form</li>
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
                                     <h3><p>View/Approve/Decline Leave Application</p></h3>
									      <div class="job-details">
<?php
include('include/connection.php');

@header("content-type:image/jpeg");
$button_id = $_POST['button_id'];

foreach ($button_id as $selected_user_id) {
	//echo $selected_user_id . "<br>";

 	$sql = "SELECT * FROM leave_form WHERE id = $selected_user_id";
 	$result = mysqli_query($conn, $sql);

 	while($row = mysqli_fetch_assoc($result)){
                $id = $row["id"];
                $time_stamp = $row["time_stamp"];
 		        $logged_by = $row["logged_by"];
                //echo "$logged_by . 'IS LOGGED BY'";
                $choose_department = $row["choose_department"]; 
                $employee_email = $row["employee_email"];
                $employee_position = $row["employee_position"];
                $number_of_days_taken = $row["number_of_days_taken"];
                $no_of_days_owing = $row["no_of_days_owing"];
                $no_of_leave_days_taken = $row["no_of_leave_days_taken"];
                $no_of_days_balance = $row["no_of_days_balance"];
                $leave_type = $row["leave_type"];
                $line_manager_email = $row["line_manager_email"];
                $date_of_start = $row["date_of_start"];
                $date_of_end = $row["date_of_end"]; 
                $date_of_log = $row["date_of_log"];
                $upload_picture_name = $row["upload_picture_name"]; 
                $your_signature = $row["your_signature"];
                $additional_notes = $row["additional_notes"];   
                $leave_approved_by_hr = $row["leave_approved_by_hr"];
                $hr_comments = $row["hr_comments"];
                //$position = $row["position"];
                //$additional_notes = $row["additional_notes"];
                
                
            } 
    }
?>
            <br>
		<h4>
                    <p>
                        <a href="dom-pdf-test.php"><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-export"></span> Download PDF</button></a>
                        <!--a href="faults-log-ajax-search.php"><button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-search"></span> Search for logged faults</button></a>
                        <a href="faults-log-report.php"><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span> View Reports</button></a-->
                        <a href="leave-application-status-employee.php"><button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> View Leave Status</button></a>
                        <a href="login-home.php"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-off"></span> Exit</button></a>
                        <p><marquee><h4 style="color: maroon"><?php echo "The date today is " . @date("d-m-Y")?> </h4></marquee></p>
                        
                        </p>
                    </h4>
        <br>

        <div class="row">
            <div class="col-sm-4">

                <form action="leave-application-form-submit-decision.php" method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label for="logged-by">Employee Name<sup></sup></label>
                        <input type="text" class="form-control" name="logged-by" value="<?php echo $logged_by; ?>" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="choose-department">Employee Department<sup></sup></label>
                        <input type="text" class="form-control" name="choose-department" value="<?php echo $choose_department; ?>" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="line-manager-email">Employee manager's e-mail<sup></sup></label>
                        <input type="text" class="form-control" name="line-manager-email" value="<?php echo $line_manager_email; ?>" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="employee-position">Position<sup></sup></label>
                        <input type="text" class="form-control" name="employee-position" value="<?php echo $employee_position; ?>" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="employee-email">Your Truck Assist e-mail<sup></sup></label>
                        <input type="text" class="form-control" name="employee-email" value="<?php echo $employee_email; ?>" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="number-of-days-taken">Number of days taken<sup></sup></label>
                        <input type="text" class="form-control" name="number-of-days-taken" value="<?php echo $number_of_days_taken; ?>" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="your-signature"><?php echo $logged_by; ?>'s Signature <sup>initials only</sup></label>
                        <input type="text" class="form-control" name="your-signature" value="<?php echo $your_signature; ?>" readonly>
                    </div>

                  
            </div>

            <div class="col-sm-4">

               
                <div class="form-group">
                        <label for="leave-type">Type of leave applied for<sup></sup></label>
                        <input type="text" class="form-control" name="leave-type" value="<?php echo $leave_type; ?>" readonly>
                    </div> 
                <br>
                
                 <div class="form-group">
                        <label for="leave-type">Leave application time stamp<sup></sup></label>
                        <input type="text" class="form-control" name="time-stamp" value="<?php echo $time_stamp; ?>" readonly>
                    </div> 
                <br>
                
                <div class="form-group">
                        <label for="start-date">Start date: &nbsp;&ensp;&ensp;<sup></sup></label>
                        <input type="text" class="form-control" name="date-of-start" value="<?php echo $date_of_start; ?>" readonly>
                    </div> 
                <br>
                
                 <div class="form-group">
                        <label for="end-date">End Date: &nbsp;&ensp;&ensp;&ensp;<sup></sup></label>
                        <input type="text" class="form-control" name="date-of-end" value="<?php echo $date_of_end; ?>" readonly>
                    </div> 
                <br>
                
                  <!--div class="form-group">
                    <label for="date">Start date: &nbsp;&ensp;&ensp;</label>
                    <input type="date" name="date-of-start" readonly>
                </div-->

                <!--div class="form-group">
                    <label for="date">End Date: &nbsp;&ensp;&ensp;&ensp;</label>
                    <input type="date" name="date-of-end" readonly>
                </div-->
        
                <!-- START OF PICTURE -->
                    <!--label for="upload-picture">Supporting documentation (e.g. medical certificate:</label>
                    <p><input type="file" name="fileToUpload" id="fileToUpload" value="<?php echo $logged_by; ?>" readonly></p>
                 
           
                <br>

                
                         
			<div id="myModal" class="modal">
				  <span class="close">&times;</span>
				  	<img class="modal-content" id="img01">
				  <div id="caption"></div>
			</div>

            <p><?php echo '<img id="myImg" src="data:image/jpeg;base64,'.base64_encode($upload_picture).'"/>'; ?></p> 
            <br>
            <h5><p><a href="download-fault-picture.php?id=<?php echo urlencode($id); ?>"><?php urlencode($upload_picture);?>Click here to download supporting documentation (if any) e.g. medical certificate, exam schedule etc.</a></p> </h5!-->

        <!-- START OF PICTURE -->
        
            
 <!-- Start of the Modal Javascript -->
			<script>
			// Get the modal
			var modal = document.getElementById('myModal');

			// Get the image and insert it inside the modal - use its "alt" text as a caption
			var img = document.getElementById('myImg');
			var modalImg = document.getElementById("img01");
			var captionText = document.getElementById("caption");
			img.onclick = function(){
			    modal.style.display = "block";
			    modalImg.src = this.src;
			    captionText.innerHTML = this.alt;
			}

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() { 
			    modal.style.display = "none";
			}
			</script>
<!-- End of the Modal Javascript -->

            </div>

            <div class="col-sm-4" style="background-color: beige;">
                
                <label for="for-official-use-only"><b>For official use only:</b></label>
                <!--div class="form-group">
                    <label for="date">Date Approved: &nbsp;&ensp;&ensp;&nbsp;&ensp;&ensp;&nbsp;&ensp;&ensp;&nbsp;&ensp;</label>
                    <input type="date" name="date-approved-by-hr" readonly >
                </div-->
                
                <div class="form-group">
                        <label for="leave-approved">Leave has been approved by Petro</label>
                        <select class="form-control" id="leave-approved" name="leave-approved-by-hr">
                            <option>PENDING</option>
                            <option>YES</option>
                            <option>NO</option>
                        </select>
                </div>
                
                <div class="form-group">
                    <label for="hr-comments">Comments:</label>
                    <textarea class="form-control" rows="3" id="" name="hr-comments"></textarea>
                </div>

                <br>
                    
                    <div class="form-group">
                        <label for="days-owing"> <sup>no </sup> of days owing</label>
                        <input type="text" class="form-control" name="days-owing">
                    </div>
                    
                    <div class="form-group">
                        <label for="days-taken"> <sup>no </sup> of leave days taken (on this application)</label>
                        <input type="text" class="form-control" name="days-taken">
                    </div>
                    
                    <div class="form-group">
                        <label for="days-balance"> <sup>no </sup> of days (balance) owing</label>
                        <input type="text" class="form-control" name="days-balance">
                    </div>
              
                <br>
           
            </div>

        </div>

        <hr>
        
        <input type="submit" name="button_id" class="btn btn-success" value = "<?php echo $id; ?>" style="margin-bottom: 40px;">
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
