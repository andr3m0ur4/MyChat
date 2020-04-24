window.onload = () => {
	let error = location.search.replace('?error=', '')

	if (error == 1) {
		$('#msg').html('Não podemos verificar seu nome.')
		$('#modal').modal('show')
	}

	if (error == 2) {
		$('#msg').html('Não podemos verificar seu e-mail.')
		$('#modal').modal('show')
	}

	if (error == 3) {
		$('#msg').html('Senha deve ter no mínimo 8 caracteres.')
		$('#modal').modal('show')
	}

	if (error == 4) {
		$('#msg').html('Email já existe, por favor tente novamente!')
		$('#modal').modal('show')
	}

	if (error == 5) {
		$('#msg').html('Registro falhou, tente novamente!')
		$('#modal').modal('show')
	}
}
