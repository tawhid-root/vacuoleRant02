<?php
$servername = "localhost"; // XAMPP runs MySQL on localhost
$username = "root";        // Default username for MySQL in XAMPP
$password = "";            // Default password is an empty string
$dbname = "bus_booking_db"; // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
