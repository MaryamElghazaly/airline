<?php

$connection = mysqli_connect('localhost', 'root', '', 'airline');
if(isset($_POST['add'])){
    // Get the user's information from the form
    $flight_number = mysqli_real_escape_string($connection, $_POST['flight_number']);
    $departure_location = mysqli_real_escape_string($connection, $_POST['departure_location']);
    $destination = mysqli_real_escape_string($connection, $_POST['destination']);
    $departure_date = mysqli_real_escape_string($connection, $_POST['departure_date']);
    $departure_time = mysqli_real_escape_string($connection, $_POST['departure_time']);
    $arrival_date = mysqli_real_escape_string($connection, $_POST['arrival_date']);
    $arrival_time = mysqli_real_escape_string($connection, $_POST['arrival_time']);
    $price = mysqli_real_escape_string($connection, $_POST['price']);
      $sql = "INSERT INTO flights (flight_number, departure_location, destination, departure_date, departure_time, arrival_date, arrival_time, price) VALUES ('$flight_number', '$departure_location', '$destination', '$departure_date', '$departure_time', '$arrival_date', '$arrival_time', '$price')";
      if (mysqli_query($connection, $sql)) {
        echo "Flight added successfully!";
        header('location: add-flight.php');
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }   
}
?>

