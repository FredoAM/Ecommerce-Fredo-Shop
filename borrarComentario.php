<?php


include("db.php");

header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type");
header('Access-Control-Allow-Origin: *');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the comment data from the request body
    $commentData = json_decode(file_get_contents('php://input'), true);
    
  
      // Prepare and execute the SQL statement to insert the comment into the database
      $stmt = $conn->prepare('DELETE FROM comments WHERE comment_id = ?');
      $stmt->bind_param('s', $commentData['comment_id']);
      $stmt->execute();
  
      // Return a success response
      http_response_code(200);
      echo json_encode(['message' => 'Comment deleted successfully']);
      exit;
  }


  $conn->close();
?>

