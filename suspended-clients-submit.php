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

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imagename=$_FILES["fileToUpload"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));

$uploadOk = 1;
$imageFileType = pathinfo($imagename,PATHINFO_EXTENSION);
//echo $imageFileType;

/* START OF IMAGE UPLOAD LOG*/
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "The picture is a valid image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "The picture is not a valid image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else{
//Get the content of the image and then add slashes to it 
$imagetmp=addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));
echo "and the file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded succesfully.";
    }
/* END OF IMAGE UPLOAD LOG*/

/*$imagename=$_FILES["fileToUpload"]["name"]; 
$uploadOk = 1;
$imageFileType = pathinfo($imagename,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($imagename)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else{
//Get the content of the image and then add slashes to it 
$imagetmp=addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));
echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } */

	$created_by = $_POST["created-by"];
	$client_name = $_POST["client-name"];
	$suspension_reason = $_POST["suspension-reason"];
	$days_outstanding = $_POST["days-outstanding"];
	$outstanding_120 = $_POST["outstanding-120"];
	$outstanding_90 = $_POST["outstanding-90"];
	$outstanding_60 = $_POST["outstanding-60"];
	$outstanding_30 = $_POST["outstanding-30"];
	$client_email_address = $_POST["client-email-address"];
	$account_suspended = $_POST["radio"];  
	$date_of_log = $_POST["date-of-log"];
	$date_of_last_contact = $_POST["date-of-last-contact"];
	$upload_picture = $_POST["fileToUpload"];
	//$upload_picture_name = $_POST["fileToUpload"];
	$comments = $_POST["comments"];

	/*START OF PHP MAIL-1*/
        $to = "support@truckassist.co.za";
        $subject = "$client_name has been suspended";

        $message = "
        <html>
            <head>
                <title>Client Suspension Alert</title>
            </head>
        <body>
        <p>A new client has been suspended by $created_by</p>
        <p><a href='https://app.truckassist.co.za/suspended-accounts-records.php'>Click this link to view this suspended client</a></p>
        <p>
        	<p><b>Created By:</b> $created_by</p>
			<p><b>Client Name:</b> $client_name</p>
			<p><b>Client's e-mail account:</b> $client_email_address</p>
			<p><b>Suspension Reason: </b> $suspension_reason</p>
			<p><b>Days Outstanding </b> $days_outstanding</p>
			<p><b>Date of Log: </b> $date_of_log</p>
			<p><b>Date e-mail sent to client:</b> $date_of_last_contact</p>
			<p><b>Comments?: </b> $comments </p>
        </p>
        </body>
        </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <support@truckassist.co.za>' . "\r\n";
        $headers .= 'Cc: support@truckassist.co.za, brian@truckassist.co.za, debi@truckassist.co.za, nastasha@truckassist.co.za, osman@truckassist.co.za, logistics@truckassist.co.za, cale@truckassist.co.za, zakiyyah@truckassist.co.za, ops@truckassist.co.za, ops3@truckassist.co.za, shanaaz@truckassist.co.za, video1@truckassist.co.za, ops1@truckassist.co.za, adrian@truckassist.co.za, wendell@truckassist.co.za, chelsea@truckassist.co.za' . "\r\n";

        mail($to,$subject,$message,$headers); 

/*END OF PHP MAIL-1*/

	/*START OF PHP MAIL-2*/
        $to = "$client_email_address";
        $subject = "$client_name, your account with Truck Assist has been suspended.";

        $message = "
    <html>
        <head>
            <title>Outstanding Payment Alert</title>
        </head>
        <body>
            <p>Your account been suspended by $created_by</p>
            <p>Dear Truck Assist Client, kindly note, your services have been suspended as your account is in arrears. Please settle your account in full & forward proof of payment to debi@truckassist.co.za to have your services re-activated. </p>
            <p>Kind regards,<br> TRUCK ASSIST S.A. (PTY) LTD</p>
        
            <p>
    			<b>Client Name:</b> $client_name<br>
    			<b>Suspension Reason: </b> $suspension_reason<br>
    			<b>Days Outstanding </b> $days_outstanding<br>
    			<b>Date of Log: </b> $date_of_log<br>
    			<b>Date e-mail sent to client:</b> $date_of_last_contact<br>
    			<b>Comments? </b> $comments <br>
                <!--img src='img/logo.png' alt='Truck Assist Logo' width='' height='50'-->
            </p>

        </body>
    </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <noreply@truckassist.co.za>' . "\r\n";
        $headers .= 'Cc: support@truckassist.co.za' . "\r\n";

        mail($to,$subject,$message,$headers); 

/*END OF PHP MAIL-2*/

	$sql = "INSERT INTO suspended_accounts(
            created_by,
			client_name,
			client_email_address,
			suspension_reason,
			days_outstanding,
			outstanding_120,
			outstanding_90,
			outstanding_60,
			outstanding_30,
			account_suspended,
			date_of_log,
			date_of_last_contact,
			upload_picture,
            upload_picture_name,
			comments)
			VALUES(
			'$created_by',
			'$client_name',
			'$client_email_address',
			'$suspension_reason',
			'$days_outstanding',
			'$outstanding_120',
			'$outstanding_90',
			'$outstanding_60',
			'$outstanding_30',
           	'$account_suspended',
			'$date_of_log',
			'$date_of_last_contact',
			'$imagetmp',
            '$imagename',
			'$comments')";
        
			if (mysqli_query($conn, $sql)) {
    			echo "Suspended client $client_name added successfully";
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
								  <h1>Administration</h1>
								</div>
								<ol class="breadcrumb">
								  <li><a href="#">Home</a></li>
								  <li><a href="#">Administration</a></li>
								  <li class="active">Suspended Acounts</li>
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
									<!--h2>Saved QC Record</h2-->
									<div class="job-details">
										 <h4>
										 	<br>
                        <p>
                        <a href="suspended-clients.php"><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Add another suspended client</button></a>
                        <!--a href="faults-log-ajax-search.php"><button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-search"></span> Search for logged faults</button></a>
                        <a href="faults-log-report.php"><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span> View Reports</button></a-->
                        <a href="suspended-accounts-records.php"><button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> View All Suspended Clients</button></a>
                        <a href="login-home.php"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-off"></span> Exit</button></a><br>
                        <p>Your form has been successfully saved to the <span style="color:red">Suspended Clients Database</span></p>
                    </p>
                    </h4>
        <div class="row">     	
<div class="col-sm-6" style="">
<fieldset>
<!--legend>Review details of logged QC Record</legend-->

<p><b>Created By: </b> <?php echo $created_by; ?></p>
<p><b>Client Name:</b> <?php echo $client_name; ?></p>
<p><b>Client Email Address:</b> <?php echo $client_email_address; ?></p>
<p><b>Suspension Reason: </b> <?php echo $suspension_reason; ?></p>
<p><b>Days Outstanding: </b> <?php echo $days_outstanding; ?></p>
<p><b>Date of Log: </b> <?php echo $date_of_log;?></p>
<p><b>Was Client E-mailed?: </b> <?php echo $date_of_last_contact;?></p>
<p><b>Date Client Was E-mailed: </b> <?php echo $account_suspended;?></p>
<p><b>Supporting Document: </b> <?php echo $imagename; ?></p>
<p><b>Comments?: </b> <?php echo $comments; ?></p>
<p>
    <b>Supporting Document Status: </b>
    <?php
    /* START OF IMAGE UPLOAD LOG*/
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    //echo "The picture is a valid image - " . $check["mime"] . "";
                    $uploadOk = 1;
                } else {
                    echo "The picture is not a valid image.";
                    $uploadOk = 0;
                }
            }

            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                echo " Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo " Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else{
            //Get the content of the image and then add slashes to it 
            $imagetmp=addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));
            echo "". basename( $_FILES["fileToUpload"]["name"]). " is a valid image and has been uploaded succesfully.";
                }
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