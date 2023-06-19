<?php
 include('connection.php');
// Retrieve data from the database
$sql = "SELECT * FROM orders";
$result = mysqli_query($conn, $sql);

// Create an array to hold the data
$data = array();
while($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}

// Convert data to JSON format
$json = json_encode($data);

// Set content type header to application/json
header('Content-Type: application/json');

// Output the JSON object
echo $json;

// Close the connection
mysqli_close($conn);
?>