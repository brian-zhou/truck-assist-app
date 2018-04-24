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
    <link href="css/tabs.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/truck-2.ico">
    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

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
                                  <h1>Admin</h1>
                                </div>
                                <ol class="breadcrumb">
                                  <li><a href="#">Home</a></li>
                                  <li><a href="#">Administration</a></li>
                                  <li class="active">Suspensions</li>
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
                                    <p><h4>Suspensions</h4></p>
                                    <div class="job-details">
                                        <h4>
                        <p>
                        <a href=""><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-export"></span> Download PDF</button></a>
                        <!--a href="faults-log-ajax-search.php"><button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-search"></span> Search for logged faults</button></a>
                        <a href="faults-log-report.php"><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span> View Reports</button></a-->
                        <a href="suspended-accounts-records.php"><button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> View All Suspended Accounts</button></a>
                        <a href="login-home.php"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-off"></span> Cancel</button></a><br><br>

                        
                        <!--p><marquee><h4 style="color: maroon"><?php echo "Today is " . @date("d-m-Y")?> </h4></marquee></p-->
                        <br>
                        </p>
                    </h4>

                        <p><h4>Add a suspended client</h4></p>
                        <div class="alert" >
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>PLEASE NOTE! </strong><span class="blink_me"> This form should only be completed by <u>Adrian<u/> & <u>Debi</u></span>
                        </div>

<hr>                        <p><div class="row">
            <div class="col-sm-4">

                <form action="suspended-clients-submit.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="device-type">Created By:</label>
                        <select class="form-control" id="created-by" name="created-by">
                            <option>---Select your name---</option>
                            <option>Debi</option>
                            <option>Adrian</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="client-name">Client Name:</label>
                        <select class="form-control" id="client-name" name="client-name">
                            <option>---Select a client---</option>
                            <option>All Port Cargo</option>
                            <option>AM Security</option>
                            <option>Atang Logistics</option>
                            <option>ATS Transport</option>
                            <option>Autogistix</option>
                            <option>Baleka</option>
                            <option>Boetie</option>
                            <option>Bulldog</option>
                            <option>Campos</option>
                            <option>Cape Cement</option>
                            <option>Christiana Francis Liebenberg</option>
                            <option>Corpclo 1071 CC T/A Hospitality</option>
                            <option>Cosmas Chifamba</option>
                            <option>Cosworth Carriers</option>
                            <option>Danny's Auto</option>
                            <option>David Woodley</option>
                            <option>De Wet Vrugte en Vervoer</option>
                            <option>Decore</option>
                            <option>DMJ</option>
                            <option>Duncan Stead</option>
                            <option>Eldo Coaches</option>
                            <option>Eljo</option>
                            <option>Fox Transport</option>
                            <option>Genesis K9</option>
                            <option>Gerrys Motors</option>
                            <option>GP van Niekerk</option>
                            <option>Gundle Plastics Group</option>
                            <option>Grain Carriers South Africa</option>
                            <option>Grain Carriers Namibia</option>
                            <option>Groenberg Cartage</option>
                            <option>H&M Removals</option>
                            <option>Hal Transport</option>
                            <option>Harmhout</option>
                            <option>Hencat Trpt</option>
                            <option>Herlendir Transport</option>
                            <option>HG Travel Services</option>
                            <option>Hitech Tyres</option>
                            <option>Howard Chandawana</option>
                            <option>Indigo Rain/LM Vervoer</option>
                            <option>Jahvis Transport</option>
                            <option>JJZ Gerber Houtwerke BK</option>
                            <option>Johista</option>
                            <option>Justin Lusso</option>
                            <option>KW van Wyk</option>
                            <option>K&H Freight</option>
                            <option>Leon Van Vuuren Bulk Carriers</option>
                            <option>Liberty Foods</option>
                            <option>LMC Express</option>
                            <option>Lourensford</option>
                            <option>Lucerne Transport</option>
                            <option>MA Duplessis</option>
                            <option>M&A Logistics</option>
                            <option>Mgebe Security</option>
                            <option>MK Exotic Tours</option>
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
                            <option>Siyabonwa Logistics</option>
                            <option>Star of Life</option>
                            <option>ST Couriers</option>
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
                        <label for="suspension-reason">Suspension Reason:</label>
                        <select class="form-control" id="suspension-reason" name="suspension-reason">
                            <option>---Select a reason for suspension---</option>
                            <option>Non payment (account in arrears)</option>
                            <option>Client requested cancellation</option>
                            <option>Other (Specify reason in comment box)</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="test-dropdown">Days outstanding:</label>
                        <select class="form-control" id="days-outstanding" name="days-outstanding">
                            <option>---Select number of days outstanding---</option>
                            <option>Nil Balance Owing</option>
                            <option>120+</option>
                            <option>90</option>
                            <option>60</option>
                            <option>30</option>                    
                        </select>
                    </div>
                  
            </div>

            <div class="col-sm-4">

                    <div class="form-group">
                        <label for="outstanding-120">Outstanding balance 120 + &ensp;&nbsp;</sup></label>
                        <input type="text" class="outstanding-120" name="outstanding-120">
                    </div>

                    <div class="form-group">
                        <label for="outstanding-90">Outstanding balance 90 + &ensp;&ensp;&nbsp;</sup></label>
                        <input type="text" class="outstanding-90" name="outstanding-90">
                    </div>

                    <div class="form-group">
                        <label for="outstanding-60">Outstanding balance 60 + &ensp;&ensp;&nbsp;</sup></label>
                        <input type="text" class="outstanding-60" name="outstanding-60">
                    </div>

                    <div class="form-group">
                        <label for="outstanding-30">Outstanding balance 30 + &ensp;&ensp;&nbsp;</sup></label>
                        <input type="text" class="outstanding-30" name="outstanding-30">
                    </div>

                    <!--div class="form-group">
                        <label for="contact-phone-number">Client's Contact Phone <sup>No</sup></label>
                        <input type="number" class="contact-phone-number" name="contact-phone-number">
                    </div-->

                    <label for="upload-picture">Upload picture of any supporting evidence:</label>
                    <p><input type="file" name="fileToUpload" id="fileToUpload"></p>

            </div>

            <div class="col-sm-4">

                <div class="form-group">
                    <label for="date">Date Logged (Time Stamp): </label>
                    <input type="text" name="date-of-log" value="<?php echo date('d-m-Y')?>" >
                </div>

            <div class="form-group">
                <label for="client-email-address">Client's e-mail address: &ensp;  &ensp;&nbsp;</label>
                <input type="email" class="client-email-address" name="client-email-address" placeholder="e.g. client@email.co.za">
             </div>


             <div id="qc-approved">        
                 <label for="qc-approved">Has client been e-mailed about the outstanding balance?</label>
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
                    <label for="date">Date client was e-mailed:&nbsp;&ensp;&ensp;</label>
                    <input type="date" name="date-of-last-contact">
                </div>
                
           

              
                <div class="form-group">
                    <label for="Comments">Comments?:</label>
                    <textarea class="form-control" rows="3" id="comments" name="comments"></textarea>
                </div>

            </div>

                <br>
           
            </div>
           
         <input type="submit" name="submit" class="btn btn-success" value = "Add to Suspended List" style="margin-bottom: 40px;">
    
        </form>
            
                                        
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.job-page-wrapper -->
                    </div><!-- /.content-wrapper -->
                </div><!-- /.container --></p>
                    </div>
                </div>

       
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
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
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
