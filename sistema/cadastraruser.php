<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>user cadastrado</h1>
</body>
</html>

<?php  include_once 'lock.php';
if (!isset($_POST['Criar']) || empty($_POST['usuario']) || empty($_POST['senha']) )
{
	header('location:index.php?msg=cadembranco');
}
else
{
	$usuario	 = $_POST['usuario'];
	$senha       = $_POST['senha'];
	

	include_once '../database/usuario.dao.php';

	$result = criar_user($usuario, $senha);

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