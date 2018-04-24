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
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "xml" ) {
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

//mysql_query($insert_image);
	$created_by = $_POST["created-by"];
	$device_type = $_POST["device-type"];
	$device_version_number = $_POST["device-version-number"];
	$disk_type = $_POST["disk-type"];
	$device_no = $_POST["device-number"];
	$device_phone_number = $_POST["device-phone-number"];
	$qc_approved = $_POST["radio"];  
	$date_of_log = $_POST["date-of-log"];
	$date_of_complete = $_POST["date-of-complete"];
	$upload_picture = $_POST["fileToUpload"];
	//$upload_picture_name = $_POST["fileToUpload"];
	$problem = $_POST["problem"];

	$sql = "INSERT INTO quality_control(
            created_by,
			device_type,
			device_version_number,
			disk_type,
			device_no,
			device_phone_number,
			qc_approved,
			date_of_log,
			date_of_complete,
			upload_picture,
            upload_picture_name,
			problem)
			VALUES(
			'$created_by',
			'$device_type',
			'$device_version_number',
			'$disk_type',
			'$device_no',
			'$device_phone_number',
           	'$qc_approved',
			'$date_of_log',
			'$date_of_complete',
			'$imagetmp',
            '$imagename',
			'$problem')";
        
			if (mysqli_query($conn, $sql)) {
    			echo "New QC record created successfully";
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
								  <li><a href="#">Quality Control</a></li>
								  <li class="active">Submitted QC Record</li>
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
                        <a href="qc-details.php"><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span>Log Another QC Record</button></a>
                        <!--a href="faults-log-ajax-search.php"><button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-search"></span> Search for logged faults</button></a>
                        <a href="faults-log-report.php"><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span> View Reports</button></a-->
                        <a href="qc-details-records.php"><button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> View All QC Records</button></a>
                        <a href="login-home.php"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-off"></span> Exit</button></a><br>
                        <p>Your form has been successfully saved to the <span style="color:red">QC Database</span></p>
                    </p>
                    </h4>
        <div class="row">     	
<div class="col-sm-6" style="">
<fieldset>
<!--legend>Review details of logged QC Record</legend-->
<p><b>Device Version_number <sup>no.</sup>:</b> <?php echo $device_version_number; ?></p>
<p><b>Disk Type:</b> <?php echo $disk_type; ?></p>
<p><b>Device <sup>no.</sup> </b> <?php echo $device_no; ?></p>
<p><b>Device Phone <sup>no.</sup> </b> <?php echo $device_phone_number; ?></p>
<p><b>QC Approved: </b> <?php echo $qc_approved; ?></p>
<p><b>Date of Log: </b> <?php echo $date_of_log;?></p>
<p><b>Name of uploaded picture: </b> <?php echo $imagename; ?></p>
<p><b>Problem?: </b> <?php echo $problem; ?></p>
<p>
    <b>Picture Status: </b>
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