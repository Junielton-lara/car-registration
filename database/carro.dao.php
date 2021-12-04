<?php  
include_once 'conn.php';

// função para salvar carro
function salvar_carro($marca, $modelo, $ano)
{
	$conn = conectar();

	$sql = "INSERT INTO carros_tb (marca, modelo, ano) 
	VALUES ('$marca', '$modelo', '$ano')";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}


function buscar_carros()
{
	$conn = conectar();

	$sql = "SELECT * FROM carros_tb";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return $result;
	}

	return null;
}


function exibir_carros()
{
	$result = buscar_carros();

	
	if ($result == null)
	{
		$retorno = '<h3>Não há carros cadastrados</h3>';
	}
	else 
	{
		$retorno = '<div class="col-6">';
		$retorno .= '<table class="table table-dark table-striped">';
		
		
		$retorno .= '<tr>';
		$retorno .= '<th>ID #</th>'; 
		$retorno .= '<th>Marca</th>';
		$retorno .= '<th>Modelo</th>';
		$retorno .= '<th>Ano</th>';
		$retorno .= '<th>Deletar</th>';
		$retorno .= '<th>Editar</th>';
		$retorno .= '</tr>';

		while ($carro = mysqli_fetch_assoc($result))
		{
			
			$retorno .= '<tr>';
			
			$retorno .= "<td>" . $carro['id_carro'] . "</td>";
			$retorno .= "<td>" . $carro['marca']   . "</td>";
			$retorno .= "<td>" . $carro['modelo']    . "</td>";
			$retorno .= "<td>" . $carro['ano']  . "</td>";
			$retorno .= "<td>" . link_deletar($carro['id_carro']) . "</td>";
			$retorno .= "<td>" . link_editar($carro['id_carro'])  . "</td>";
			$retorno .= '</tr>'; 
		}

		$retorno .= '</table>';
		$retorno .= '</div>';
	}

	return $retorno;
}

// função para montar o link de exclusão
function link_deletar($id_carro)
{
	$link = '<a href="deletar.php?id_carro='.$id_carro.'" 
	onclick="return confirm(\'Tem certeza que deseja excluir este carro?\')" class="btn btn-outline-danger">Deletar</a>';

	return $link;
}

// função para montar o linl para editar
function link_editar($id_carro)
{
	$link = '<a href="editar.php?id_carro='.$id_carro.'" class="btn btn-outline-warning">Editar</a>';
	return $link;
}

// função para deletar carro
function deletar_carro($id_carro)
{
	$conn = conectar();

	$sql = "DELETE FROM carros_tb WHERE id_carro = $id_carro";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}

// função para buscar um carro específico
function buscar_carro($id_carro)
{
	$conn = conectar();

	$sql = "SELECT * FROM carros_tb WHERE id_carro = $id_carro";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return $result;
	}

	return null;
}

// função para editar (atualizar) dados do carro
function editar_carro($id_carro, $marca, $modelo, $ano)
{
	$conn = conectar();

	$sql = "UPDATE carros_tb SET marca = '$marca', modelo = '$modelo', ano = '$ano' 
	WHERE id_carro = $id_carro";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}

?>