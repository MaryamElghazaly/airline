<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get the form data
    $booking_id = mysqli_real_escape_string($conn, $_POST["booking_id"]);
    $flight_number = mysqli_real_escape_string($conn, $_POST['flight_number']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $adult = mysqli_real_escape_string($conn, $_POST['adult']);
    $children = mysqli_real_escape_string($conn, $_POST['children']);
    $departure_location = mysqli_real_escape_string($conn, $_POST['departure_location']);
    $destination = mysqli_real_escape_string($conn, $_POST['destination']);
    $arrival_date = mysqli_real_escape_string($conn, $_POST['arrival_date']);
    $leaving = mysqli_real_escape_string($conn, $_POST['leaving_date']);
    $cabin = mysqli_real_escape_string($conn, $_POST['cabin']);

    // Update the booking in the database
    $sql = "UPDATE book_form SET flight_number=?, name=?, email=?, address=?, adult=?, children=?, `from`=?, `to`=?, arrivals=?, leaving    =?, cabin=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssssssssssi", $flight_number, $name, $email, $address, $adult, $children, $departure_location, $destination, $arrival_date, $leaving, $cabin, $booking_id);

    if (mysqli_stmt_execute($stmt)) {
        echo "Booking updated successfully";
    } else {
        echo "Error updating booking: " . mysqli_error($conn);
    }
    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($conn);
?>
