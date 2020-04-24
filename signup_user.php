<?php

	session_start();

	ini_set('default_charset', 'UTF-8');

	include_once "./include/connection.php";

	if (isset($_POST['sign_up'])) {
		$name = htmlspecialchars(mysqli_real_escape_string($con, $_POST['user_name']));
		$pass = htmlspecialchars(mysqli_real_escape_string($con, $_POST['user_password']));
		$email = htmlspecialchars(mysqli_real_escape_string($con, $_POST['user_email']));
		$city = htmlspecialchars(mysqli_real_escape_string($con, $_POST['user_city']));
		$gender = htmlspecialchars(mysqli_real_escape_string($con, $_POST['user_gender']));
		$rand = rand(1, 2);

		if ($name == '') {
			header('Location: ./signup.php?error=1');
			exit;
		}

		if ($email == '') {
			header('Location: ./signup.php?error=2');
			exit;
		}

		if (strlen($pass) < 8){
			header('Location: ./signup.php?error=3');
			exit;
		}

		$check_email = "SELECT * FROM users WHERE user_email = '$email'";
		$run_email = mysqli_query($con, $check_email);
		$check = mysqli_num_rows($run_email);

		if ($check == 1) {
			header('Location: ./signup.php?error=4');
			exit;
		}

		if ($rand == 1) {
			$profile_pic = "./images/codingcafe1.png";
		} else if ($rand == 2) {
			$profile_pic = "./images/codingcafe2.png";
		}

		$insert = "
			INSERT INTO users (user_name, user_pass, user_email, user_profile, user_city, user_gender) 
			VALUES ('$name', '$pass', '$email', '$profile_pic', '$city', '$gender')
		";

		$query = mysqli_query($con, $insert);

		if ($query) {
			header("Location: ./signin.php?success=1&name=$name");
		} else {
			header('Location: ./signup.php?error=5');
		}
	}
 