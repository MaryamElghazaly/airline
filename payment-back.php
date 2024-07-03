<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$cardtype = $_POST['cardtype'];
$cardnumber = $_POST['cardnumber'];
$expdate = $_POST['expiration'];
$cvv = $_POST['cvv'];
$price = $_POST['price'];
$flight_id = $_POST['flight_number'];

// Insert data into payment table
$sql = "INSERT INTO payment (name, email, cardtype, cardnumber, expdate, cvv, price, flight_id)
        VALUES ('$name', '$email', '$cardtype', '$cardnumber', '$expdate', '$cvv', '$price', '$flight_id')";

if (mysqli_query($conn, $sql)) {
  echo "Payment successful.";
  header('location: flight-search.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
