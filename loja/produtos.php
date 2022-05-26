<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
			crossorigin="anonymous"
		></script>
		<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
		<title>PDV || Ponto de venda</title>
	</head>
	<body>
		<div class="container">
		<h1>Nossos produtos</h1>
		<?
			$data = [
				array('id' => 1, 'nome' => 'banana', 'valor' => 7.5),
				array('id' => 2, 'nome' => 'maçã', 'valor' => 4.5),
				array('id' => 3, 'nome' => 'pera', 'valor' => 2.5),
				array('id' => 4, 'nome' => 'goiaba', 'valor' => 3.5),
			];
		?>
			<div class="row" id="linha">
				<? foreach ($data as $item):  ?>
					<div class="col-sm-4">
						<div class="card my-2">
							<div class="card-body">
								<?= $item['nome'];?>
							</div>
						</div>
					</div>
				<? endforeach; ?>
			</div>
		</div>
	</body>
</html>
