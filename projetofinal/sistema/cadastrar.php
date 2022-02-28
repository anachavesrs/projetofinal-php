<?php include_once 'lock.php';

if (!isset($_POST['cadastrar']) || empty($_POST['nome']) || empty($_POST['genero']) || empty($_POST['ano'])) 
{
	header('location:index.php?msg=cadembranco');
}
else
{
	$nome   = $_POST['nome'];
	$genero = $_POST['genero'];
	$ano    = $_POST['ano'];

	include_once '../database/filmes.dao.php';

	$result = salvar_filme ($nome, $genero, $ano);

	if ($result) 
	{
		header('location:index.php?msg=filmecadastrado');
	}
	else
	{
		header('location:index.php?msg=errocadastro');
	}
}
	


 ?>