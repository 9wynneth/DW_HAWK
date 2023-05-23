<?php
include 'connection.php';


// Query to retrieve data from the database
$sql = "SELECT * FROM `customer`";
$result = $conn->query($sql);

// Fetch the data and store it in an array
$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close the connection
$conn->close();

// Send the data as JSON
echo json_encode($data);
?>
