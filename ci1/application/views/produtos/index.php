<html lang="en">
	<head>
		<link rel = "stylesheet" href="<?=base_url("css/bootstrap.css")?>">
	</head>
	<body>
		<div class="container">
			<h1>Produtos</h1>
			<table class="table">
			<? foreach ($produtos as $produto) : ?>
				<tr>
					<td><?=$produto["nome"]?></td>
					<td><?=numeroEmReais($produto["preco"])?></td>
				</tr>
			<? endforeach ?>
			</table>
		</div>
	</body>
</html>