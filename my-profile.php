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




    <section class="profile">
		<h1 class="heading-title">User Profile</h1>

		<form class="profile-form" action="myprofile-form.php">

        <div class="flex">
            <div class="inputBox">
			    <span for="name">Name:</span>
			    <input autofoucs type="text" id="name" name="name" value="" placeholder="Full Name"><br><br>
            </div>

            <div class="inputBox">
			    <span for="email">Email:</span>
			    <input type="email" id="email" name="email" value="" placeholder="Enter Your Email"><br><br>
            </div>

            <div class="inputBox">
			    <span for="password">Password:</span>
			    <input type="password" id="password" name="password" placeholder="Enter Your Password"><br><br>
            </div>

            <div class="inputBox">           
			    <span for="confirm-password">Confirm Password:</span>
			    <input type="password" id="confirm-password" name="confirm-password" value="" placeholder="Re-enter password"><br><br>
            </div>

            <div class="inputBox">
			    <span for="dob">Date of Birth:</span>
			    <input type="date" id="dob" name="dob"><br><br>
            </div>

            <div class="inputBox">
			    <span for="address">Registration Date:</span>
			    <input type="date" id="reg_date" name="reg_date"><br><br>
            </div>
        </div>
			<input type="submit" value="Save Changes" class="btn">
		</form>
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




		

		

	<footer>
		
	</footer>
</body>
</html>