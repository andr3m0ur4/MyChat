<?php

	session_start();

	include_once "./include/connection.php";

	$error = false;

	if (isset($_POST['submit'])) {
		$email = htmlspecialchars(mysqli_real_escape_string($con, $_POST['email']));
		$recovery_account = htmlspecialchars(mysqli_real_escape_string($con, $_POST['best_friend']));

		$select = "SELECT * FROM users WHERE user_email = '$email' AND forgotten_answer = '$recovery_account'";

		$query = mysqli_query($con, $select);

		$check_user = mysqli_num_rows($query);

		if ($check_user == 1) {
			$_SESSION['user_email'] = $email;

			header('Location: ./create_password.php');
		} else {
			$error = true;
		}
	}

	include_once './templates/forgot_pass_template.php';
