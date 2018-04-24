<?php
include('include/connection.php');

// output headers so that the file is downloaded rather than displayed
header('Content-type: text/csv');
header('Content-Disposition: attachment; filename="Truckassist client faults.csv"');
 
// do not cache the file
header('Pragma: no-cache');
header('Expires: 0');

//open the file clients.csv for writing
$file = fopen('php://output', 'w');

//save the column headers
//fputcsv($file, array('Column 1','Column 2','Column 3','Column 4'));

    $sql = "SELECT id, client_name, fleet_number, reg_number, type_of_damage, upload_picture_name, fault_confirmed, logged_by, date_of_log, date_of_complete, repaired_by, log_resolved, additional_notes, resolution_notes FROM logged_faults";
    $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
          	fputcsv($file, $row);
           	}

//close the file
fclose($file);

mysqli_close($conn);

/**
//Sample data
$data = array(
	    array('Data 11', 'Data 12', 'Data 13', 'Data 14', 'Data 15'),
	    array('Data 21', 'Data 22', 'Data 23', 'Data 24', 'Data 25'),
	    array('Data 31', 'Data 32', 'Data 33', 'Data 34', 'Data 35'),
	    array('Data 41', 'Data 42', 'Data 43', 'Data 44', 'Data 45'),
	    array('Data 51', 'Data 52', 'Data 53', 'Data 54', 'Data 55'));

//save each row of data
foreach ($data as $csv){
	fputcsv($file, $csv);
} **/