<?php

include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$celular = $_POST['celular'];
$cargo = $_POST['cargo'];
$cpf = $_POST['cpf'];
$nascimento = $_POST['nascimento'];
$sexo = $_POST['sexo'];
$endereco = $_POST['endereco'];

$sql = "INSERT INTO funcionario (nome, email, senha, celular, cargo, cpf, nascimento, sexo, endereco) VALUES ('$nome', '$email', '$senha', '$celular', '$cargo', '$cpf', '$nascimento', '$sexo', '$endereco')";

if($conn->query($sql) === TRUE){

	include 'header.php';
	include 'nav.php';
	echo "<div class='container text-center'></br>
	Conta criada com sucesso, faça o login para entrar.
	
	</div></br>";
	include 'footer.php';
}

else{
	echo "Error: ".$sql."<br>".$conn->error;
}

?>