<?php 
include_once 'lock.php';

 
 // se o form de edição não foi enviado ou se algum campo estiver em branco
	if (!isset($_POST['salvar']) || empty($_POST['nome']) || empty($_POST['genero']) || empty($_POST['ano'])) 
	{
		header('location:index.php?msg=edtembranco');
	}
	else
	{
		$id = $_POST['id'];
		$nome   = $_POST['nome'];
		$genero = $_POST['genero'];
		$ano    = $_POST['ano'];

		include_once '../database/filmes.dao.php';

		$result = editar_filme ($id, $nome, $genero, $ano);

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
