		<div class="container-fluid">
			<div class="row">

				<div class="col-sm-8 mx-auto">
					<form action="" method="post" enctype="multipart/form-data">
						<table class="table table-bordered table-hover">
							<thead>
								<tr align="center">
									<th colspan="6" class="active">
										<h2>Alterar Senha</h2>
									</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<th>Senha Atual</th>
									<td>
										<input type="password" name="current_pass" class="form-control" required placeholder="Senha Atual">
									</td>
								</tr>

								<tr>
									<th>Nova Senha</th>
									<td>
										<input type="password" name="u_pass1" class="form-control" required placeholder="Nova Senha">
									</td>
								</tr>

								<tr>
									<th>Confirmar Senha</th>
									<td>
										<input type="password" name="u_pass2" class="form-control" required placeholder="Confirmar Senha">
									</td>
								</tr>

								<tr align="center">
									<td colspan="6">
										<button type="submit" name="change" class="btn btn-info">Alterar</button>
									</td>
								</tr>
							</tbody>
						</table>
					</form>

					<?php if (!empty($error)) : ?>
						<div class='alert alert-danger text-center'>
							<strong><?= $error ?></strong>
						</div>
					<?php endif ?>

					<?php if (!empty($success)) : ?>
						<div class='alert alert-success text-center'>
							<strong><?= $success ?></strong>
						</div>
					<?php endif ?>
				</div>

			</div>
		</div>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</body>
</html>