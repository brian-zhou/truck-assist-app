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
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>

                        <div class="container">
                            <div class="content-wrapper">
                                <div class="job-page-wrapper">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Leave Application Form</h3>
                                            <div class="job-details">
                                                <h4>
                        <p>
                        <a href=""><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-export"></span> Download PDF</button></a>
                        <!--a href="faults-log-ajax-search.php"><button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-search"></span> Search for logged faults</button></a>
                        <a href="faults-log-report.php"><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-th-list"></span> View Reports</button></a-->
                        <a href="leave-application-status-employee.php"><button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> View Leave Status</button></a>
                        <a href="login-home.php"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-off"></span> Exit</button></a>

                        <p><marquee><h4 style="color: maroon"><?php echo "Today is " . @date("d-m-Y")?> </h4></marquee>
                                                </p>

                                                </p>
                                                </h4>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-4">

                                                        <form action="leave-application-form-submit.php" method="post" enctype="multipart/form-data">

                                                            <div class="form-group">
                                                                <label for="logged-by">Choose your name:</label>
                                                                <select class="form-control" id="logged-by" name="logged-by">
                                                                    <option>Select Your Name</option>
                                                                    <option>Stefan Smit</option>
                                                                    <option>Candice Stewart</option>
                                                                    <option>Emmerith Daniels</option>
                                                                    <option>Debi Smit</option>
                                                                    <option>Chelsea Stopforth</option>
                                                                    <option>Osman Selemani</option>
                                                                    <option>Nastasha Rex</option>
                                                                    <option>Richard Homu</option>
                                                                    <option>Shanaaz Daniels</option>
                                                                    <option>Pamela C Kapfumvuti</option>
                                                                    <option>Patricia Mpohla</option>
                                                                    <option>Elizabeth Selemani</option>
                                                                    <option>Warrick Braaf</option>
                                                                    <option>Cale Torino</option>
                                                                    <option>Wendell Barry</option>
                                                                    <option>Bronwynne Jordaan</option>
                                                                    <option>Servious Shumba</option>
                                                                    <option>Riyaaz Fredericks</option>
                                                                    <option>Marius Killian</option>
                                                                    <option>Sharidine Danster</option>
                                                                    <option>Rudo Zembe</option>
                                                                    <option>Brian Zhou</option>
                                                                    <option>Stanley K Chiwara</option>
                                                                    <option>Clinton Booysen</option>
                                                                    <option>Kudakwashe J Nyamayaro</option>
                                                                    <option>Jacob Nxumalo</option>
                                                                    <option>Tinashe Karichi</option>
                                                                    <option>Privilege Suluma</option>
                                                                    <option>Zakiyyah Cellie</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="choose-department">Choose your department:</label>
                                                                <select class="form-control" id="logged-by" name="choose-department">
                                                                    <option>Operations</option>
                                                                    <option>Finance/Admin Dept</option>
                                                                    <option>Logistics</option>
                                                                    <option>IT</option>
                                                                    <option>Client Liason</option>
                                                                    <option>Installations</option>
                                                                    <option>Technical/QA</option>
                                                                    <option>Office Maintenance</option>
                                                                    <option>Faults</option>
                                                                    <option>Video Investigations</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="line-manager">Your line manager e-mail:</label>
                                                                <select class="form-control" id="logged-by" name="line-manager-email">
                                                                    <option>adrian@truckassist.co.za</option>
                                                                    <option>caroline@truckassist.co.za</option>
                                                                    <option>debi@truckassist.co.za</option>
                                                                    <option>osman@truckassist.co.za</option>
                                                                    <option>richard@truckassist.co.za</option>
                                                                    <option>nastasha@truckassist.co.za</option>
                                                                    <option>brian@truckassist.co.za</option>

                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="employee-position">Position<sup></sup></label>
                                                                <input type="text" class="form-control" name="employee-position">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="employee-email">Your Truck Assist e-mail address<sup></sup></label>
                                                                <input type="text" class="form-control" name="employee-email">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="number-of-days-taken">Choose the total number of working days taken:</label>
                                                                <select class="form-control" id="logged-by" name="number-of-days-taken">
                                                                    <option>0.5 (half day)</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                    <option>15</option>
                                                                    <option>16</option>
                                                                    <option>17</option>
                                                                    <option>18</option>
                                                                    <option>19</option>
                                                                    <option>20</option>
                                                                    <option>21</option>
                                                                    <option>22</option>
                                                                    <option>23</option>
                                                                    <option>24</option>
                                                                    <option>25</option>
                                                                    <option>26</option>
                                                                    <option>27</option>
                                                                    <option>28</option>
                                                                    <option>29</option>
                                                                    <option>30</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="your-signature">Your Signature <sup>initials only</sup></label>
                                                                <input type="text" class="form-control" name="your-signature">
                                                            </div>
                                                    </div>

                                                    <div class="col-sm-4">

                                                        <div id="leave-type">

                                                            <label for="leave-type">I wish to apply for leave as follows:</label>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="radio" value="Family Responsibility Leave">Family Responsibility Leave</label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="radio" value="Maternity Leave" checked="checked">Maternity Leave</label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="radio" value="Annual Leave">Annual Leave</label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="radio" value="Medical Leave" checked="checked">Medical Leave</label>
                                                            </div>

                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="radio" value="Study Leave">Study Leave</label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="radio" value="Other" checked="checked">Other (Specify Below)</label>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="date">Start date: &nbsp;&ensp;&ensp;</label>
                                                            <input type="date" name="date-of-start">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="date">End Date: &nbsp;&ensp;&ensp;&ensp;</label>
                                                            <input type="date" name="date-of-end">
                                                        </div>

                                                        <br>

                                                        <!-- start of file upload process>  
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <label for="upload-picture">Upload Picture of Damaged Device:</label>
                    <p><input type="file" name="fileToUpload" id="fileToUpload"></p>
                    <p><input type="submit" value="Upload Image" name="submit"></p>
                </form>
                <!-- start of file upload process-->

                                                        <!--
                    <label for="upload-picture">Supporting documentation (e.g. medical certificate, exam schedule etc.):</label>
                    <p><input type="file" name="fileToUpload" id="fileToUpload"></p>
                    <!--p><input type="submit" value="Upload Image" name="submit"></p-->

                                                        <div class="form-group">
                                                            <label for="additional-notes">Comments / Motivation:</label>
                                                            <textarea class="form-control" rows="3" id="" name="additional-notes"></textarea>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-4" style="background-color: beige;">

                                                        <label for="for-official-use-only"><b>For office use only (only HR can edit this part):</b></label>

                                                        <div class="form-group">
                                                            <label for="leave-approval"> <sup>no </sup> of days owing</label>
                                                            <input type="text" class="form-control" name="leave-approved-by-hr" readonly>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="days-owing"> <sup>no </sup> of days owing</label>
                                                            <input type="text" class="form-control" name="days-owing" readonly>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="days-taken"> <sup>no </sup> of leave days taken (on this application)</label>
                                                            <input type="text" class="form-control" name="days-taken" readonly>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="days-balance"> <sup>no </sup> of days (balance) owing</label>
                                                            <input type="text" class="form-control" name="days-balance" readonly>
                                                        </div>
                                                        <br>
                                                    </div>
                                                </div>

                                                <hr>

                                                <input type="submit" name="submit" class="btn btn-success" value="Send to HR" style="margin-bottom: 40px;">
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.job-page-wrapper -->
                            </div>
                            <!-- /.content-wrapper -->
                        </div>
                        <!-- /.container -->

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
                                        </div>
                                        <!-- /.footer-widget -->
                                    </div>
                                    <!-- /.col-md-6 -->
                                    <div class="col-md-2 col-sm-4 col-xs-4">
                                        <div class="footer-widget">
                                            <h3 class="wow fadeInDown">External Links</h3>
                                            <ul class="wow fadeInDown">
                                                <li><a href="http://www.safetgateway.co.za/">CMS Gateway Server</a></li>
                                                <li><a href="http://129.232.134.18:8080/808gps/login.html">Vehicle Management System</a></li>
                                                <li><a href="">Truck Assist Website</a></li>
                                                <li><a href="">Track Me Live Website</a></li>
                                            </ul>
                                        </div>
                                        <!-- /.footer-widget -->
                                    </div>
                                    <!-- /.col-md-2 -->
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
                                        </div>
                                        <!-- /.footer-widget -->
                                    </div>
                                    <!-- /.col-md-2 -->
                                    <div class="col-md-2 col-sm-4 col-xs-4">
                                        <div class="footer-widget">
                                            <h3 class="wow fadeInDown">Contact</h3>
                                            <ul class="wow fadeInDown">
                                                <li><a href="#">Reception</a></li>
                                                <li><a href="#">Operations</a></li>
                                                <li><a href="#">IT Support</a></li>
                                            </ul>
                                        </div>
                                        <!-- /.footer-widget -->
                                    </div>
                                    <!-- /.col-md-2 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container -->
                        </section>

                        <footer class="footer-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="copyright wow fadeInDown">
                                            <p>Copyright &copy; 2017 . All Rights Reserved. Designed by <a href="http://www.truckassist.com/">truckassist.com</a> </p>
                                        </div>
                                        <!-- /.copyright -->
                                    </div>
                                    <!-- /.col-md-12 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container -->
                        </footer>
                    </div>
                    <!-- .st-content-inner -->
                </div>
                <!-- .st-content -->
            </div>
            <!-- .st-pusher -->

            <!-- ======== START OFFCANVAS MENU ========= -->
            <div class="menu">
                <?php include 'menu-offcanvas.php';?>
            </div>
            <!-- ======== END OFFCANVAS MENU ========= -->

        </div>
        <!-- /st-container -->

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