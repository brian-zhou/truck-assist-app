<?php
$to = "brian@truckassist.co.za, brizhou@gmail.com";
$subject = "New fault logged";

$message = "
<html>
    <head>
        <title>Fault log alert</title>
    </head>
<body>
<p>A new fault has been logged for $client_name by $logged_by </p>
<p>
    <b>Registration No.: </b>'$reg_number', <br>
    <b>Fleet No.: </b>'$fleet_number', <br>
    <b>Repaired by: </b>'$repaired_by', <br>
    <b>Fault confirmed?: </b>'$fault_confirmed', <br>
    <b>Type of damage: </b>'$type_of_damage', <br>
    <b>Date fault was logged:</b>'$date_of_log', <br>
    <b>Date repair was completed: </b>'$date_of_complete', <br>
    <b>Addidtional notes: </b>'$additional_notes
</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@truckassist.co.za>' . "\r\n";
$headers .= 'Cc: brian@truckassist.co.za' . "\r\n";

mail($to,$subject,$message,$headers);
?>