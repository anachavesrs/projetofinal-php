<?php include_once 'lock.php'; 
      include_once '../database/filmes.dao.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Projeto Final - Restrita</title>
</head>
<body class="container-fluid">

	<h1>BestFilmes - Restrita</h1>

	<p>
		<a href="logout.php" class="btn btn-primary btn-sm">Sair do Sistema</a>
	</p>

	<?php if (isset($_GET['msg'])) 
	{
		include_once '../util.php';
		echo validar_msg($_GET['msg']);
	} ?>

	<h2> Cadastrar Filmes:</h2>

	<div class="col-5">
		<form action="cadastrar.php" method="post">

			<p>
				<label class="form-label">Nome do Filme</label><br class="form-control">
				<input type="text" name="nome" required class="form-control">
			</p>
			<p>
				<label class="form-label">Gênero</label><br>
				<input type="text" name="genero" required class="form-control">
			</p>
			<p>
				<label class="form-label">Ano que foi lançado</label><br>
				<input type="number" name="ano" min="1900" max="<?= date('Y'); ?>" required class="form-control">
			</p>

			<p>
				<button type="submit" name="cadastrar" class="btn btn-outline-primary">Cadastrar</button>
			</p>

		</form>
    </div>


	<h2> Livros Cadastrados:</h2>

	<?php 

		echo exibir_filmes();
	 ?>



</body>
</html>