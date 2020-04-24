<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Criar Nova Conta</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="./css/signup.css">
		<script src="./js/signup.js"></script>
	</head>
	<body>

		<div class="signup-form">
			<form action="./signup_user.php" method="post">
				<div class="form-header">
					<h2>Cadastro</h2>
					<p>Preencha este formulário e comece a conversar com seus amigos.</p>
				</div>

				<div class="form-group">
					<label for="user">Nome de Usuário</label>
					<input type="text" id="user" class="form-control" name="user_name" placeholder="Exemplo: Alister" autocomplete="off" required>
				</div>

				<div class="form-group">
					<label for="password">Senha</label>
					<input type="password" id="password" class="form-control" name="user_password" placeholder="Senha (mínimo de 8 caracteres)" autocomplete="off" required>
				</div>

				<div class="form-group">
					<label for="email">Endereço de Email</label>
					<input type="email" id="email" class="form-control" name="user_email" placeholder="alguém@site.com" autocomplete="off" required>
				</div>

				<div class="form-group">
					<label for="city">Cidade</label>
					<select id="city" class="form-control" name="user_city" required>
						<option disabled="">Escolha uma Cidade</option>
						<option>Guaratinguetá</option>
						<option>Aparecida</option>
						<option>Lorena</option>
						<option>Pindamonhangaba</option>
						<option>Taubaté</option>
						<option>São José dos Campos</option>
						<option>São Paulo</option>
					</select>
				</div>

				<div class="form-group">
					<label for="gender">Genero</label>
					<select id="gender" class="form-control" name="user_gender" required>
						<option disabled="">Escolha seu Genero</option>
						<option>Masculino</option>
						<option>Feminino</option>
						<option>Outros</option>					
					</select>
				</div>

				<div class="form-group">
					<label class="checkbox-inline">
						<input type="checkbox" required>
						Eu aceito os <a href="#">Termos de Uso</a> &amp; <a href="#">Política de Privacidade</a>
					</label>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">
						Cadastrar
					</button>
				</div>

				<?php include("signup_user.php"); ?>			
			</form>

			<div class="text-center small gray">
				Já possui uma conta? <a href="./signin.php">Faça login</a>
			</div>
		</div>

		<div id="modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  	<div class="modal-dialog modal-dialog-centered modal-sm">
			    <div class="modal-content">
			    	<div class="modal-header">
			          	<h4 class="modal-title">Mensagem de Erro</h4>
			          	<button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			    	<div class="modal-body">
				        <p class="text-danger" id="msg"></p>
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