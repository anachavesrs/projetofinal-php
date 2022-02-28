<?php include_once 'lock.php';

if (!isset($_GET['id'])) 
{
	header('location:index.php?msg=idinvalido');
}
else
{
	$id = $_GET['id'];

	include_once '../database/filmes.dao.php';

	$result = deletar_filme($id);

	if ($result) 
	{
		header('location:index.php?msg=filmedeletado');
	}
	else
	{
		header('location:index.php?msg=errodeletar');
	}
}

 ?>