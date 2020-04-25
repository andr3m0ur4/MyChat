window.onload = () => {
	let query = location.search
	let params = new URLSearchParams(query)
	let success = parseInt(params.get('success'))
	let name = decodeURI(params.get('name'))

	if (success === 1) {
		$('#msg').html(`Parabéns ${name}, sua conta foi criada com sucesso.`)
		$('#modal').modal('show')
	}
}
