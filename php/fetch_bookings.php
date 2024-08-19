<?php
include 'connect.php';

$sql = "SELECT b.id, b.user_name, b.user_email, bu.bus_name, b.booking_time FROM bookings b JOIN buses bu ON b.bus_id = bu.id";
$result = $conn->query($sql);

$bookings = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $bookings[] = $row;
    }
}

echo json_encode($bookings);

$conn->close();
?>
