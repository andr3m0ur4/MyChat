		<div class="container-fluid">
			<div class="row">
				
				<div class="col-sm-8 mx-auto">
					<form action="" method="post" enctype="multipart/form-data">

						<table class="table table-bordered table-hover">
							<thead>
								<tr align="center">
									<td colspan="6" class="active">
										<h2>Alterar Configurações da Conta</h2>
									</td>
								</tr>
							</thead>

							<tbody>
								<tr>
									<th>Alterar seu Nome de Usuário</th>
									<td>
										<input type="text" name="u_name" class="form-control" required value="<?= $user_name ?>">
									</td>
								</tr>

								<tr>
									<td></td>
									<td>
										<a class="btn" href="./upload.php">
											<i class="fa fa-user" aria-hidden="true"></i> Alterar Foto de Perfil
										</a>
									</td>
								</tr>

								<tr>
									<th>Alterar Seu Email</th>
									<td>
										<input type="email" name="u_email" class="form-control" required value="<?= $user_email ?>">
									</td>
								</tr>

								<tr>
									<th>Cidade</th>
									<td>
										<select class="form-control" name="u_city">
											<option><?= $user_city ?></option>
											<option>Guaratinguetá</option>
											<option>Caçapava</option>
											<option>Cruzeiro</option>
											<option>Cachoeira Paulista</option>
											<option>Jacareí</option>
										</select>
									</td>
								</tr>

								<tr>
									<th>Gênero</th>
									<td>
										<select class="form-control" name="u_gender">
											<option><?= $user_gender ?></option>
											<option>Masculino</option>
											<option>Feminino</option>
											<option>outros</option>								
										</select>
									</td>
								</tr>

								<tr>
									<th>Esqueceu a Senha</th>
									<td>
										<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">Esqueceu a Senha</button>	
									</td>
								</tr>

								<tr>
									<td></td>
									<td>
										<a class="btn" href="./change_password.php">
											<i class="fa fa-key fa-fw" aria-hidden="true"></i> Trocar Senha
										</a>
									</td>
								</tr>

								<tr align="center">
									<td colspan="6">
										<button type="submit" name="update" class="btn btn-info">Atualizar</button>
									</td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>

			</div>
		</div>

		<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5>Qual é o Nome do seu Melhor Amigo da Escola?</h5>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<div class="modal-body">
						<form action="./account_settings.php?id=<?= $user_id ?>" method="post" id="f">
							<textarea class="form-control mb-4" cols="83" rows="4" name="content" placeholder="Alguém"></textarea>
							<button class="btn btn-secondary mb-5" type="submit" name="sub">Enviar</button>
							<p class="mb-5">
								Responda a pergunta acima, nós iremos fazer esta pergunta a você se você esquecer sua Senha.
							</p>
						</form>

						<?php if (isset($_POST['sub'])) : ?>
							<?php if ($content == '') : ?>
								<script>
									alert('Por favor Digite Algo')
									window.open('./account_settings.php', '_self')
								</script>
								
							<?php else : ?>

								<?php if ($run) : ?>
									<script>
										alert('Funcionando...')
										window.open('./account_settings.php', '_self')
									</script>
								<?php else : ?>
									<script>
										alert('Erro enquanto Atualizando Informação.')
										window.open('./account_settings.php', '_self')
									</script>
								<?php endif ?>
							<?php endif ?>
						<?php endif ?>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</body>
</html>