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

	<form method="POST" action="inserir.php">
	  <div class="form-row">

	    <div class="form-group col-md-12">
	      <label for="inputPassword4">Nome:</label>
	      <input type="text" class="form-control" name="nome" id="inputPassword4" placeholder="Digite seu nome">
	    </div>
	    <div class="form-group col-md-6">
	      <label for="inputEmail4">Email:</label>
	      <input type="email"  class="form-control" name="email" id="inputEmail4" placeholder="Email">
	    </div>
	    <div class="form-group col-md-6">
	      <label for="inputPassword4">Senha:</label>
	      <input type="password"  class="form-control" name="senha" id="inputPassword4" placeholder="Senha">
	    </div>
	    <div class="form-group col-md-6">
	      <label for="inputEmail4">Celular:</label>
	      <input type="text" class="form-control" name="celular" id="inputEmail4" placeholder="Digite seu celular">
	    </div>
	    <div class="form-group col-md-6">
	      <label for="inputEmail4">Telefone Fixo:</label>
	      <input type="text" class="form-control" name="telefonefixo" id="inputEmail4" placeholder="Digite seu telefone fixo">
	    </div>
	    <div class="form-group col-md-12">
	      <label for="inputPassword4">CPF:</label>
	      <input type="text" class="form-control" name="cpf" id="inputPassword4" placeholder="Digite seu CPF">
	    </div>
	    <div class="form-group col-md-12">
	      <label for="inputPassword4">Nascimento:</label>
	      <input type="date" class="form-control" name="nascimento" id="inputPassword4">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="inputAddress">Sexo:</label>
      <select id="inputState" class="form-control" name="sexo">
        <option selected>Selecione...</option>
        <option>Masculino</option>
        <option>Feminino</option>
      </select>
	  </div>
	  <div class="form-group">
	    <label for="inputAddress">Endereço:</label>
	    <input type="text" class="form-control" name="endereco" id="inputAddress" placeholder="Digite seu endereço">
	  </div>
	  <a href="inserir.php"><button type="submit" class="btn btn-primary">Cadastrar</button></a>
	</form>
	<p>&nbsp;</p>

</div>

</body>
</html>

<?php

	include 'footer.php';

?>