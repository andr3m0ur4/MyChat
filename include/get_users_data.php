<?php  

/*$con = mysqli_connect("localhost", "root", "", "mychat");
mysqli_set_charset($con, 'utf8');*/

	$user = "SELECT * FROM users LIMIT 10";

	/*$user = "SELECT DISTINCT(users.user_id), users.user_name, users.user_profile, users.log_in FROM users "
	. "INNER JOIN users_chat "
	. "ON users.user_name = users_chat.sender_username "
	. "ORDER BY users_chat.msg_date DESC";*/
	$run_user = mysqli_query($con, $user);

	while ($row_user = mysqli_fetch_array($run_user)) {
		$user_id = $row_user['user_id'];
		$user_name = $row_user['user_name'];
		$user_profile = $row_user['user_profile'];
		$login = $row_user['log_in'];

		echo "
			<li>
				<div class='chat-left-img'>
					<img src='$user_profile'>
				</div>
				<div class='chat-left-detail'>
					<p><a href='home.php?user_name=$user_name'>$user_name</a></p>";
			if ($login == "Online") {
				echo "<span><i class='fa fa-circle' aria-hidden='true'></i> Online</span>";
			}else{
				echo "<span><i class='fa fa-circle-o' aria-hidden='true'></i> Offline</span>";
			}
			echo "
				</div>
			</li>
		";
	}
?>