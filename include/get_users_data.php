<?php

	$user = "SELECT * FROM users LIMIT 10";

	/*$user = "SELECT DISTINCT(users.user_id), users.user_name, users.user_profile, users.log_in FROM users "
	. "INNER JOIN users_chat "
	. "ON users.user_name = users_chat.sender_username "
	. "ORDER BY users_chat.msg_date DESC";*/

	$run_user = mysqli_query($con, $user);

	$user_list = [];

	while ($row_user = mysqli_fetch_assoc($run_user)) {
		$user_list[] = $row_user;
	}
