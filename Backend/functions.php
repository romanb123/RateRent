<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$owner_first_name = $_POST['owner-first-name'] ?? '';
$owner_last_name = $_POST['owner-last-name'] ?? '';
$apartment_address = $_POST['apartment-address'] ?? '';
$renting_start = isset($_POST['renting-start']) ? strtotime($_POST['renting-start']) : time();
$renting_end = isset($_POST['renting-end']) ? strtotime($_POST['renting-end']) : strtotime('+1 year');
$renting_rating = $_POST['renting-rating'] ?? 3;

if (empty($owner_first_name) || empty($owner_last_name)) {
    echo "Owner first name and last name are required.";
    exit;
}

$owner_first_name = mysqli_real_escape_string($conn, $owner_first_name);
$owner_last_name = mysqli_real_escape_string($conn, $owner_last_name);
$apartment_address = mysqli_real_escape_string($conn, $apartment_address);
$renting_start = mysqli_real_escape_string($conn, $renting_start);
$renting_end = mysqli_real_escape_string($conn, $renting_end);
$renting_rating = mysqli_real_escape_string($conn, $renting_rating);

$sql = "INSERT INTO rentals (owner_first_name, owner_last_name, apartment_address, renting_start, renting_end, renting_rating)
VALUES ('$owner_first_name', '$owner_last_name', '$apartment_address', '$renting_start', '$renting_end', '$renting_rating')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
