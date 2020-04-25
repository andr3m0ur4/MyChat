<?php

	session_start();

	include_once "./include/connection.php";

	if (!isset($_SESSION['user_email'])) {
		header("Location: ./signin.php");
	} else {
		if (isset($_POST['change'])) {
			$c_pass = $_POST['current_pass'];
			$pass1 = $_POST['u_pass1'];
			$pass2 = $_POST['u_pass2'];

			$user = $_SESSION['user_email'];
			$get_user = "SELECT * FROM users WHERE user_email = '$user'";
			$run_user = mysqli_query($con, $get_user);
			$row = mysqli_fetch_array($run_user);

			$user_password = $row['user_pass'];

			$error = '';

			if ($c_pass != $user_password) {
				$error = 'Sua senha antiga está incorreta';
			}

			if ($pass1 != $pass2) {
				$error = 'Sua nova senha é diferente da senha de confirmação';
			}

			if (strlen($pass1) < 8 AND strlen($pass2) < 8) {
				$error = 'Use 8 ou mais caracteres';
			}

			$success = '';

			if ($pass1 == $pass2 AND $c_pass == $user_password AND strlen($pass1) >= 8) {
				$query = "UPDATE users SET user_pass = '$pass1' WHERE user_email = '$user'";

				$update_pass = mysqli_query($con, $query);

				$success = 'Sua Senha foi Alterada';
			}
		}

		$title = 'Alterar Senha';

		include_once "./include/header.php";
		include_once './templates/change_password_template.php';
	}
