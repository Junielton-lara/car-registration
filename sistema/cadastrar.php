<?php  include_once 'lock.php';
if (!isset($_POST['salvar']) || empty($_POST['marca']) || empty($_POST['modelo']) || empty($_POST['ano']))
{
	header('location:index.php?msg=cadembranco');
}
else
{
	$marca	 = $_POST['marca'];
	$modelo   = $_POST['modelo'];
	$ano = $_POST['ano'];

	include_once '../database/carro.dao.php';

	$result = salvar_carro($marca, $modelo, $ano);

	if ($result)
	{
		header('location:index.php?msg=cadastrado');
	}
	else
	{
		header('location:index.php?msg=errocadastro');
	}
}

?>