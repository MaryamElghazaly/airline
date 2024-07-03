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
<link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- header section starts-->

<section class="header">
    <a href="home.php" class="logo">Sky-Rider</a>
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
    <section class="booking">
    <h1 class="heading-title">book your trip!</h1>

    <form action="book-form.php" method="post" class="book-form">

    <div class="flex">
        <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="Enter Your Name" name="name">
        </div>
        
        <div class="inputBox">
            <span>e-mail :</span>
            <input type="email" required placeholder="Enter Your E-mail" name="email">
        </div>

        <div class="inputBox">
            <span>flight number :</span>
            <input type="text" required placeholder="Enter Your flight Number" name="flight_number" value="<?php echo $_GET['flight_number'] ?>" readonly>
        </div>

        <div class="inputBox">
            <span>address :</span>
            <input type="text"required  placeholder="Enter Your Address" name="address">
        </div>

        <div class="inputBox">
	        <span>adult :</span>
              <input type="number" placeholder="enter number of adults" max="100" min="0" value="0" name="adult">
        </div>

       <div class="inputBox">
	        <span>children :</span>
              <input type="number" placeholder="enter number of children" max="100" min="0" value="0" name="children">
        </div>
       
        <div class="inputBox">
	        <span>From: </span>
          <input type="text"  max="100" min="0"  name="from" value="<?php echo $_GET['departure_location'] ?>" readonly>
        </div>

        <div class="inputBox">
	        <span>To: </span>
          <input type="text"  max="100" min="0" name="to" value="<?php echo $_GET['destination'] ?>" readonly>
        </div>

        <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving" value="<?php echo $_GET['departure_date'] ?>" readonly>
        </div>

        <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrival" value="<?php echo isset($_GET['return_date']) ? $_GET['return_date'] : (isset($_GET['arrival_date']) ? $_GET['arrival_date'] : '') ?>" readonly>
        </div>

        <div class="inputBox">
           <span>cabin class :</span>
           <select class="select cabin" name="cabin"> 
              <option value="first">first</option>
              <option value="business"name="business">Business</option>
              <option name="economy"name="economy" >Economy</option>
            </select>
        </div>

        

	    <input type="submit" name="send" class="btn" value="submit">

    </form>
</section>
<!--booking ends-->
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
            <a href="about-us-user"> <i class="fas fa-angle-right"></i>about us</a>
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


<!-- swiper js link--> 
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!--js file link--> 
<script scr="js.js"></script>
    
</body>
</html>