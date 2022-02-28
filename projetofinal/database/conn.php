<?php 
include_once 'config.inc.php';

function conectar()
{
	return $conn= mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);
	
}

 ?>