window.onload = () => {
	let success = location.search.substr(9, 1)
	let name = decodeURI(location.search.substr(16))

	if (success == 1) {
		$('#msg').html(`Parabéns ${name}, sua conta foi criada com sucesso.`)
		$('#modal').modal('show')
	}
}
