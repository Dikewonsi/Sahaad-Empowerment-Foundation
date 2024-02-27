<?php
// conection file to connect web portal to database 

$servername = "localhost"; // your host
$username1 = "root";// database username
$password = ""; // database password
$database="sahaad"; // database name

// $servername = "localhost"; // your host
// $username1 = "u310104196_root";// database username
// $password = "Bootstrap123$"; // database password
// $database="u310104196_db"; // database name

// Create connection
$conn = new mysqli($servername, $username1, $password, $database);

// Check connection or produce error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

