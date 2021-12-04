<?php include_once 'lock.php';
include_once '../database/carro.dao.php'; 

if (!isset($_GET['id_carro']))
{
	header('location:index.php?msg=idinvalido');
}
else
{
	// tentar buscar o carro especificado no id
	$result = buscar_carro($_GET['id_carro']);

	if($result == null)
	{
		header('location:index.php?msg=idinvalido');
	}
	else
	{
		// converter o retorno (result) em um array associativo
		$carro = mysqli_fetch_assoc($result);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../estilo/estilohome.css">
	
	<title>Projeto Final - Editar carros</title>
</head>
<body class="container-fluid">

<div class="barra1">
			<h1>Car-Registration - Editar carros</h1>
			<p>
				<a href="index.php" class="btn btn-primary btn-sm">Cencelar Edição</a>
			</p>
</div>
	


	<div class="col-5">
		<form action="editado.php" method="post">
			
			<p>
				<label class="form-label">Marca</label><br>
				<input type="text" name="marca" required value="<?= $carro['marca'] ?>" class="form-control">
			</p>

			<p>
				<label class="form-label">Modelo</label><br>
				<input type="text" name="modelo" required value="<?= $carro['modelo'] ?>" class="form-control">
			</p>

			<p>
				<label class="form-label">Ano</label><br>
				<input type="text" name="ano" required value="<?= $carro['ano'] ?>" class="form-control">
			</p>

			<p>
				<button type="submit" name="salvar" class="btn btn-outline-primary">Salvar Alterações do carro</button>
			</p>

			<input type="hidden" name="id_carro" value="<?= $carro['id_carro'] ?>">

		</form>
	</div>

</body>
</html>