<?php  

	session_start();

	include_once "./include/connection.php";
	
	if (!isset($_SESSION['user_email'])) {
		header("Location: ./signin.php");
	} else {
		$user = $_SESSION['user_email'];
		$get_user = "SELECT * FROM users WHERE user_email = '$user'";
		$run_user = mysqli_query($con, $get_user);
		$row = mysqli_fetch_assoc($run_user);

		$user_name = $row['user_name'];
		$user_pass = $row['user_pass'];
		$user_email = $row['user_email'];
		$user_profile = $row['user_profile'];
		$user_city = $row['user_city'];
		$user_gender = $row['user_gender'];
		$user_id = $row['user_id'];

		if (isset($_POST['sub'])) {
			$content = htmlspecialchars($_POST['content']);

			$update = "UPDATE users SET forgotten_answer = '$content' WHERE user_email = '$user'";

			$run = mysqli_query($con, $update);
		}

		if (isset($_POST['update'])) {
			$user_name = htmlspecialchars($_POST['u_name']);
			$email = htmlspecialchars($_POST['u_email']);
			$u_gender = htmlspecialchars($_POST['u_gender']);
			$u_city = htmlspecialchars($_POST['u_city']);

			$update = "
				UPDATE users 
				SET 
					user_name = '$user_name',
					user_email = '$email',
					user_city = '$u_city',
					user_gender = '$u_gender'
				WHERE user_email = '$user'
			";

			$run = mysqli_query($con, $update);

			if ($run) {
				header('Location: ./account_settings.php');
				exit;
			}
		}

		$title = 'Configurações da Conta';

		include_once "./include/header.php";
		include_once './templates/account_settings_template.php';
	}
