<?php ob_start();?>

<?php
require_once 'dompdf/lib/html5lib/Parser.php';
//C:\xampp\htdocs\truck-assist-beta-new\dompdf\lib\php-font-lib\src\FontLib
require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
//require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
require_once 'dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();

// reference the Dompdf namespace
class Font extends FontLib\Font {
    //this is a namespace fix:
}
use Dompdf\Dompdf;
use Dompdf\Options; 
$html = ob_get_clean(); 

 $html = '
<!DOCTYPE html>
<html lang="en">
<title>Truck Assist</title>

	<head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>
        <h1 class=""><a class="" href="login-home.php"><img src="img/logo.png" alt=""></a></h1>
        <div class="container">

	       <div class="row">
	           <div class="col-md-4">
		          <h3>Log a Fault</h3>

                    <div class="form-group">
                        <label for="reg-number">Logged by: </sup></label>
                        <input type="text" class="form-control" name="reg-number">
                    </div>

                    <div class="form-group">
                        <label for="reg-number">Registration <sup>no. </sup></label>
                        <input type="text" class="form-control" name="reg-number">
                    </div>

                    <div class="form-group">
                        <label for="reg-number">Fleet <sup>no.</sup></label>
                        <input type="text" class="form-control" name="fleet-number">
                    </div>

                    <div class="form-group">
                        <label for="sel1">Client"s Name:</label>
                        <select class="form-control" id="client-name" name="client-name">
                            
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="sel1">Repaired by:</label>
                        <select class="form-control" id="repaired-by" name="repaired-by">
                        </select>
                    </div>
<br><hr>
                    <label for="client-notified-of-tamper">Fault Completed?</label>
                        <div class="radio">
                            <label><input type="radio" name="radio" value="Yes">Yes</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="radio" value="No">No</label>
                        </div>
<br><hr>
                <div id="initial-checklist">
                    <label for="type-of-damage">Specify Type of Fault:</label>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="Video Loss" name="fault-type[]">Video Loss</label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="GPS Error" name="fault-type[]">GPS Error </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="Offline" name="fault-type[]">Offline</label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="HDD Error" name="fault-type[]">HDD Error</label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="Camera Removed" name="fault-type[]">Camera Removed</label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="Other" name="fault-type[]">Other</label>
                        </div>
                </div>
<br> <hr>

                 <div class="form-group">
                        <label for="reg-number">Date Logged</label>
                        <input type="text" class="form-control" name="reg-number">
                    </div>

                    <div class="form-group">
                        <label for="reg-number">Date Completed</label>
                        <input type="text" class="form-control" name="fleet-number">
                    </div>
            </div>
	    </div>

        <div class="row">
               <div class="col-md-8">
                    <br><hr>
                <div class="form-group">
                    <label for="comment">Additional Notes of Fault:</label>
                    <input type="text" class="form-control" name="fleet-number">
                </div>

               </div>

               <div class="col-md-4">
               </div>
        </div>
    </div>
	</body>
</html>
';

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

//$pdf_gen = $dompdf->output();

// Output the generated PDF to Browser
$dompdf->stream();

//$full_path = 'C:\xampp\htdocs\truck-assist-beta-new/dompdf/dompdf.pdf';
//if(!file_put_contents($full_path, $pdf_gen)){
//''echo 'Not OK!';
//}else{
//echo 'OK';
?>