<?php
$servername = getenv("MYSQL_SERVICE_HOST");
$username = "admin";
$password = "admin";

// Create connection
$conn = new mysqli($servername, $username, $password);


echo "Before Connection";

// Check connection
if ($conn->connect_error) {
  echo("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
