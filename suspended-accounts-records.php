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
    <link href="css/table.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/truck-2.ico">
    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
    
    <script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
</script>

    <style>
        .alert {
        padding: 20px;
        background-color: #f44336;
        color: white;
        opacity: 1;
        transition: opacity 0.6s;
        margin-bottom: 15px;
        }

        .alert.success {background-color: #4CAF50;}
        .alert.info {background-color: #2196F3;}
        .alert.warning {background-color: #ff9800;}

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
        
                .blink_me {
            animation: blinker 1s linear infinite;
            }

        @keyframes blinker {
        50% {
            opacity: 0;
            }
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
                                  <h2>Admin</h2>
                                </div>
                                <ol class="breadcrumb">
                                  <li><a href="#">Home</a></li>
                                  <li><a href="#">Administration</a></li>
                                  <li class="active">Suspended Accounts</li>
                                </ol>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>


                <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <p><h4>List of all suspended accounts</h4></p>
                                    <h4>
                                        <a href="suspended-clients.php"><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Add another suspended client</button></a>
                                        <a href="suspended-accounts-csv.php"><button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-export"></span> Export CSV</button></a>  
                                        </p>
                                    </h4>
                                    
                         <div class="alert">
  						<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  						<strong>PLEASE NOTE! </strong><span class="blink_me">All ONE clients (Corplo, Atang, RB & Son, Harmhout, K&H, Jahvis, Palm Logistics, KW van Wyk, Sumeil, Bulldog, Decore, Gerry Motors and RPH Logistics) cannot be suspended for snapshot monitoring but other stuff like repairs, installs etc. can be stopped.</span>
						</div>
						
                                </div>
                            </div>

                            <div class="row">

<div class="col-md-12" style="margin-left: 0%">                      
<?php

$hr_comments = "";
//$value = !empty($_POST['value']) ? $_POST['value'] : '';

include('include/connection.php');

    $sql = "SELECT * FROM suspended_accounts ORDER BY `id` DESC";
    $result = mysqli_query($conn, $sql);

    echo "<form method = 'POST' action = ''>";
    if (mysqli_num_rows($result)>0){
    
        echo "<table class='' id='t01' >";
        echo "<tr>";
        echo "<th>Record N<sup>o</sup>.</th>";
        echo "<th>Created By</th>";
        echo "<th>Client Name</th>";
        echo "<th>Suspension Reason</th>";
        echo "<th>Days Outstanding</th>";
        echo "<th>E-mail Sent?</th>";
        echo "<th>Date of Log</th>";
        echo "<th>Date E-mail Sent</th>";
        echo "<th>Uploaded Picture Name</th>";
        echo "<th>Comments</th>";
        echo "<th>Unsuspend Client</th>";
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
                echo "<td>" . $row["created_by"] . "</td>";
                echo "<td>" . $row["client_name"] . "</td>";
                echo "<td>" . $row["suspension_reason"] . "</td>";
                echo "<td>" . $row["days_outstanding"] . "</td>";
                echo "<td>" . $row["account_suspended"] . "</td>";
                echo "<td>" . $row["date_of_log"] . "</td>";
                echo "<td>" . $row["date_of_last_contact"] . "</td>";
                echo "<td>" . $row["upload_picture_name"] . "</td>";
                echo "<td>" . $row["comments"] . "</td>"; 
                echo "<td><button type='submit' class='btn btn-success' name='delete-id'><span class='glyphicon glyphicon-trash'></span> Delete</button> </td>";
                "<td><input type='hidden' name='delete-hidden-id' value='" . $row["id"] . "'</td> </tr>";
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
