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
		<script src="./js/signin.js" charset="UTF-8"></script>
	</head>
	<body>

		<div class="signin-form">
			<form action="./signin_user.php" method="post">
				<div class="form-header">
					<h2>Entrar</h2>
					<p>Login para MyChat</p>
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" id="email" class="form-control" name="email" placeholder="alguém@site.com" autocomplete="off" required>
				</div>

				<div class="form-group">
					<label for="password">Senha</label>
					<input type="password" id="password" class="form-control" name="password" placeholder="Senha" autocomplete="off" required>
				</div>

				<div class="small">
					Esqueceu a Senha? <a href="./forgot_pass.php">Clique aqui</a>
				</div>

				<div class="form-group mt-4">
					<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Entrar</button>
				</div>

				<?php if (isset($_GET['error'])) : ?>
					<div class='alert alert-danger'>
						<strong>Verifique seu email e senha.</strong>
					</div>
				<?php endif ?>
			</form>

			<div class="text-center small text-white">
				Não possui uma conta? <a href="./signup.php">Crie uma</a>
			</div>
		</div>

		<div id="modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  	<div class="modal-dialog modal-dialog-centered modal-sm">
			    <div class="modal-content">
			    	<div class="modal-header">
			          	<h4 class="modal-title">Usuário cadastrado!</h4>
			          	<button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			    	<div class="modal-body">
				        <p class="text-success" id="msg"></p>
				    </div>
				    <div class="modal-footer">
			          	<button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
			        </div>
			    </div>
		  	</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>