<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>My Chat - Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="./css/home.css">
	</head>
	<body>

		<div class="container-fluid main-section">
			<div class="row">
				<div class="col-12 col-sm-3 left-sidebar">
					<div class="input-group searchbox">
						<div class="input-group-append mx-auto">
							<a href="./include/find_friends.php">
								<button class="btn btn-secondary search-icon" type="button">
									Adicionar novo usuário
								</button>
							</a>
						</div>
					</div>

					<div class="left-chat">
						<ul>
							<?php foreach ($user_list as $user) : ?>
								<li>
									<div class='chat-left-img'>
										<img src='<?= $user['user_profile'] ?>'>
									</div>

									<div class='chat-left-detail'>
										<p>
											<a href='./home.php?user_name=<?= $user['user_name'] ?>'>
												<?= $user['user_name'] ?>
											</a>
										</p>

										<?php if ($user['log_in'] == 'Online') : ?>
											<span>
												<i class='fa fa-circle' aria-hidden='true'></i> Online
											</span>
										<?php else : ?>
											<span>
												<i class='fa fa-circle-o' aria-hidden='true'></i> Offline
											</span>
										<?php endif ?>
									</div>
								</li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>

				<div class="col-12 col-sm-9 right-sidebar">
					<div class="row">
						<div class="col-md-12 right-header">
							<div class="right-header-img">
								<img src="<?= $user_profile_image ?>">
							</div>

							<div class="right-header-detail">
								<form method="post" action="./logout.php">
									<p><?= $username ?></p>
									<span><?= $total ?> mensagens</span>
									<button type="submit" name="logout" class="btn btn-danger ml-5">
										Logout
									</button>
								</form>
							</div>
						</div>
					</div>

					<div class="row">
						<div id="scrolling_to_bottom" class="col-12 right-header-content-chat">
							<ul>
								<?php foreach ($chats as $chat) : ?>
									<?php if ($user_name == $chat['sender_username'] AND $username == $chat['receiver_username']) : ?>
										<li>
											<div class='rightside-right-chat'>
												<span><?= $user_name ?>
													<small><?= $chat['msg_date'] ?></small>
												</span><br><br>

												<p><?= $chat['msg_content'] ?></p>
											</div>
										</li>
									<?php elseif ($user_name == $chat['receiver_username'] AND $username == $chat['sender_username']) : ?>
										<li>
											<div class='rightside-left-chat'>
												<span><?= $chat['username'] ?>
													<small><?= $chat['msg_date'] ?></small>
												</span><br><br>

												<p><?= $chat['msg_content'] ?></p>
											</div>
										</li>
									<?php endif ?>
								<?php endforeach ?>
							</ul>
						</div>
					</div>

					<div class="row">
						<div class="col-12 right-chat-textbox">
							<form method="post">
								<input type="text" name="msg_content" autocomplete="off" placeholder="Digite sua mensagem.......">
								<button class="btn" name="submit">
									<i class="fa fa-telegram" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
		<script src="./js/home.js"></script>

	</body>
</html>