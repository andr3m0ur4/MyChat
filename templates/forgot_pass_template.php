<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Login em sua conta</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="./css/signin.css">
	</head>
	<body>

		<div class="signin-form">
			<form action="" method="post">
				<div class="form-header">
					<h2>Esqueceu a Senha</h2>
					<p>MyChat</p>
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" id="email" class="form-control" name="email" placeholder="alguém@site.com" autocomplete="off" required>
				</div>

				<div class="form-group">
					<label for="best_friend">Nome do Melhor Amigo</label>
					<input type="text" id="best_friend" class="form-control" name="best_friend" placeholder="Alguém..." autocomplete="off" required>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-lg" name="submit">Enviar</button>
				</div>

				<?php if ($error) : ?>
					<div class="alert alert-danger">
						<span class="small">Seu email ou nome de melhor amigo está incorreto.</span>
					</div>
				<?php endif ?>
			</form>

			<div class="text-center small text-white">
				Voltar ao login? <a href="./signin.php">Clique aqui</a>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>