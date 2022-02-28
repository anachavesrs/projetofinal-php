<?php 
// Função para buscar um usuário no banco de dados
function buscar_usuario($usuario, $senha)
{
	
	// incluir arquivo de conexao

	include_once 'conn.php';

	// estabelecer uma conexao com o banco de dados

	$conn = conectar();

	//mostrar uma busca na tabela de usuarios_tb

	$sql = "SELECT * FROM usuarios_tb WHERE usuario = '$usuario' AND senha = '$senha'";

	//executar o comando 

	$result = mysqli_query($conn, $sql);

	// verificar o numero de linha afetadas pelo comando sql

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