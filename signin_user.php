<?php

	session_start();

	include_once "./include/connection.php";

	if (isset($_POST['sign_in'])) {
		$email = (mysqli_real_escape_string($con, $_POST['email']));
		$pass = (mysqli_real_escape_string($con, $_POST['password']));

		$select_user = "SELECT * FROM users WHERE user_email = '$email' AND user_pass = '$pass'";
		$query = mysqli_query($con, $select_user);
		$check_user = mysqli_num_rows($query);

		if ($check_user == 1) {
			$_SESSION['user_email'] = $email;

			$update_msg = mysqli_query($con, "UPDATE users SET log_in = 'Online' WHERE user_email = '$email'");

			$user = $_SESSION['user_email'];
			$get_user = "SELECT * FROM users WHERE user_email = '$user'";
			$run_user = mysqli_query($con, $get_user);
			$row = mysqli_fetch_assoc($run_user);

			$user_name = $row['user_name'];

			header("Location: ./home.php?user_name=$user_name");
		} else {
			header('Location: ./signin.php?error=1');
		}
	}
 