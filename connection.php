<?php
$servername = "localhost";
$username = "root"; // default MySQL username
$password = ""; // default MySQL password (or 'root' if set)
$dbname = "donorlink";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
 