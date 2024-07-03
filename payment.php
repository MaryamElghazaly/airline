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
<?php
      // Retrieve name, email, and flight_number from confirmation page
      $name = $_GET['name'];
      $email = $_GET['email'];
      $flight_number = $_GET['flight_number'];

      // Connect to the database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "airline";

      $conn = mysqli_connect($servername, $username, $password, $dbname);

      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Retrieve flight price from flights table
      $sql = "SELECT price FROM flights WHERE flight_number='$flight_number'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $price = $row["price"];
      }
    ?>

<!-- payment section starts -->

<section class="payment">
    <h1 class="heading-title">Payment Information</h1>

    <p><h2>Name: <?php echo $name; ?></p>
    <p><h2>Email: <?php echo $email; ?></p>
    <p><h2>Flight Number: <?php echo $flight_number; ?></p>
    <p><h2>Price: <?php echo $price; ?></p>

    <form class="payment-form" method="POST" action="payment-back.php">

        <div class="flex">

          <div class="inputBox">
            <span>card type:</span>
              <select id="cardtype" name="cardtype" class="cardtype" required>
                 <optgroup label="Select a card type">    <!--<option value="">Select a card type</option> -->
                   <option value="visa">Visa</option>
                   <option value="mastercard">Mastercard</option>
                   <option value="amex">American Express</option>
               </select>
           </div>
        
           <div class="inputBox">
               <span>Card Number:</span>
               <input type="text" id="cardnumber" name="cardnumber" required placeholder="Enter Your Card Number">
            </div>

          <div class="inputBox">
             <span>Expiration Date:</label>
             <input type="date" id="expiration" name="expiration" required placeholder="Enter Your Expiration Date">
          </div>
    
         <div class="inputBox">
             <span>CVV:</span>
             <input type="text" id="cvv" name="cvv" required placeholder="Enter Your CVV">
         </div>
        <input type="hidden" name="name" value="<?php echo $name; ?>">
		<input type="hidden" name="email" value="<?php echo $email; ?>">
		<input type="hidden" name="flight_number" value="<?php echo $flight_number; ?>">
		<input type="hidden" name="price" value="<?php echo $price; ?>">

         <input type="submit" name="" class="btn" value="Pay">                   <!-- <button type="submit">Submit Payment</button>   -->
     </div>
  </form>
</section>

    <!-- payment section ends -->


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
            <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
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

    <div class="credit"> Created by <span>our professional group</span> | all right reserved! </div>


</section>

<!-- footer ends--> 
 <!-- swiper js link--> 
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!--js file link--> 
<script scr="js/script.js"></script>
  </body>
</html>
