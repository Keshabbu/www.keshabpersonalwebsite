<?php
$servername = "localhost"; // Your MySQL server, usually localhost
$username = "root";        // Your MySQL username
$password = "Keshab";            // Your MySQL password (leave empty if none)
$dbname = "personal_website"; // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>