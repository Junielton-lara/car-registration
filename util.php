<?php  
// função para validar uma mensagem e retornar um texto apropriado
function validar_msg($msg)
{

	switch ($msg) {
		case 'embranco':
			$retorno = '<h3 class="alert alert-warning">Informe todos os dados para efetuar o login!</h3>';
			break;

		case 'invalido':
			$retorno = '<h3 class="alert alert-danger">Atenção: Usuário ou senha inválidos</h3>';
			break;

		case 'cadembranco':
			$retorno = '<h3 class="alert alert-warning">Preencha todos os dados do carro para cadastrar!</h3>';
			break;

		case 'edtembranco':
			$retorno = '<h3 class="alert alert-warning">Preencha todos os dados do carro para editar!</h3>';
			break;

		case 'cadastrado':
			$retorno = '<h3 class="alert alert-success">Carro cadastrado com sucesso!</h3>';
			break;

		case 'errocadastro':
			$retorno = '<h3 class="alert alert-danger">Atenção: erro ao efetuar o cadastro. Tente novamente mais tarde...</h3>';
			break;

		case 'idinvalido':
			$retorno = '<h3 class="alert alert-warning">Atenção: Carro inválido. por favor, repita a operação</h3>';
			break;

		case 'carrodeletado':
			$retorno = '<h3 class="alert alert-success">Carro excluído com sucesso!</h3>';
			break;

		case 'errodeletar':
			$retorno = '<h3 class="alert alert-danger">Atenção: erro ao excluir carro. Tente novamente mais tarde...</h3>';
			break;

		case 'editado':
			$retorno = '<h3 class="alert alert-success">Dados do carro alterados com sucesso!</h3>';
			break;

		case 'erroeditar':
			$retorno = '<h3 class="alert alert-danger">Atenção: erro ao alterar dados do carro. Tente novamente mais tarde...</h3>';
			break;

		default:
			$retorno = '';
			break;
	}

	return $retorno;

}
?>