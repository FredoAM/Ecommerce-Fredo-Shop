<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "ecommerce_db") or die("not connected" . mysqli_connect_error());




if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve product data from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
$products = [];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $products[] = $row;
  }
}

// Return product data as JSON
header('Content-Type: application/json');
echo json_encode($products);



$conn->close();
?>
