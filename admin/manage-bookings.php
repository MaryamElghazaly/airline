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
<section class="manage-bookings">
	<h1 class="heading-title">manage bookings</h1>
	<div class="container">		
		<table class="table">
			<thead>
			<tr>
					<th>Booking ID</th>
					<th>Flight Number</th>
					<th>Passenger Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>No. of Adults</th>
					<th>No. of Children</th>
					<th>Departure Location</th>
					<th>Destination</th>
					<th>Arrival Date</th>
					<th>Leaving Date</th>
					<th>Cabin</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					// Database connection
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "airline";
					$conn = mysqli_connect($servername, $username, $password, $dbname);

					// Check connection
					if (!$conn) {
					  die("Connection failed: " . mysqli_connect_error());
					}

					// Retrieve bookings from the database
					$sql = "SELECT * FROM book_form";
					$result = mysqli_query($conn, $sql);

					// Loop through each row in the result set and display it in a table row
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . $row["id"] . "</td>";
						echo "<td>" . $row["flight_number"] . "</td>";
						echo "<td>" . $row["name"] . "</td>";
						echo "<td>" . $row["email"] . "</td>";
						echo "<td>" . $row["address"] . "</td>";
						echo "<td>" . $row["adult"] . "</td>";
						echo "<td>" . $row["children"] . "</td>";
						echo "<td>" . $row["from"] . "</td>";
						echo "<td>" . $row["to"] . "</td>";
						echo "<td>" . $row["arrivals"] . "</td>";
						echo "<td>" . $row["leaving"] . "</td>";
						echo "<td>" . $row["cabin"] . "</td>";
						echo '<td><button onclick="editBooking(' . $row["id"] . ')">Edit</button> ';
						echo '<button onclick="deleteBooking(' . $row["id"] . ')">Delete</button></td>';
						echo "</tr>";
					}

					mysqli_close($conn);
				?>
			</tbody>
		</table>
</section>
<section id="edit-modal" class="modal">
			<div class="modal-content">
				<span class="close">&times;</span>
				<h2>Edit Booking</h2>
				<form id="edit-form" method="post" action="">
					<input type="hidden" id="edit-booking-id" name="booking_id">
					<label for="flight_number">Flight Number:</label>
					<input type="text" name="flight_number" id="flight_number" >
					<br>
					<label for="name">Passenger Name:</label>
					<input type="text" name="name" id="name" >
					<br>
					<label for="email">Email:</label>
					<input type="email" name="email" id="email" >
					<br>
					<label for="address">Address:</label>
					<input type="text" name="address" id="address" >
					<br>
					<label for="adult">No. of Adults:</label>
					<input type="number" name="adult" id="adult">
					<br>
					<label for="children">No. of Children:</label>
					<input type="number" name="children" id="children" >
					<br>
					<label for="departure_location">Departure Location:</label>
					<input type="text" name="departure_location" id="departure_location">
					<br>
					<label for="destination">Destination:</label>
					<input type="text" name="destination" id="destination">
					<br>
					<label for="arrival_date">Arrival Date:</label>
					<input type="date" name="arrival_date" id="arrival_date">
					<br>
					<label for="leaving_date">Leaving Date:</label>
					<input type="date" name="leaving_date" id="leaving_date">
					<br>
					<label for="cabin">Cabin:</label>
					<select name="cabin" id="cabin" required>
						<option value="Economy">Economy</option>
						<option value="Business">Business</option>
						<option value="First">First</option>
					</select>
					<br>
					<input type="submit" name="submit" value="Update Booking">
				</form>

			</div>
		</section>
		<section id="delete-modal" class="modal">
		<div class="modal-content">
			<span class="close">&times;</span>
			<h2>Delete Booking</h2>
			<p>Are you sure you want to delete this booking?</p>
			<form id="delete-form" method="post" action="">
				<input type="hidden" id="delete-booking-id" name="booking_id">
				<button type="submit" name="delete_booking_submit">Yes, Delete Booking</button>
			</form>
		</div>
	</section>

</main>

<script>
	// Open edit modal and pre-fill form with booking data
	function editBooking(id) {
		var modal = document.getElementById("edit-modal");
		modal.style.display = "block";
		var form = document.getElementById("edit-form");
		form.action = "edit-booking.php?id=" + id;
		document.getElementById("edit-booking-id").value = id;
		var booking = <?php echo json_encode($result->fetch_assoc()); ?>;
		document.getElementById("flight_number").value = booking.flight_number;
		document.getElementById("name").value = booking.name;
		document.getElementById("email").value = booking.email;
		document.getElementById("address").value = booking.address;
		document.getElementById("adult").value = booking.adult;
		document.getElementById("children").value = booking.children;
		document.getElementById("departure_location").value = booking.from;
		document.getElementById("destination").value = booking.to;
		document.getElementById("arrival_date").value = booking.arrivals;
		document.getElementById("leaving_date").value = booking.leaving;
		document.getElementById("cabin").value = booking.cabin;
	}

	// Close edit modal when user clicks the 'x' or outside the modal
	var editModal = document.getElementById("edit-modal");
	var editClose = document.getElementsByClassName("close")[0];
	window.onclick = function(event) {
		if (event.target == editModal) {
			editModal.style.display = "none";
		}
	}
	editClose.onclick = function() {
		editModal.style.display = "none";
	}

	// Open delete modal and set booking id to delete
	function deleteBooking(id) {
		var modal = document.getElementById("delete-modal");
		modal.style.display = "block";
		var form = document.getElementById("delete-form");
		form.action = "delete-booking.php?id=" + id;
	document.getElementById("delete-booking-id").value = id;
}

// Close delete modal when user clicks the 'x' or outside the modal
var deleteModal = document.getElementById("delete-modal");
var deleteClose = document.getElementsByClassName("close")[1];
window.onclick = function(event) {
	if (event.target == deleteModal) {
		deleteModal.style.display = "none";
	}
}
deleteClose.onclick = function() {
	deleteModal.style.display = "none";
}
</script>




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