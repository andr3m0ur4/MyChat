<?php

	session_start();

	include "./include/connection.php";

	$msg_error = '';

	if (isset($_POST['change'])) {
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];
		$user = $_SESSION['user_email'];

		if ($pass1 != $pass2) {
			$msg_error = 'Sua Nova senha é diferente da senha de confirmação';
		}

		if (strlen($pass1) < 8 AND strlen($pass2) < 8) {
			$msg_error = 'Use 8 ou mais caracteres';
		}

		if ($pass1 == $pass2 && strlen($pass1) >= 8) {
			$query = "UPDATE users SET user_pass = '$pass1' WHERE user_email = '$user'";
			$update_pass = mysqli_query($con, $query);

			session_destroy();
			echo "<script>alert('Vá adiante e faça login')</script>";
			echo "<script>window.open('signin.php', '_self')</script>";
		}
	}

	include_once './templates/create_password_template.php';
