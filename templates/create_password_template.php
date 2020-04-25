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
					<h2>Criar Nova Senha</h2>
					<p>MyChat</p>
				</div>

				<div class="form-group">
					<label for="pass1">Digite a Senha</label>
					<input type="password" class="form-control" id="pass1" name="pass1" placeholder="Senha" autocomplete="off" required>
				</div>

				<div class="form-group">
					<label for="pass2">Confirme a Senha</label>
					<input type="password" id="pass2" class="form-control" name="pass2" placeholder="Confirme a Senha" autocomplete="off" required>
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-lg" name="change">Alterar</button>
				</div>

				<?php if (!empty($msg_error)) : ?>
					<div class="alert alert-danger">
						<span class="small"><?= $msg_error ?></span>
					</div>
				<?php endif ?>
			</form>
		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>