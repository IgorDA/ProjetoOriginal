<?php

include 'header.php';
include 'nav.php';

?>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css" />

<?php

session_start();

echo "</br>","</br>";
$nome = $_SESSION['nome'];

echo '<div class="container text-center">';
echo "$nome",'</br>';
echo "Conectado com sucesso";
echo '</div>';
echo "</br>","</br>";

	header('location: ');

	include 'conexao.php';

$cpf = $_POST['cpf'];
$sql = "UPDATE cadastro SET nome='$nome', email='$email', senha='$senha', celular='$celular', telefonefixo='$telefonefixo', cpf='$cpf', nascimento='$nascimento', sexo='$sexo', endereco='$endereco' WHERE cpf='$cpf'";
if($result->num_rows>0){
	while($row = $result->fetch_assoc()){

$nome = $row['nome'];
$email = $row['email'];
$senha = $row['senha'];
$celular = $row['celular'];
$telefonefixo = $row['telefonefixo'];
$nascimento = $row['nascimento'];
$sexo = $row['sexo'];
$endereco = $row['endereco'];

	}
	}

	

?>

<form method="POST" action="perfil.php"></form>
<div class="container">

	  <div class="form-row">

	  <div class="form-group row">
	  	<label for="staticEmail" class="col-sm-2 col-form-label"><h3>Matrícula</h3></label>
	  	<div class="col-sm-10"><h5> <input type="text" name="id" value="<?php echo $id; ?>"></h5></div>
	  </div>

	    <div class="form-group col-md-12">
	      <label for="inputPassword4">Nome:</label>
	      <input type="text" class="form-control" name="nome" value="<?php echo '$nome'; ?>" id="inputPassword4" placeholder="Digite seu nome">
	    </div>
	    <div class="form-group col-md-6">
	      <label for="inputEmail4">Email:</label>
	      <input type="email"  class="form-control" name="email" id="inputEmail4" placeholder="Email">
	    </div>
	    <div class="form-group col-md-6">
	      <label for="inputPassword4">Senha:</label>
	      <input type="password"  class="form-control" name="senha" id="inputPassword4" required="senha" placeholder="Senha">
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
	  <a href="inserir.php"><button type="submit" class="btn btn-primary">Editar</button></a>
	</form>

<?php

include 'footer.php';

?>