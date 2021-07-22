<?php
$servername = "localhost";
$username = "ift3225";
$password = "ift3225";
$dbname = "flask_ift3225";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>