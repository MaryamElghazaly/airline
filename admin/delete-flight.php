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

<section class="delete-flight">
     <h1 class="heading-title">delete flight</h1>
    <form action="delete-flight.php" method="POST" class="delete-flight-form">
             
      <table class="table">
        <div class="table-content">
         <tr>
            <th>Flight Number</th>
            <th>Departure Location</th>
            <th>Destination</th>
            <th>Departure Date</th>
            <th>Departure Time</th>
            <th>Price</th>
            <th>Select</th>
         </tr>
        </div>

                <?php
                // Connect to the database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "airline";

                $conn = mysqli_connect($servername, $username, $password, $dbname);

                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Retrieve flights from the database
                $sql = "SELECT * FROM flights";
                $result = mysqli_query($conn, $sql);

                // Loop through each row and display the flight information
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["flight_number"] . "</td>";
                    echo "<td>" . $row["departure_location"] . "</td>";
                    echo "<td>" . $row["destination"] . "</td>";
                    echo "<td>" . $row["departure_date"] . "</td>";
                    echo "</tr>";
                }
                    // Close database connection
            mysqli_close($conn);
            ?>
       </table>

     <br>
     <div class="inputBox">
       <span for="flight_id">ID flight:</span>
       <input type="text" id="flight_id" name="flight_id" placeholder="Enter The Id Of The Flight To Delete">
     </div>

     <br><br>

     <input type="submit" name="submit" value="Delete Flight" class="btn">

    </form>

    <?php
    // Check if the delete button was clicked
    if (isset($_POST["submit"])) {
        // Get the ID of the flight to delete
        $flight_id = $_POST["flight_id"];

        // Connect to the database
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Delete the flight from the database
        $sql = "DELETE FROM flights WHERE flight_number='$flight_id'";
        if (mysqli_query($conn, $sql)) {
            echo "<p class='success'>Flight deleted successfully!</p>";
        } else {
            echo "<p class='error'>Error deleting flight: " . mysqli_error($conn) . "</p>";
        }

        // Close database connection
        mysqli_close($conn);
    }
    ?>

</main>
















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
