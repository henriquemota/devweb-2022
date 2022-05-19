const play = (playerMovment) => {
	const pre = document.getElementById('response')
	const movements = ['pedra', 'papel', 'tesoura']
	const sorted = movements[Math.floor(Math.random() * movements.length)]

	pre.innerHTML = 'Processando...'
	setTimeout(() => {
		let resultado = null
		if (playerMovment === sorted) resultado = 'empate'
		else if (
			(playerMovment === 'pedra' && sorted !== 'papel') ||
			(playerMovment === 'papel' && sorted !== 'tesoura') ||
			(playerMovment === 'tesoura' && sorted !== 'pedra')
		)
			resultado = 'você venceu'
		else resultado = 'app venceu'

		pre.innerHTML = `<p>computador jogou ${sorted}, ${resultado}</p>`
	}, 1000)
}
