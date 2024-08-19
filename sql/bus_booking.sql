CREATE DATABASE bus_booking_db;

USE bus_booking_db;

CREATE TABLE buses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    bus_name VARCHAR(100),
    bus_number VARCHAR(50),
    seats_available INT,
    departure_time DATETIME,
    arrival_time DATETIME
);

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(100),
    user_email VARCHAR(100),
    bus_id INT,
    booking_time DATETIME,
    FOREIGN KEY (bus_id) REFERENCES buses(id)
);
