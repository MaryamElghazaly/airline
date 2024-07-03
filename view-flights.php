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
          <a href="home.php">Logout</a>
      </nav>
</section>

<!-- header section ends-->

<section class="view-flights">
    <h1 class="heading-title">view flights</h1>
   

		<table class="table">
			<tr>
				<th>Flight Number</th>
				<th>Departure Airport</th>
				<th>Destination Airport</th>
				<th>Departure Date</th>
				<th>Arrival Date</th>
				<th>Price</th>
				<th>Action</th>
			</tr>

			<?php
				// Connect to the database
				$conn = mysqli_connect("localhost", "root", "", "airline");

				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				// Retrieve flight data from the database
				$sql = "SELECT * FROM flights";
				$result = mysqli_query($conn, $sql);

				// Display flight data in the table
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . $row["flight_number"] . "</td>";
						echo "<td>" . $row["departure_location"] . "</td>";	
						echo "<td>" . $row["destination"] . "</td>";
						echo "<td>" . $row["departure_date"] . " " . $row["departure_time"] . "</td>";
						echo "<td>" . $row["arrival_date"] . " " . $row["arrival_time"] . "</td>";
						echo "<td>" . $row["price"] . "</td>";
						echo "<td><a href='flight-booking.php?flight_number=" . $row["flight_number"] . "&departure_location=" . $row["departure_location"] . "&destination=" . $row["destination"] . "&departure_date=" . $row["departure_date"] . "&arrival_date=" . $row["arrival_date"] . "'>Book Now</a></td>";
						echo "</tr>";
					}
				}

				// Close the database connection
				mysqli_close($conn);
			?>
		</table>






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
