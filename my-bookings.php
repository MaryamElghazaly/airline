<?php
// Start the session
session_start();

// Connect to the database
$dbhost = 'localhost';
$dbname = 'airline';
$dbuser = 'root';
$dbpass = '';
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    // Redirect to login page if user is not logged in
    header('Location: login.php');
    exit();
}

// Retrieve user email from session
$email = $_SESSION['email'];

// Query the database for the user's bookings
$stmt = $conn->prepare("SELECT * FROM book_form WHERE email = :email");
$stmt->bindParam(':email', $email);
$stmt->execute();
$bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

<!--swiper css link-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

<!--font link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!--css file link-->
<link rel="stylesheet" href="css/test2.css">

</head>
<body>
<!-- header section starts-->


<section class="header">
    <a href="home-user.php" class="logo">Sky-Rider</a>

    <nav class="navbar">
                <a href="home-user.php">Home</a>
				<a href="flight-search.php">Flight Search</a>
                <a href="view-flights.php">View Flights</a>
				<a href="flight-booking.php">Flight Booking</a>
				<a href="my-bookings.php">My Bookings</a>
				<a href="my-profile.php">My Profile</a>
				<a href="about-us-user.php">About Us</a>
				<a href="contact-us-user.php">Contact Us</a>
				<a href="logout.php">Logout</a><
	</nav>
</section>

<!--header section ends-->


<section class="my-bookings">
    <h1 class="heading-title">My Bookings</h1>
    <div class="container">
        <table class="table">
            <tr>
                <th>Booking ID</th>
                <th>Flight Number</th>
                <th>From</th>
                <th>To</th>
                <th>Date</th>
                <th>Departure Time</th>
                <th>Arrival Time</th>
                <th>Seat Type</th>
                <th>Price</th>
                <th>Status</th>
            </tr>
            <?php foreach ($bookings as $booking): ?>
            <tr>
                <td><?php echo $booking['id']; ?></td>
                <td><?php echo $booking['flight_number']; ?></td>
                <td><?php echo $booking['address']; ?></td>
                <td><?php echo $booking['adult']; ?></td>
                <td><?php echo $booking['children']; ?></td>
                <td><?php echo $booking['from']; ?></td>
                <td><?php echo $booking['to']; ?></td>
                <td><?php echo $booking['arrivals']; ?></td>
                <td><?php echo $booking['leaving']; ?></td>
                <td><?php echo $booking['cabin']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</section>

    












<!-- footer starts-->

<section class="footer">
	  <div class="box-container">
	        <div class="box">
	            <h3>Quick Links</h3>
                <a href="home-user.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="flight-search.php"> <i class="fas fa-angle-right"></i>Flights</a>
            <a href="register.php"> <i class="fas fa-angle-right"></i>Register</a>
            <a href="contact-us-user.php"> <i class="fas fa-angle-right"></i>contact Us</a>
	        </div>

	        <div class="box">
	            <h3>Extra Links</h3>
	            <a href="#"> <i class="fas fa-angle-right"></i>FAQS</a>
	            <a href="about-us-user.php"> <i class="fas fa-angle-right"></i>about us</a>
	            <a href="#"> <i class="fas fa-angle-right"></i>privacy pilocy</a>
	            <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
	        </div>

	        <div class="box">
	            <h3>Contact Info</h3>
	            <a href="#"> <i class="fas fa-phone"></i>+2-011-2532-7442</a>
	            <a href="#"> <i class="fas fa-email"></i>fly@gmail.com</a>
	        </div>

	        <div class="box">
	            <h3>Follow Us</h3>
	            <a href="#"> <i class="fab fa-facebook-f"></i>facebook</a>
	            <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
	            <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
	        </div>
	    </div>

	    <div class="credit"> Created by <span>our professional group</span>  <br>
		  &copy;2023 Airline Reservation System
		</div>

	</section>

	<!-- footer ends-->