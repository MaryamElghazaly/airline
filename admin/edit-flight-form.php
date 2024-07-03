<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get form data
    $flight_id = $_POST['flight-id'];
    $departure_location = $_POST['departure-location'];
    $destination = $_POST['destination'];
    $departure_date = $_POST['departure-date'];
    $departure_time = $_POST['departure-time'];
    $arrival_date = $_POST['arrival-date'];
    $arrival_time = $_POST['arrival-time'];
    $price = $_POST['price'];

    // Prepare and execute SQL query to update flight data
    $sql = "UPDATE flights SET departure_location='$departure_location', destination='$destination', departure_date='$departure_date', departure_time='$departure_time', arrival_date='$arrival_date', arrival_time='$arrival_time', price='$price' WHERE flight_number='$flight_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Flight updated successfully";
    } else {
        echo "Error updating flight: " . mysqli_error($conn);
    }
}

// Get flight data to pre-fill the form
$flight_id = $_GET['flight-id'];
$sql = "SELECT * FROM flights WHERE flight_number='$flight_id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
    echo "Flight not found";
}

mysqli_close($conn);
?>