<?php

	function search_user() {
		global $con;

		if (isset($_GET['search_btn'])) {
			$search_query = htmlentities($_GET['search_query']);

			$get_user = "
				SELECT * FROM users
				WHERE user_name LIKE '%{$search_query}%' OR user_city LIKE '%{$search_query}%'
			";
		} else {
			$get_user = "SELECT * FROM users ORDER BY user_city, user_name DESC LIMIT 5";
		}

		$run_user = mysqli_query($con, $get_user);

		$user_list = [];

		while ($row_user = mysqli_fetch_assoc($run_user)) {
			$user_list[] = $row_user;
		}

		return $user_list;
	}
