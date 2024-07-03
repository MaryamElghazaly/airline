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
    <a href="home.php" class="logo">Sky-Rider</a>
    <nav class="navbar">
        <a href="home.php"> Home</a>
        <a href="about-us.php"> About Us</a>
        <a href="contact-us.php"> Contact Us</a>
        <a href="register.php"> Register</a>
        <a href="admin/admin-login.php">Admin Login</a>
        <a href="login.php">User Login</a>


    </nav>
</section>

<!-- header section ends-->

<section class="register">
    <h1 class="heading-title">Registeration</h1>

  <form action="register-form.php" method="POST" class="register-form">

	<div class="flex">
       <div class="inputBox">
         <span>full name:</span>
         <input type="text" id="name" name="name" placeholder="Enter Your Full Name" required>
       </div>

			 <div class="inputBox">
         <span>email:</span>
         <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
       </div>

			 <div class="inputBox">
         <span>password:</span>
         <input type="password" id="password" name="password" placeholder="Enter Your Password" required>
       </div>

			 <div class="inputBox">
        <span>confirm-password:</span>
        <input type="password"id="confirm-password" name="confirm-password" placeholder="Confirm Your Password" required>
       </div>

		  <div class="inputBox">
		   <span>date of birth:</span>
		   <input type="date" id="dob" name="dob" required>
	   </div>

	   <div class="inputBox">
		  <span>Registration Date:</span>
		  <input type="date" id="reg" name="reg_date" required>
   	 </div>

		 <input type="submit" name="submit" class="btn" value="Register">
   </div>
  </form>
</section>







	<!-- footer starts-->

	<section class="footer">
	    <div class="box-container">
	        <div class="box">
	            <h3>Quick Links</h3>
	            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
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