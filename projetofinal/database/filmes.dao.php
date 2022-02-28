<?php 
include_once 'conn.php';

// funcao para salvar filme 

function salvar_filme ($nome, $genero, $ano)
{
	$conn = conectar();

	$sql = "INSERT INTO filmes_tb (nome, genero, ano)
	VALUES ('$nome', '$genero', $ano)";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0) 
	{
		return true;
	}
	else
	{
		return false;
	}
}

// funcao para buscar todos os filmes 

function buscar_filmes()

{
	$conn = conectar();;

	$sql = "SELECT * FROM filmes_tb";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0) 
	{
		return $result;
	}
	else 
	{
		return null;
	}

}

// exibir os filmes 

function exibir_filmes()
{

	$result = buscar_filmes();

	if ($result == null) 
	{
		$retorno = '<h3> Não há filmes cadastrados! </h3>';
	}
	else 
	{
		$retorno = '<div class="col-6" >';
		$retorno.= '<table class= "table table-striped table-hover">';

		$retorno.= '<tr>';
		$retorno.= '<th> ID #</th>';
		$retorno.= '<th> Nome</th>';
		$retorno.= '<th> Gênero</th>';
		$retorno.= '<th> Ano</th>';
		$retorno.='<th> Deletar</th>';
		$retorno.='<th> Editar</th>';
		$retorno.= '</tr>';

		while ($filme = mysqli_fetch_assoc($result)) 
		{
			$retorno .= '<tr>';

			$retorno .= "<td>"   . $filme['id']     . "</td>";
			$retorno .= "<td>"   . $filme['nome']   . "</td>";
			$retorno .= "<td>"  . $filme['genero'] . "</td>";
			$retorno .= "<td>"  . $filme['ano']    . "</td>";
			$retorno .= "<td>"  . link_deletar($filme['id']) . "</td>";
			$retorno .= "<td>"  . link_editar($filme['id']) . "</td>";

			$retorno .= '</tr>';

		}

		$retorno.= '</table>';
		$retorno.= '</div>';

	}

	return $retorno;
}

//funcao para montar o link de exclusao
function link_deletar($id)
{
	$link = '<a href="deletar.php?id='.$id.'" onclick="return confirm(\' Tem certeza que deseja excluir esse filme?\')" class="btn btn-danger">Deletar</a>';

	return $link;
}

//funcao para montar o link para editar

function link_editar($id)
{

	$link = '<a href="editar.php?id='.$id.'" class="btn btn-warning">Editar</a>';

	return $link;
}

//função para deletar o livro
function deletar_filme($id)
{

	$conn = conectar();

	$sql = "DELETE FROM filmes_tb WHERE id = $id";

	$result= mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0) 
	{
		return true;
	}
	else
	{
		return false;
	}	


}

 
  //função para buscar um filme especi´fico
	
function buscar_filme($id)
{
 	$conn = conectar();

 	$sql = "SELECT * FROM filmes_tb WHERE  id = $id";

 	$result = mysqli_query($conn, $sql);

 	if (mysqli_affected_rows($conn) > 0) 
 	{
 		return $result;
 	}
 	else
 	{
 		return null;
 	}


}

// função para editar os dados do filme

function editar_filme ($id, $nome, $genero, $ano)
{
	$conn = conectar();

	$sql = "UPDATE filmes_tb SET nome = '$nome', genero = '$genero', ano = $ano
	WHERE id = $id ";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0) 
	{
		return true;
	}
	else
	{
		return false;
	}
}

 ?>