<!DOCTYPE html>
<html>
    <head>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table, td, th {
        border: 1px solid black;
        padding: 5px;
    }

    th {text-align: left;}
    </style>
    </head>
<body>

<?php
// Array with names
$a[] = "All Port Cargo";
$a[] = "Atang Logistics";
$a[] = "ATS Transport";
$a[] = "Autogistix";
$a[] = "Baleka";
$a[] = "Boetie";
$a[] = "Bulldog";
$a[] = "Campos";
$a[] = "Cape Cement";
$a[] = "Corpclo 1071 CC T/A Hospitality";
$a[] = "Cosworth Carriers";
$a[] = "Danny's Auto";
$a[] = "David Woodley";
$a[] = "De Wet Vrugte en Vervoer";
$a[] = "Decore";
$a[] = "DMJ";
$a[] = "Eldo Coaches";
$a[] = "Fox Transport";
$a[] = "Goenberg";
$a[] = "GP van Niekerk";
$a[] = "Grain Carriers South Africa";
$a[] = "Groenberg Cartage";
$a[] = "H&M Removals";
$a[] = "Harmhout";
$a[] = "Herlendir Transport";
$a[] = "HG Travel Services";
$a[] = "JJZ Gerber Houtwerke BK";
$a[] = "Johista";
$a[] = "Justin Lusso";
$a[] = "Leon Van Vuuren Bulk Carriers";
$a[] = "LMC Express";
$a[] = "Lucerne Transport";
$a[] = "M&A Logistics";
$a[] = "MultiSnack";
$a[] = "New Aproach";
$a[] = "Pk Vleis";
$a[] = "RB & Sons";
$a[] = "RMG Trucking";
$a[] = "RPH";
$a[] = "Silver Meadow";
$a[] = "Siyabonwa";
$a[] = "Swartland Logistics";
$a[] = "Tacet";
$a[] = "Themba Transport";
$a[] = "Thido Carriers Trust";
$a[] = "Top Crop";
$a[] = "VDM Vervoer";
$a[] = "Virgo";
$a[] = "Wamatha Logistics";
$a[] = "WP Vleis";
$a[] = "Yatcht Camera";

$q = ($_GET['q']);
// get the q parameter from URL
$q = $_REQUEST["q"];
//$search = $_GET["search"];
$hint = "";

//start of AJAX code
// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "No suggestions, check your spelling..." : $hint;

//-- End of Ajax Code -->

include('include/connection.php');

$sql = "SELECT * FROM logged_faults WHERE client_name LIKE '".$q."%' ORDER BY `id` DESC";
$result = mysqli_query($conn, $sql);

echo "<form method = 'POST' action = 'faults-log-form-view-edit.php'>";
if (mysqli_num_rows($result)>0){
        echo "<table class='table table-hover table table-bordered'>";
        echo "<tr>";
        echo "<th>Logged By</th>";
        echo "<th>Registration No.</th>";
        echo "<th>Fleet No.</th>";
        echo "<th>Client's Name</th>";
        echo "<th>Repaired By</th>";
        echo "<th>Fault Confirmed</th>";
        echo "<th>Fault Type</th>";
        echo "<th>Date Logged</th>";
        echo "<th>Date Completed</th>";
        //echo "<th>Picture Upload</th>";
        echo "<th>Uploaded Picture Name</th>";
        echo "<th>Addtional Notes</th>";
        echo "<th>View/Edit Record</th>";
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

                echo "<td>" . $row["logged_by"] . "</td>";
                echo "<td>" . $row["reg_number"] . "</td>"; 
                echo "<td>" . $row["fleet_number"] . "</td>";
                echo "<td>" . $row["client_name"] . "</td>";
                echo "<td>" . $row["repaired_by"] . "</td>";
                echo "<td>" . $row["fault_confirmed"] . "</td>";
                echo "<td>" . $row["type_of_damage"] . "</td>"; 
                echo "<td>" . $row["date_of_log"] . "</td>";
                echo "<td>" . $row["date_of_complete"] . "</td>"; 
                //echo "<td>" . $row["upload_picture"] . "</td>";
                echo "<td>" . $row["upload_picture_name"] . "</td>";
                echo "<td>" . $row["additional_notes"] . "</td>";
                echo "<td><input type='submit' class='btn btn-success' name='button_id[]' value='" . $row["id"] . "'</td></tr>";
                }
                echo "</form>";
            }
     else {
       // echo ", 0 results returned";
    }
mysqli_close($conn);
?>
</body>
</html>