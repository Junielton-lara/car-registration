<?php include_once 'lock.php';
include_once '../database/carro.dao.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Projeto Final - Area Restrita</title>
	<link rel="stylesheet" href="../estilo/estilohome.css">
</head>
<body class="container-fluid">

   <div	div class="sair">
			<p>
				<a href="logout.php" class="btn btn-danger">Sair</a>
			</p>
	</div>

		<div class="barra">
				<h1>Car-registration</h1>
		</div>
	<h2>Área de cadastros</h2>	

	<?php  

	if (isset($_GET['msg']))
	{
		include_once '../util.php';
		echo validar_msg($_GET['msg']);
	}
	?>
	<div class="ajustartexto">
			<h3>Informe dados cadastrais de um novo veiculo:</h3>			
	</div>


	<div class="col-5">
		<form action="cadastrar.php" method="post">			
			<p>
				<label class="form-label">Marca:</label><br>
				<input type="text" name="marca" required class="form-control">
			</p>

			<p>
				<label class="text-uppercase">Modelo:</label><br>
				<input type="text" name="modelo" required class="form-control">
			</p>

			<p>
				<label class="text-uppercase">Ano:</label><br>
				<input type="text" name="ano" required class="form-control">
			</p>

			<p>
				<button type="submit" name="salvar" class="btn btn-success">Salvar</button>
			</p>

		</form>
	</div>

	<h2>Lista de carros</h2>

	<?php  

	echo exibir_carros();

	?>

</body>
</html>