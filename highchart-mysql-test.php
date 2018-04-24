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

    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
    <script src="highcharts/highcharts.js"></script>
    <script src="highcharts/highcharts-3d.js"></script>
    <script src="highcharts/modules/exporting.js"></script> 
    <link rel="shortcut icon" href="img/truck-2.ico">
</head>

<body>
<?php
include('include/connection.php');

    $sql = "SELECT * FROM logged_faults";
    $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
          	$data[0] = $row['logged_by'];
          	//var_dump($data);
           	}
?>
<div id="container" style="height: 400px"></div>
	<script type="text/javascript">
		var chart = new Highcharts.chart('container', {
			chart: {
				renderTo: 'container'
			},
			series: [{
					data: [<?php echo join($data, ',') ?>],
					pointStart: 0,
					pointInterval
			}]
		});
	</script>
</div>

<?php
mysqli_close($conn);
?>
</body>>