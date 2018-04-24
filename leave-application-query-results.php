<?PHP
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
    <link rel="shortcut icon" href="img/truck-2.ico">
    <script src="js/vendor/modernizr-2.8.1.min.js"></script>

    <style>

    table{ 
        width: 100% !important;
        }
        
    table,th {
            width: 100%;
        }

    </style>
  
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
                                  <h2>Administration</h2>
                                </div>
                                <ol class="breadcrumb">
                                  <li><a href="#">Home</a></li>
                                  <li><a href="#">Admin</a></li>
                                  <li class="active">All requested leave</li>
                                </ol>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>


                <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>List of all leave requests</h3>
                                    <h4>
                                
                                        <a href="leave-application-form.php"><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Complete a new leave application form</button></a>
                                        
                                        <a href="csv-mysql-test.php"><button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-export"></span> Export CSV</button></a>
                                        
                                        
                                        <!--a href="faults-log-ajax-search.php"><button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Search for logged faults</button></a-->
                                        
                                        </p>
                                    </h4> 
                                </div>
                            </div>

                            <div class="row">

<div class="col-md-12" style="margin-left: 0%">                      
<?php
include('include/connection.php');

    $sql = "SELECT * FROM leave_form ORDER BY `id` DESC";
    $result = mysqli_query($conn, $sql);

    echo "<form method = 'POST' action = ''>";
    if (mysqli_num_rows($result)>0){
        echo "<table class='table table-hover table table-bordered' >";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Time Stamp</th>";
        echo "<th>Employee's Name</th>";
        echo "<th>Department</th>";
        echo "<th>E-mail</th>";
        echo "<th>Number of days taken</th>";
        echo "<th>Leave Type</th>";
        echo "<th>Was Leave Approved By Manager</th>";
       // echo "<th>Was Leave Approved By HR</th>";
        echo "<th>Start date of leave</th>";
        echo "<th>End date of leave</th>";
        echo "<th>Supporting Document</th>";
        echo "<th>Motivation</th>";
        echo "<th>Status of Request</th>";
        //echo "<th>HR Comments</th>";
        //echo "<th>N<sup>o</sup> of days owing</th>";
        //echo "<th>N<sup>o</sup> of leave days taken</th>";
        //echo "<th>N<sup>o</sup> of days owing (balance)</th>";
        echo "<br>";
        echo "<br>";
        
        $button_id = array();
        //output data of each row
        $i =0;
        while($row = mysqli_fetch_array($result)){
            if ($i%2==0){
            echo "<tr bgcolor='FFFFFF'>";
            }
            else{
                echo "<tr bgcolor='cde5ef'>";
            }
            $i++;
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["time_stamp"] . "</td>";
                echo "<td>" . $row["logged_by"] . "</td>";
                echo "<td>" . $row["choose_department"] . "</td>"; 
                echo "<td>" . $row["employee_email"] . "</td>";
                echo "<td>" . $row["number_of_days_taken"] . "</td>";
                //echo "<td>" . $row["fault_type"] . "</td>";
                echo "<td>" . $row["leave_type"] . "</td>";
                echo "<td>" . $row["leave_approved_by_manager"] . "</td>";
                
                echo "<td>" . $row["date_of_start"] . "</td>";
                echo "<td>" . $row["date_of_end"] . "</td>"; 
                echo "<td>" . $row["upload_picture_name"] . "</td>";
                echo "<td>" . $row["additional_notes"] . "</td>";
                echo "<td>" . $row["leave_approved_by_hr"] . "</td>";
                //echo "<td>" . $row["hr_comments"] . "</td>"; 
               // echo "<td>" . $row["your_signature"] . "</td>";
                 
                
               
                
                //echo "<td>" . $row["no_of_days_owing"] . "</td>";
                //echo "<td>" . $row["no_of_leave_days_taken"] . "</td>";
                //echo "<td>" . $row["no_of_days_balance"] . "</td>";
                
                //echo "<td><input type='submit' class='btn btn-success' name='button_id[]' value='" . $row["id"] . "'</td></tr>";
             }
                echo "</form>";
            }
     else {
        echo "0 results returned";
    }
mysqli_close($conn);
?></div>
                                
                            </div>
                </div><!-- /.container -->


                


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
