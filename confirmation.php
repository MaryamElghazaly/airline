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

<!-- header section ends-->

<?php
  // Check if the id is set
  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "airline";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve book details from book_form table
    $sql = "SELECT * FROM book_form WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $name = $row["name"];
      $email = $row["email"];
      $flight_number = $row["flight_number"];
      $address = $row["address"];
      $adult = $row["adult"];
      $children = $row["children"];
      $from = $row["from"];
      $to = $row["to"];
      $arrivals = $row["arrivals"];
      $leaving = $row["leaving"];
      $cabin = $row["cabin"];
      $_SESSION['name'] = $name;
      $_SESSION['email'] = $email;


      // Retrieve flight price from flights table
      $sql = "SELECT price FROM flights WHERE flight_number='$flight_number'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $price = $row["price"];
      }
    }

    mysqli_close($conn);
  }
?>
<section>

	<h1 class="heading-title">Confirmation Page</h1>

	<p><h2>Name:</h2> <?php echo isset($name) ? $name : ""; ?></p>
<p><h2>Email:</h2> <?php echo isset($email) ? $email : ""; ?></p>
<p><h2>Flight Number:</h2> <?php echo isset($flight_number) ? $flight_number : ""; ?></p>
<p><h2>Address:</h2> <?php echo isset($address) ? $address : ""; ?></p>
<p><h2>Adult:</h2> <?php echo isset($adult) ? $adult : ""; ?></p>
<p><h2>Children:</h2> <?php echo isset($children) ? $children : ""; ?></p>
<p><h2>From:</h2> <?php echo isset($from) ? $from : ""; ?></p>
<p><h2>To:</h2> <?php echo isset($to) ? $to : ""; ?></p>
<p><h2>Arrivals:</h2> <?php echo isset($arrivals) ? $arrivals : ""; ?></p>
<p><h2>Leaving:</h2> <?php echo isset($leaving) ? $leaving : ""; ?></p>
<p><h2>Cabin:</h2> <?php echo isset($cabin) ? $cabin : ""; ?></p>
<p><h2>Price:</h2> <?php echo isset($price) ? $price : ""; ?></p>

<form action="payment.php?flight_number=<?php echo isset($flight_number) ? $flight_number : ""; ?>&name=<?php echo isset($name) ? $name : ""; ?>&email=<?php echo isset($email) ? $email : ""; ?>" method="post">
  <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ""; ?>">
  <input type="submit" value="Confirm Booking" class= "btn">
</form>
<br>
</section>
<!-- footer starts-->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="flight-search.php"> <i class="fas fa-angle-right"></i>Flights</a>
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

<!-- footer starts-->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="flight-search.php"> <i class="fas fa-angle-right"></i>Flights</a>
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
</body>
</html>
