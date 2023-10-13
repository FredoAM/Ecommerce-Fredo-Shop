<?php
include("db.php");

header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type");
header('Access-Control-Allow-Origin: *');

echo json_encode(["message" => "There was a problem with the sign up"]);

?>


