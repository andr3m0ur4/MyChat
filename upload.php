<?php

	session_start();

	include_once "./include/connection.php";

	if (!isset($_SESSION['user_email'])) {
		header("Location: ./signin.php");
	} else {
		$user = $_SESSION['user_email'];
		$get_user = "SELECT * FROM users WHERE user_email = '$user'";
		$run_user = mysqli_query($con, $get_user);
		$row = mysqli_fetch_array($run_user);

		$user_name = $row['user_name'];
		$user_profile = $row['user_profile'];

		if (isset($_POST['update'])) {
			$u_image = $_FILES['u_image']['name'];
			$image_tmp = $_FILES['u_image']['tmp_name'];
			$random_number = rand(1,100);

			if ($u_image == '') {
				echo "<script>alert('Por favor Escolha o Perfil')</script>";
				echo "<script>window.open('upload.php', '_self')</script>";
				exit;
			} else {
				move_uploaded_file($image_tmp, "images/$u_image.$random_number");

				$update = "
					UPDATE users SET user_profile = 'images/$u_image.$random_number' WHERE user_email = '$user'
				";

				$run = mysqli_query($con, $update);

				if ($run) {
					echo "<script>alert('Seu Perfil foi Atualizado!')</script>";
					echo "<script>window.open('upload.php', '_self')</script>";
				}
			}
		}

		$title = 'Alterar Foto de Perfil';

		include_once "./include/header.php";
		include_once './templates/upload_template.php';
	}
	