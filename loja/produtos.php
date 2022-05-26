<? include('./partials/header.php'); ?>
<?
	$data = [
		array('id' => 1, 'nome' => 'banana', 'valor' => 7.5, 'foto' => 'https://d3ugyf2ht6aenh.cloudfront.net/stores/746/397/products/banana_caturra1-7e2b9a3f6b39b3309915220270001382-1024-1024.jpg'),
		array('id' => 2, 'nome' => 'maçã', 'valor' => 4.5, 'foto' => 'https://hiperideal.vteximg.com.br/arquivos/ids/167706/56383.jpg?v=636615816296530000'),
		array('id' => 3, 'nome' => 'pera', 'valor' => 2.5, 'foto' => 'https://static9.depositphotos.com/1642482/1148/i/450/depositphotos_11489464-stock-photo-pears.jpg'),
		array('id' => 4, 'nome' => 'goiaba', 'valor' => 3.5, 'foto' => 'https://s1.static.brasilescola.uol.com.br/be/conteudo/images/fruto-polpa-rosada-apta-para-consumo-537e5dda94063.jpg'),
	];
?>
<div class="container">
	<h1>Nossos produtos</h1>
	<div class="row" id="linha">
		<? foreach ($data as $item):  ?>
			<div class="col-sm-4">
				<div class="card my-2">
				<img src="<?=$item['foto'];?>" class="card-img-top" alt="<?= $item['nome']?>">
					<div class="card-body">
						<p><?= $item['nome'];?></p>
						<p><?= $item['valor'];?></p>
					</div>
				</div>
			</div>
			<? endforeach; ?>
		</div>
	</div>
<? include('./partials/footer.php'); ?>