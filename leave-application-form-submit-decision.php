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

/*$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imagename=$_FILES["fileToUpload"]["name"]; */

//Get the content of the image and then add slashes to it 
/*$imagetmp=@addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));

$uploadOk = 1;
$imageFileType = pathinfo($imagename,PATHINFO_EXTENSION);*/
//echo $imageFileType;


/* START OF IMAGE UPLOAD LOG*/
// Check if image file is a actual image or fake image
/*if(isset($_POST["submit"])) {
    $check = @getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "The picture is a valid image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "The picture is not a valid image.";
        $uploadOk = 0;
    }
}*/

// Check file size
/*if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}*/

// Allow certain file formats
/*if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}*/

// Check if $uploadOk is set to 0 by an error
/*if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else{
//Get the content of the image and then add slashes to it 
$imagetmp=addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));
echo "and the file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded succesfully.";
    }
   */ 
/* END OF IMAGE UPLOAD LOG*/
    $button_id = $_POST['button_id'];
	$logged_by = $_POST["logged-by"];
	$choose_department = $_POST["choose-department"];
	$employee_position = $_POST["employee-position"];
        $employee_email = $_POST["employee-email"];
        $line_manager_email = $_POST["line-manager-email"];  
	$number_of_days_taken = $_POST["number-of-days-taken"];
	$your_signature = $_POST["your-signature"];
	$leave_type = $_POST["leave-type"];
        $leave_approved_by_hr = $_POST["leave-approved-by-hr"];
        //$leave_approved_by_manager = $_POST["leave-approved-by-manager"];
        $hr_comments = $_POST["hr-comments"];
        $days_owing = $_POST["days-owing"];
        $days_taken = $_POST["days-taken"];
        $days_balance = $_POST["days-balance"];
	//$fault_type = $_POST["fault-type"];
        //$type_of_damage = implode(", ",$fault_type);  
	$date_of_start = $_POST["date-of-start"];
	$date_of_end = $_POST["date-of-end"];
	$additional_notes = $_POST["additional-notes"];
        
        //$sql = "UPDATE leave_form SET leave_approved_by_hr = '$leave_approved_by_hr', hr_comments = '$hr_comments', days_owing = '$days_owing', days_taken = '$days_taken', days_balance = '$days_balance' WHERE id = $button_id";

        $sql = "UPDATE leave_form SET leave_approved_by_hr = '$leave_approved_by_hr', hr_comments = '$hr_comments' WHERE id = $button_id;";

            if (mysqli_query($conn, $sql)) {
    		//echo "New record updated successfully";
                    } else {
    			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

             
/*START OF PHP E-MAIL 1*/

        //$to = "brizhou@gmail.com";
        $to = "$employee_email, $line_manager_email, caroline@truckassist.co.za, petrojohnson@one.za.com";
        $subject = "Petro Johnson has responded to a leave application submitted by $logged_by";

        $message = "
        <html>
            <head>
                <title>Leave Application Response</title>
            </head>
        <body>
        <p>A response has been given by Petro for the leave application that was logged by $logged_by for dates between $date_of_start & $date_of_end</p>
        <p><a href='https://app.truckassist.co.za/leave-application-status-employee.php'>Click this link to view the updated status of your leave request</a></p>
        <p>
            <b>Employee Name: </b> $logged_by <br><br>
            <b>Employee Department: </b> $choose_department <br><br>
            <b>Employee's Posistion: </b> $employee_position <br><br
            <b>Employee's E-mail: </b> $employee_email <br><br>
            <b>Line manager's E-mail: </b> $line_manager_email <br><br>
                
            <b>Number of days taken: </b> $number_of_days_taken <br><br>
            <b>Leave Type: </b> $leave_type <br><br>
            <b>Employee's Signature: </b> $your_signature <br><br>
            <b>Has leave been approved?:</b> $leave_approved_by_hr <br><br>
            <b>Start date of leave: </b> $date_of_start <br><br>
            <b>End date of leave: </b> $date_of_end <br><br>
            <b>HR Comments: </b> $hr_comments <br>
            <!--b>Additional notes: </b> $additional_notes <br-->
        </p>
        </body>
        </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <noreply@truckassist.co.za>' . "\r\n";
        $headers .= 'Cc: brian@truckassist.co.za' . "\r\n";

        mail($to,$subject,$message,$headers);

/*END OF PHP E-MAIL 1*/
        
/*START OF PHP E-MAIL 2

        //$to = "$line_manager_email, $employee_email, v8alexander@gmail.com, caroline@truckassist.co.za, debi@truckassist.co.za";
        $to = "brian@truckassist.co.za";
        $subject = "New leave application form submitted by $logged_by";

        $message = "
        <html>
            <head>
                <title>Leave Application alert</title>
            </head>
        <body>
        <p>A new leave application form has been submitted by $logged_by for dates between $date_of_start & $date_of_end</p>
        <p><a href='https://app.truckassist.co.za/leave-application-status-hr.php'>Click this link to view/approve/decline this leave request</a></p>
        <p>
            <b>Employee Name: </b> $logged_by <br><br>
            <b>Employee Department: </b> $choose_department <br><br>
            <b>Employee's Posistion: </b> $employee_position <br><br
            <b>Employee's E-mail: </b> $employee_email <br><br>
            <b>Line manager's E-mail: </b> $line_manager_email <br><br> 
            <b>Number of days taken: </b> $number_of_days_taken <br><br>
            <b>Leave Type: </b> $leave_type <br><br>
            <b>Employee's Signature: </b> $your_signature <br><br>
           
            <b>Start date of leave: </b> $date_of_start <br><br>
            <b>End date of leave: </b> $date_of_end <br><br>
            <b>HR Comments: </b> $hr_comments <br>
        </p>
        </body>
        </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <support@truckassist.co.za>' . "\r\n";
        $headers .= 'Cc: brian@truckassist.co.za' . "\r\n";

        mail($to,$subject,$message,$headers);

END OF PHP E-MAIL 2*/

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
								  <li class="active">Submitted Leave Application Form</li>
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
									<h2>Submitted Leave Application Form</h2>
									<div class="job-details">
					<h4>
                        <p>
                        <a href="leave-application-status-employee.php"><button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> View all leave applications</button></a>
                        <a href="leave-application-form-employee.php"><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Log another leave application</button></a>
                        <!--a href="faults-log-ajax-search.php"><button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-search"></span> Search for logged faults</button></a-->
                        <!--button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-refresh"></span> Refresh</button-->
                        <a href="login-home.php"><button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-off"></span> Close</button></a>
                        </p>
                    </h4>
<br>

 <div class="row">    	
<div class="col-sm-12" style="">
	<legend><h5>Your decision has been successfully sent to: <span style="color:red"><?php echo $logged_by; ?></span> and a copy sent to <span style="color:red">Petro (HR)</span> & <span style="color:red">Debi (Admin)</span></h5>
</legend>
	</div>
</div>
 <div class="row">    	
<div class="col-sm-6" style="">
<fieldset>

<p><b>Logged by:</b> <?php echo $logged_by; ?></p>
<p><b>Employee's department:</b> <?php echo $choose_department; ?></p>
<p><b>Employee's position: </b> <?php echo $employee_position; ?></p>
<p><b>Employee's e-mail: </b> <?php echo $employee_email; ?></p>
<p><b>Line manager's e-mail: </b> <?php echo $line_manager_email; ?></p>
<p><b>Number of days taken: </b> <?php echo $number_of_days_taken; ?></p>
<p><b>Has the leave been approved?: </b> <?php echo $leave_approved_by_hr; ?></p>
<p><b>HR Comments: </b> <?php echo $hr_comments; ?></p>
<p><b>Start date of holiday: </b> <?php $date_of_start = @date("Y-m-d", strtotime($_POST["date-of-start"])); echo $date_of_start;?></p>
<p><b>End date of holiday: </b> <?php $date_of_end = @date("Y-m-d", strtotime($_POST["date-of-end"])); echo $date_of_end;
?></p>

<p>
    <!--b>Supporting Document: </b-->
    <?php
    /* START OF IMAGE UPLOAD LOG*/

        /* END OF IMAGE UPLOAD LOG*/
    ?>
</p>

</fieldset>
</div>
        	

        	  <div class="col-sm-6" style="">
        	  </div>     
      </div>
										
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
									<p>Copyright &copy; 2018 . All Rights Reserved. Designed by <a href="http://www.truckassist.com/">truckassist.com</a> </p>
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