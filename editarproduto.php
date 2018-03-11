<?php
include "conexao.php";

$id= $_POST['id'];
$sql= "SELECT * FROM paginainicial WHERE id = '$id' limit 1";
$result = $conn->query($sql);
  while($row = $result->fetch_assoc()){
    $nome = $row['nome'];
    $preco = $row['preco'];
    $categoria = $row['categoria'];
 }

?>



<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <title>e-Commerce</title>
  </head>
  <body>
    

    <div class="container">
		<section>
		<h1>Atualização de dados do produto</h1><hr />


		<form method="POST" action="updateproduto.php">

<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ID do produto</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" name="id" value="<?php echo $id; ?>">
    </div>
  </div>
    <div class="form-group">
      <label > Nome</label>
      <input type="text" name="nome" value="<?php echo $nome; ?>"  class="form-control form-control-lg"  />
    </div>

		<div class="form-group">
			<label> Preco </label>
			<input type="text" name="preco" value="<?php echo $preco; ?>" class="form-control form-control-lg" />     
		</div>

    <div class="form-group">
      <label> categoria </label>
      <input type="text" name="categoria" value="<?php echo $categoria; ?>" class="form-control form-control-lg" />
    </div>

     
   <button type="submit" class="btn btn-primary btn-lg">Enviar</button>

   	</form>
		</section>
	</div>
  <div class="container">
    
  <button  type="submit" class="btn btn-success  " href="perfilfunc.php"> Voltar ! </button>
</div>
  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>