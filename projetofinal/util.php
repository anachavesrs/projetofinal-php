<?php 
// validar uma msg e retornar um texto apropriado
function validar_msg($msg)
{
	switch ($msg) {
		case 'embranco':
			$retorno = '<h3 class="alert alert-warning">Informe todos os dados para login</h3>';
			break;

		case 'invalido':
			$retorno = '<h3 class="alert alert-danger"> Atenção! Usuário o senha inválidos.</h3>';
			break;

		case 'cadembranco':
			$retorno = '<h3 class="alert alert-warning"> Preencha todos os dados do filme para cadastrar! </h3>';
			break;

		case 'edtembranco':
			$retorno = '<h3 class="alert alert-warning"> Preencha todos os dados do filme para editar! </h3>';
			break;

		case 'filmecadastrado':
			$retorno = '<h3 class="alert alert-success"> Filme cadastrado com sucesso! </h3>';
			break;

		case 'errocadastro':
			$retorno = '<h3 class="alert alert-danger"> Erro ao cadastrar filme! Tente novamente. </h3>';
			break;

		case 'idinvalido':
			$retorno = '<h3 class="alert alert-warning"> Atenção! Filme não encontrado. repita a operação. </h3>';
			break;

		case 'filmedeletado':
			$retorno = '<h3 class="alert alert-success"> Filme excluido com sucesso! </h3>';
			break;

		case 'errodeletar':
			$retorno = '<h3 class="alert alert-danger">Erro ao exclui filme. Tente novamente. </h3>';
			break;

		case 'editado':
			$retorno = '<h3 class="alert alert-success"> Dados do filme editados com sucesso! </h3>';
			break;

		case 'erroeditar':
			$retorno = '<h3 class="alert alert-danger">Erro ao editar dados. Tente novamente. </h3>';
			break;


		
		default:
			$retorno ='';
			break;
	}

	return $retorno;

}



 ?>