<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Busca por Amigos</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/find_people.css">
	</head>
	<body>

		<nav class="navbar navbar-expand-sm bg-dark navbar-dark mb-4">
			<div class="navbar-brand">
				<a class='navbar-brand' href='../home.php?user_name=<?= $user_name ?>'>MyChat</a>
			</div>

			<ul class="navbar-nav">
				<li>
					<a class="navbar-brand configuration" href="../account_settings.php">Configurações</a>
				</li>
			</ul>
		</nav>

		<div class="row mb-5">

			<div class="col-sm-9 col-md-7 col-lg-4 mx-auto">
				<form class="search_form" action="">
					<div class="input-group">
						<input type="text" name="search_query" placeholder="Procurar Amigos" autocomplete="off" required>
						<div class="input-group-append">
							<button class="btn" type="submit" name="search_btn">Procurar</button>
						</div>
					</div>
				</form>
			</div>

		</div>

		<!-- Agora exibindo tudo de uma vez -->
		<?php foreach ($user_list as $user) : ?>
			<div class='card mb-5'>
				<img src='../<?= $user['user_profile'] ?>'>
				<h1><?= $user['user_name'] ?></h1>
				<p class='title'><?= $user['user_city'] ?></p>
				<p><?= $user['user_gender'] ?></p>

				<form method='post'>
					<p><button name='add'>Conversar com <?= $user['user_name'] ?></button></p>
				</form>
			</div>

			<?php if (isset($_POST['add'])) : ?>
				<script>
					window.open('../home.php?user_name=<?= $user['user_name'] ?>', '_self')
				</script>
			<?php endif ?>
		<?php endforeach ?>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</body>
</html>