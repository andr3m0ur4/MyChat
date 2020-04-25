<?php

	session_start();

	$user_name = $_SESSION['user_name'];

	if (isset($_POST['logout'])) {
		$update_msg = mysqli_query($con, "UPDATE users SET log_in = 'Offline' WHERE user_name = '$user_name'");
		
		session_destroy();

		header("Location: ./signin.php");
	}
