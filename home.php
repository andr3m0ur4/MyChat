<?php
	
	session_start();

	include_once "./include/connection.php";

	if (!isset($_SESSION['user_email'])) {
		header("Location: ./signin.php");
	} else {
		include_once './include/get_users_data.php';

		// Obtendo a informação do usuário que está logado
		$user = $_SESSION['user_email'];

		$get_user = "SELECT * FROM users WHERE user_email = '$user'";
		$run_user = mysqli_query($con, $get_user);
		$row = mysqli_fetch_assoc($run_user);

		$user_id = $row['user_id'];
		$user_name = $row['user_name'];

		// Obtendo os dados do usuário em qual o usuário clica
		if (isset($_GET['user_name'])){

			$get_username = $_GET['user_name'];
			$get_user = "SELECT * FROM users WHERE user_name = '$get_username'";
			$run_user = mysqli_query($con, $get_user);
			$row_user = mysqli_fetch_assoc($run_user);

			$username = $row_user['user_name'];
			$user_profile_image = $row_user['user_profile'];
		} else {
			header("Location: ./home.php?user_name=$user_name");
			exit;
		}

		submit_msg($con, $user_name, $username);

		$total_messages = "
			SELECT * FROM users_chat
			WHERE
				(sender_username = '$user_name' AND receiver_username = '$username')
				OR (receiver_username = '$user_name'AND sender_username = '$username')
		";

		$run_messages = mysqli_query($con, $total_messages);
		$total = mysqli_num_rows($run_messages);

		$update_msg = mysqli_query($con, "
			UPDATE users_chat 
			SET msg_status = 'read'
			WHERE sender_username = '$username' AND receiver_username = '$user_name'
		");

		$sel_msg = "
			SELECT * FROM users_chat 
			WHERE
				(sender_username = '$user_name' AND receiver_username = '$username')
				OR (receiver_username = '$user_name' AND sender_username = '$username')
			ORDER BY 1 ASC";

		$run_msg = mysqli_query($con, $sel_msg);

		$chats = [];

		while ($row = mysqli_fetch_assoc($run_msg)) {
			$chats[] = $row;
		}

		include_once './templates/home_template.php';
	}

	function submit_msg($con, $user_name, $username) {
		if (isset($_POST['submit'])) {
			$msg = htmlspecialchars($_POST['msg_content']);

			if ($msg == ""){
				echo "
					<div class='alert alert-danger'>
						<strong><center>A mensagem foi incapaz de ser enviada</center></strong>
					</div>
				";
			}else if (strlen($msg) > 100) {
				echo "
					<div class='alert alert-danger'>
						<strong><center>A mensagem é muito longa. Utilize somente 100 caracteres</center></strong>
					</div>
				";
			}else{
				$insert = "INSERT INTO users_chat (sender_username, receiver_username, msg_content, msg_status, msg_date) VALUES ('$user_name', '$username', '$msg', 'unread', NOW())";
				$run_insert = mysqli_query($con, $insert);
			}
		}
	}
