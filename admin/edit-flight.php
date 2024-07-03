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
<link rel="stylesheet" href="../css/admin-css.css">

</head>
<body>

<!-- header section starts-->

<section class="header">
    <a href="#" class="logo">Sky-Rider</a>
    <nav class="navbar">
            <a href="admin-panel.php">Admin Panel</a>
			<a href="manage-bookings.php">Manage Bookings</a>
			<a href="manage-users.php">Manage Users</a>
			<a href="add-flight.php">Add Flight</a>
			<a href="edit-flight.php">Edit Flight</a>
			<a href="delete-flight.php">Delete Flight</a>
			<a href="../home.php">Logout</a>
	</nav>
</section>
<!--header section ends-->

<section class="add-flight">
     <h1 class="heading-title">edit flights</h1>
             <!-- Edit Flight Form -->
    <form action="edit-flight-form.php" method="POST" class="add-flight-form">
                   
            
        <div class="form-container">
             <div class="form-group">
                  <span>Flight ID:</span>
                  <input type="text" id="flight-id" name="flight-id" value="<?php echo isset($row) && $row ? $row['flight_number'] : ''; ?>" required>
              </div>

              <div class="form-group">
                <span for="departure-location">Departure Location:</span>
                <input type="text" id="departure-location" name="departure-location" value="<?php echo isset($row) && $row ? $row['departure_location'] : ''; ?>" required>
              </div>

              <div class="form-group">
                <span for="destination">Destination:</span>
                <input type="text" id="destination" name="destination" value="<?php echo isset($row) && $row ? $row['destination']: '';?>" required>
              </div>

              <div class="form-group">
                <span for="departure-date">Departure Date:</span>
                <input type="date" id="departure-date" name="departure-date" value="<?php echo isset($row) && $row ? $row['departure_date']: ''; ?>" required>
              </div>

              <div class="form-group">
                <span for="departure-time">Departure Time:</span>
                <input type="time" id="departure-time" name="departure-time" value="<?php echo isset($row) && $row ? $row['departure_time']: '';?>" required>
              </div>

              <div class="form-group">
                <span for="arrival-date">Arrival Date:</span>
                <input type="date" id="arrival-date" name="arrival-date" value="<?php echo isset($row) && $row ? $row['arrival_date']: '';?>" required>
              </div>

              <div class="form-group">
                <span for="arrival-time">Arrival Time:</span>
                <input type="time" id="arrival-time" name="arrival-time" value="<?php echo isset($row) && $row ? $row['arrival_time']: ''; ?>" required>
              </div>

              <div class="form-group">
                <span for="price">Price:</span>
                <input type="number" id="price" name="price" value="<?php echo isset($row) && $row ? $row['price']: ''; ?>" required>
              </div>

              <input type="submit" value="Update Flight" class="btn">
        </div>
     </form>
</section>
   











<!-- footer starts-->

<section class="footer">
	    <div class="box-container">
	        <div class="box">
	            <h3>Quick Links</h3>
	            <a href="admin-panel.php"> <i class="fas fa-angle-right"></i> home</a>
	            <a href="register.php"> <i class="fas fa-angle-right"></i>Register</a>
	            <a href="contact-us.php"> <i class="fas fa-angle-right"></i>contact Us</a>
	        </div>

	        <div class="box">
	            <h3>Extra Links</h3>
	            <a href="#"> <i class="fas fa-angle-right"></i>FAQS</a>
	            <a href="about-us"> <i class="fas fa-angle-right"></i>about us</a>
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








