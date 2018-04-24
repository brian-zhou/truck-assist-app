<?php
	include('include/connection.php');
	//@header("content-type:image/jpeg");

	if (isset($_GET['id']))
	{
	    
		$button_id = $_GET['id'];
	 	$sql = "SELECT * FROM logged_faults WHERE id = $button_id";
	 	$result = mysqli_query($conn, $sql);

	 	while($row = mysqli_fetch_assoc($result))
	 	{
	       	$upload_picture = $row["upload_picture"];
	        $upload_picture_name = $row["upload_picture_name"];         
	    	$type = 'jpg';
			//header("Content-length: $size");
			header("Content-type: $type");
			header("Content-Disposition: attachment; filename=$upload_picture_name");
			ob_clean();
			flush();
			//echo '<img src="data:image/jpeg;base64,'.base64_encode($upload_picture).'"/>';
			echo $upload_picture;
			mysqli_close($conn);
			exit;
		}
	}
?>