<?php

	include 'header.php';
	include 'nav.php';

?>

<p>&nbsp;</p>
<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
</head>
<body>

	<div class="container">
		<h3 class="text-center">Ola, vendedor, faça seu login logo abaixo</h3>
		<hr />
		<p>&nbsp;</p>
	</div>

	<div class="container">

		<form method="POST" action="verificarfunc.php">
		  <div class="form-group">
		    <label for="email">Email:</label>
		    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu email">
		  </div>
		  <div class="form-group">
		    <label for="senha">Senha:</label>
		    <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua senha">
		    <small id="emailHelp" class="form-text text-muted">Nunca fale sua senha para ninguém.</small>
		  </div>
			<button type="submit" class="btn btn-primary">Logar</button>
		</form>

	</div>

</body>
</html>
<p>&nbsp;</p>

<?php

	include 'footer.php';
	
?>

