<?php  
	$con = mysqli_connect("localhost", "root", "", "mychat") or die("Conexão não foi estabelecida");
	mysqli_set_charset($con, 'utf8');

	function search_user(){
		global $con;

		if (isset($_GET['search_btn'])) {
			$search_query = htmlentities($_GET['search_query']);
			$get_user = "SELECT * FROM users WHERE user_name LIKE '%$search_query%' OR user_city LIKE '%$search_query%'";
		}else{
			$get_user = "SELECT * FROM users ORDER BY user_city, user_name DESC LIMIT 5";
		}

		$run_user = mysqli_query($con, $get_user);

		while ($row_user = mysqli_fetch_array($run_user)) {
			$user_name = $row_user['user_name'];
			$city = $row_user['user_city'];
			$gender = $row_user['user_gender'];
			$user_profile = $row_user['user_profile'];

			// Agora exibindo tudo de uma vez

			echo "
				<div class='card'>
					<img src='../$user_profile'>
					<h1>$user_name</h1>
					<p class='title'>$city</p>
					<p>$gender</p>
					<form method='POST'>
						<p><button name='add'>Conversar com $user_name</button></p>
					</form>
				</div><br><br>
			";

			if (isset($_POST['add'])) {
				echo "<script>window.open('../home.php?user_name=$user_name', '_self')</script>";
			}
		}
	}
?>