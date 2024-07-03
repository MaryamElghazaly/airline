<?php
	// Delete booking from the database when user submits the delete form
	if(isset($_POST["delete_booking_submit"])) {
		$booking_id = $_POST["booking_id"];
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "airline";
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if (!$conn) {
		  die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "DELETE FROM book_form WHERE id='$booking_id'";

		if (mysqli_query($conn, $sql)) {
		  echo "<script>alert('Booking deleted successfully');</script>";
		} else {
		  echo "Error deleting booking: " . mysqli_error($conn);
		}

		mysqli_close($conn);
	}
?>