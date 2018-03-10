<?php

  include 'header.php';
  include 'nav.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
</head>
<body>

<div class="container">
	<p>&nbsp;</p>
	<h3 class="text-center">Cadastro</h3>
	<hr />
	<p>&nbsp;</p>
</div>

<div class="container">

	<form method="POST" action="inserirproduto.php">
	  <div class="form-row">

	    <div class="form-group col-md-12">
	      <label >Nome:</label>
	      <input type="text" class="form-control" name="nome" placeholder="Nome do produto">
	    </div>
	    <div class="form-group col-md-12">
	      <label >preco:</label>
	      <input type="number"  class="form-control" name="preco"  placeholder="preco">
	    </div>
	   	<div class="form-group  col-md-12"">
			<label for="categoria">categoria </label>
			<select name="categoria" class="form-control form-control-lg">
				<option value="celulares">celulares</option>
				<option value="informatica">informatica</option>
				<option value="eletronicos">eletronicos</option>
				<option value="roupas">roupas</option>
				<option value="livros">livros</option>
				<option value="games">games</option>
			</select>
		</div>
	    <div class="form-group col-md-12">
	      <label >foto:</label>
	      <input type="text" class="form-control" name="foto"  placeholder="nome do arquivo da foto">
	    </div>
	    
	 <button type="submit" class="btn btn-primary">Cadastrar</button>
	</form>
	<p>&nbsp;</p>

</div>

</body>
</html>

<?php

	include 'footer.php';

?>