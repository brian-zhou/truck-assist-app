<?php
include('include/connection.php');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM logged_faults ORDER BY `id` DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["id"] . "\t" . $row["logged_by"] . "\t" . $row["date_of_log"]. "<br>";
        //$data[] = $row["id"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>