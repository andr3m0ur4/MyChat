<?php

	session_start();

	include_once "../include/connection.php";
	include_once "./find_friends_function.php";

	if (!isset($_SESSION['user_email'])) {
		header("Location: signin.php");
	} else {
		$user = $_SESSION['user_email'];
		$get_user = "SELECT * FROM users WHERE user_email = '$user'";
		$run_user = mysqli_query($con, $get_user);
		$row = mysqli_fetch_assoc($run_user);

		$user_name = $row['user_name'];

		$user_list = search_user();

		include_once '../templates/find_friends_template.php';
	}
