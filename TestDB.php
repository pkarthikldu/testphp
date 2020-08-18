<?php
$servername = getenv("MYSQL_SERVICE_HOST");
$port= getenv("MYSQL_SERVICE_PORT");
$username = getenv("DBusername");
$password = getenv("DBPassword");
$db=getenv("DBName");

echo "$servername::"+.$servername;
echo "$username::"+.$username;
echo "$password::"+.$password;
echo "$db:::"+.$db;
echo "Before Connection";
// Create connection
$conn = new mysqli($servername,$username,$password, $db);


echo "Before Connection";

// Check connection
if ($conn->connect_error) {
  echo("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
