<?php
$servername = "sql23.jnb1.host-h.net";
$username = "truckpezfp_3";
$password = "hTg4m9qewj8";
$dbname = "truckpezfp_db3";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if (!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}
?>