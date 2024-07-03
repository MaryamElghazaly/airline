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
     <h1 class="heading-title">add new flights</h1>
    <form action="add-flight-form.php" method="post" class="add-flight-form">

      <div class="form-container">

          <div class="form-group">
            <span for="flight_number">Flight Number:</span>
            <input type="text" id="flight_number" name="flight_number" required>
          </div>


          <div class="form-group">
            <span for="departure_location">Departure Location:</span>
            <input type="text" id="departure_location" name="departure_location" required>
          </div>


          <div class="form-group">
            <span for="destination">Destination:</span>
            <input type="text" id="destination" name="destination" required>
          </div>


          <div class="form-group">
            <span for="departure_date">Departure Date:</span>
            <input type="date" id="departure_date" name="departure_date" required>
          </div>


          <div class="form-group">
            <span for="departure_time">Departure Time:</span>
            <input type="time" id="departure_time" name="departure_time" required>
         </div>


          <div class="form-group">
             <span for="arrival_date">Arrival Date:</span>
             <input type="date" id="arrival_date" name="arrival_date" required>
          </div>


          <div class="form-group">
            <span for="arrival_time">Arrival Time:</span>
            <input type="time" id="arrival_time" name="arrival_time" required>
          </div>


          <div class="form-group">
            <span for="price">Price:</span>
            <input type="number" id="price" name="price" min="0" required>
          </div>



          <input type="submit" name="add" value="Add Flight" class="btn">
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
