<?php 
// verificar se o form nao foi envido

if (!isset($_POST['entrar']) || empty($_POST['usuario']) || empty($_POST['senha'])) 
{
	//redirecionar para a home
	header('location:index.php?msg=embranco');
}// fim if isset
else
{
	$usuario = $_POST['usuario'];
	$senha   = $_POST['senha'];

	// incluir o usuario dao

	include_once 'database/usuario.dao.php';

	$result = buscar_usuario ($usuario, $senha);

	if ($result) 
	{
		session_start();
		$_SESSION ['usuario'] = $usuario;
		$_SESSION ['senha'] = $senha; 

		//redirecionar p pagina restrita

	header('location:sistema/index.php');
	}
	else
	{
		//de volta p home
		header('location:index.php?msg=invalido');
	}
}











?>