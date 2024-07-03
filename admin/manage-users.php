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

// If the delete button is clicked, delete the user with the given name
if (isset($_POST['delete_user'])) {
    $name = $_POST['name'];

    // Prepare and execute the delete query
    $stmt = $conn->prepare("DELETE FROM register WHERE name=?");
    $stmt->bind_param("s", $name);
    $stmt->execute();

    // Check if the delete query was successful
    if ($stmt->affected_rows > 0) {
        echo "User deleted successfully.";
    } else {
        echo "Error deleting user.";
    }

    // Close the prepared statement
    $stmt->close();
}

// Query the database to get the users
$sql = "SELECT * FROM register";
$result = mysqli_query($conn, $sql);

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
     <h1 class="heading-title">manage users</h1>
     <div class="container">		
		<table class="table">
         <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Registration Date</th>
            <th>Date of birth</th>
            <th>Actions</th>
         </tr>
         <?php
        // Loop through the query result to generate the user rows
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['registration_date']; ?></td>
                <td><?php echo $row['date_of_birth']; ?></td>
                <td>
                    <form method="post">
                        <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
                        <button type="submit" name="delete_user">Delete</button>
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
        </table>
    </div>
    </section>




<?php
// Close the database connection
mysqli_close($conn);
?>
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
    </body>
    </html>
    