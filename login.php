<?PHP
require_once("./include/membersite_config.php");
// grab recaptcha library
require_once "recaptchalib.php";
if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("login-home.php");
   }
}
// your secret key
$secret = "6Ldg1TgUAAAAAGnQK-_KWHQiHhTFFRdWRmkb7VCL";
 
// empty response
$response = null;
 
// check secret key
$reCaptcha = new ReCaptcha($secret);
?>
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
  <body>
    <div id="st-container" class="st-container">
      <div class="st-pusher">
        <div class="st-content">
          <div class="st-content-inner">
        <section class="page-header-wrapper">
          
        </section>
        <div class="container">
          <div class="content-wrapper" style="margin-top: 5%; margin-left: 31%; margin-right: 31%; margin-bottom: 141%";>
            <div class="job-page-wrapper">
              <div class="row">
                <div class="col-md-12">
                  
                  <div class="job-details">
                    <dl>
            <div class="col-sm-12">
                <!-- Form Code Start -->
                <div id='fg_membersite'>
                  <div id = "login-box">
                    <form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                      <div id = logo>
                  <img src="img/main-logo.png" class="img-responsive" alt="Truck Assist Logo">
                </div>
                        <fieldset>

                            <!--p><legend>Verify Yourself</legend></p-->
                            <div class="form-group">
                                <input type='hidden' name='submitted' id='submitted' value='1' />

                                <div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
                                <div class=''>
                                    <label for='username'>User Name:</label>
                                    <input type='text' class="form-control" name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay(' username ') ?>' maxlength="50" />
                                    <br/>
                                    <span id='login_username_errorloc' class='error'></span>
                                </div>
                                <div class=''>
                                    <label for='password'>Password*:</label>
                                    <br/>
                                    <input type='password' class="form-control" name='password' id='password' maxlength="50" />
                                    <br/>
                                    <span id='login_password_errorloc' class='error'></span>
                                </div>


                            <p style="margin: 0px 60px 10px 60px">
                            <input type='submit' name='Submit' class="btn btn-primary" value='Login' />
                            <a href=""> or forgot password?<span class="glyphicon glyphicon-user"></span></a>
                            </p>

                        </fieldset>
                        <div class="g-recaptcha" name="g-recaptcha-response" data-theme="red" data-sitekey="6Ldg1TgUAAAAALx6yW7O_Z1pjOHHYy0zr1BBp_zq"></div>
                    </form>
                </div>
                </div>
            </div>

                <script type='text/javascript'>
                    // <![CDATA[
                    var frmvalidator = new Validator("login");
                    frmvalidator.EnableOnPageErrorDisplay();
                    frmvalidator.EnableMsgsTogether();

                    frmvalidator.addValidation("username", "req", "Please provide your username");

                    frmvalidator.addValidation("password", "req", "Please provide the password");

                    // ]]>
                </script>
            </div>
                    </dl>
                    
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
