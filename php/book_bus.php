<?php
include 'connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$bus_id = $_POST['bus'];

$sql = "INSERT INTO bookings (user_name, user_email, bus_id, booking_time) VALUES ('$name', '$email', $bus_id, NOW())";

if ($conn->query($sql) === TRUE) {
    echo "Booking successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
