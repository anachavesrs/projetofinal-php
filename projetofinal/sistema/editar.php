<?php include_once 'lock.php'; 
      include_once '../database/filmes.dao.php'; 

      if (!isset($_GET['id'])) 
      {
      		header('location:index.php?msg=idinvaldo');
      }
      else
      {
      	//tentar buscar o filme especificado

      	$result = buscar_filmes($_GET['id']);

      	if ($result == null) 
      	{
      		header('location:index.php?msg=idinvaldo');
      	}
      	else
      	{
      		// converter o result em um array associativo

      		$filme = mysqli_fetch_assoc($result);
      	}


      }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title> Projeto Final - Editar filme</title>
</head>
<body class="container-fluid">

	<h1> - BestFilmes - Editar Filme</h1>

	<p>
		<a href="index.php" class="btn btn-primary btn-sm">Cancelar edição</a>
	</p>

	<h2>Editar dados do filme:</h2>

	<div class="col-5" >
		<form action="editado.php" method="post">

			<p>
				<label class="form-label">Nome do Filme</label><br>
				<input type="text" name="nome" required value="<?= $filme['nome'] ?>" class="form-control">
			</p>
			<p>
				<label class="form-label">Gênero</label><br>
				<input type="text" name="genero" required value="<?= $filme['genero'] ?>" class="form-control">
			</p>
			<p>
				<label class="form-label">Ano que foi lançado</label><br>
				<input type="number" name="ano" min="1900" max="<?= date('Y'); ?>" required value="<?= $filme['ano'] ?>" class="form-control">
			</p>

			<p>
				<button type="submit" name="salvar" class="btn btn-outline-primary"> Salvar Alterações </button>
			</p>

			<input type="hidden" name="id" value="<?= $filme['id'] ?>" >

		</form>
    </div>



</body>
</html>