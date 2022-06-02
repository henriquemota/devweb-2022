		<?
			$menu = [
				array('nome' => 'home', 'endereco' => './'),
				array('nome' => 'login', 'endereco' => './login.php'),
				array('nome' => 'registre-se', 'endereco' => './registre-se.php'),
				array('nome' => 'carrinho', 'endereco' => './meu-carrinho.php'),
			]
		?>

		<nav class="navbar navbar-dark bg-dark bg-red">
			<div class="container">
					<ul class="navbar-nav">
					<? foreach ($menu as $item):  ?>
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="<?= $item['endereco']; ?>"><?= $item['nome']; ?></a>
						</li>
					<? endforeach; ?>
					</ul>
			</div>
		</nav>
	</body>
</html>
