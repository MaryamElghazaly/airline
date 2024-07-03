<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "airline";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO book_form (name, email, flight_number, address, adult, children, `from`, `to`, arrivals, leaving, cabin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssiiissss", $name, $email, $flight_number, $address, $adult, $children, $from, $to, $arrivals, $leaving, $cabin);

    // Set parameters and execute
    $name = $_POST["name"];
    $email = $_POST["email"];
    $flight_number = $_POST["flight_number"];
    $address = $_POST["address"];
    $adult = $_POST["adult"];
    $children = $_POST["children"];
    $from = $_POST["from"];
    $to = $_POST["to"];
    $arrivals = $_POST["arrival"];
    $leaving = $_POST["leaving"];
    $cabin = $_POST["cabin"];

    $stmt->execute();

    // Get the ID of the most recent booking
    $id = mysqli_insert_id($conn);

    // Close statement and connection
    $stmt->close();
    mysqli_close($conn);

    // Redirect to confirmation page with ID in the URL
    header("Location: confirmation.php?id=$id");
    exit;
}
?>