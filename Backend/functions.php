<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rent_info";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$owner_first_name = $_POST['owner_first_name'] ?? '';
$owner_last_name = $_POST['owner_last_name'] ?? '';
$apartment_address = $_POST['apartment_address'] ?? '';
$renting_start = isset($_POST['renting_start']) ? date('Y-m-d', strtotime($_POST['renting_start'])) : date('Y-m-d', time());
$renting_end = isset($_POST['renting_end']) ? date('Y-m-d', strtotime($_POST['renting_end'])) : date('Y-m-d', strtotime('+1 year'));
$renting_rating = $_POST['renting_rating'] ?? 3;


$owner_first_name = mysqli_real_escape_string($conn, $owner_first_name);
$owner_last_name = mysqli_real_escape_string($conn, $owner_last_name);
$apartment_address = mysqli_real_escape_string($conn, $apartment_address);
$renting_start = mysqli_real_escape_string($conn, $renting_start);
$renting_end = mysqli_real_escape_string($conn, $renting_end);
$renting_rating = mysqli_real_escape_string($conn, $renting_rating);


$sql = "INSERT INTO rent_info (owner_first_name, owner_last_name, apartment_address, renting_start, renting_end, renting_rating)
VALUES ('$owner_first_name', '$owner_last_name', '$apartment_address', '$renting_start', '$renting_end', '$renting_rating')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
