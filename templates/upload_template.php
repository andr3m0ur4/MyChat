		<div class='card mb-5'>
			<img src='./<?= $user_profile ?>' id='preview'>
			<h1><?= $user_name ?></h1>
			<form method='post' enctype='multipart/form-data'>
				<label id='update_profile'>
					<i class='fa fa-circle-o' aria-hidden='true'></i> Escolher Foto
					<input type='file' id='imgChooser' name='u_image' size='60'>
				</label>

				<button id='button_profile' name='update'>
					<i class='fa fa-heart ml-5' aria-hidden='true'></i> Atualizar Perfil
				</button>
			</form>
		</div>

		<script type="text/javascript">
			function readImage() {
			    if (this.files && this.files[0]) {
			        var file = new FileReader();
			        file.onload = function(e) {
			            document.getElementById("preview").src = e.target.result;
			        };       
			        file.readAsDataURL(this.files[0]);
			    }
			}

			document.getElementById("imgChooser").addEventListener("change", readImage, false);
		</script>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</body>
</html>