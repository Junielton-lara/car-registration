<?php include_once 'lock.php';
// se o form de edição nao foi enviado ou se algum campo estiver em branco
if (!isset($_POST['salvar']) || empty($_POST['marca']) || empty($_POST['modelo']) || empty($_POST['ano']))
{
	header('location:index.php?msg=edtembranco');
}
else
{
	$id_carro = $_POST['id_carro'];
	$marca	  = $_POST['marca'];
	$modelo    = $_POST['modelo'];
	$ano  = $_POST['ano'];

	include_once '../database/carro.dao.php';

	$result = editar_carro($id_carro, $marca, $modelo, $ano);

	if ($result)
	{
		header('location:index.php?msg=editado');
	}
	else
	{
		header('location:index.php?msg=erroeditar');
	}
}


?>