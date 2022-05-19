const buscaCEP = async () => {
	const pre = document.getElementById('response')
	try {
		const input = document.getElementById('cep')
		pre.innerHTML = 'Aguarde...'
		const { status, data } = await axios.get(
			`https://viacep.com.br/ws/${input.value}/json/`
		)
		if (Number(status) === 200) {
			const { logradouro, complemento, bairro, localidade, uf, ddd } = data
			pre.innerHTML = `
        Logradouro: ${logradouro}<br />
        Complemento: ${complemento}<br />
        Bairro: ${bairro}<br />
        Localidade: ${localidade}<br />
        UF: ${uf}<br />
        DDD: ${ddd}<br />
      `
		} else {
			pre.innerHTML = ''
		}
	} catch (error) {
		pre.innerHTML = ''
	}
}
