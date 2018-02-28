<?php	

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