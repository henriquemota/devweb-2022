<? include_once('./partials/header.php'); ?>

<?
	$produtos = [
		array('id' => 1, 'nome' => 'Notebook', 'valor' => 1535.50, 'imagem' => 'produto01.jpg'),
		array('id' => 2, 'nome' => 'TV 43 pol', 'valor' => 2450.23, 'imagem' => 'produto02.jpg'),
		array('id' => 3, 'nome' => 'Máquina de lavar', 'valor' => 73430.00, 'imagem' => 'produto03.jpg'),
		array('id' => 4, 'nome' => 'Alexa geração 5', 'valor' => 430.00, 'imagem' => 'produto04.jpg'),
		array('id' => 5, 'nome' => 'Brinquedo de dinossauro', 'valor' => 65.00, 'imagem' => 'produto05.jpg'),
	];
?>

<div class='container my-3'>
	<? include('./partials/search.php')?>

	<div class='row'>
		<? foreach ($produtos as $item):  ?>
			<div class='col-sm-3'>
				<div class='card my-3'>
					<img src="./assets/<?= $item['imagem']; ?>" class="card-img-top" alt="...">
					<div class='card-body'>
						<p class='my-0'><?= $item['nome']; ?></p>
						<p class='my-0'>R$ <?= $item['valor']; ?></p>
					</div>
					<div class='card-footer'>
						<button class='btn btn-primary'>carrinho</button>
						<button class='btn btn-secondary'>detalhes</button>
					</div>
				</div>
			</div>
		<? endforeach; ?>
	</div>
</div>

<? include_once('./partials/footer.php'); ?>
	