<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title><?= $title ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="./css/account_settings.css">
	</head>
	<body>

		<nav class="navbar navbar-expand-sm bg-dark navbar-dark mb-4">
			<div class="navbar-brand">
				<a class='navbar-brand' href='home.php?user_name=<?= $user_name ?>'>MyChat</a>
			</div>

			<ul class="navbar-nav">
				<li><a class="configuration" href="./account_settings.php">Configurações</a></li>
			</ul>
		</nav>
