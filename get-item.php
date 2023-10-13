<?php
// Connect to the database
include("db.php");

header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type");
header('Access-Control-Allow-Origin: *');


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

// Handle GET request to fetch comments for a movie
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  // Retrieve the movie ID from the request URL
  $id = $_GET['item'];

  // Prepare and execute the SQL statement to fetch comments for the given movie ID
  $stmt = $conn->prepare('SELECT * FROM products WHERE id = ?');
  $stmt->bind_param('s', $id);
  $stmt->execute();

  // Fetch the comments from the database
  $result = $stmt->get_result();
  $item = $result->fetch_all(MYSQLI_ASSOC);

}

?>

