<?php
session_start();

include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT nome FROM usuarios WHERE email='$email' and senha='$senha'";
$result = $conn->query($sql);

if($result->num_rows>0){
	$_SESSION['logado'] == 1;

	while($row = $result->fetch_assoc()){
		
		echo $row['nome'];
		
	}
}

else{
	echo "Você não está logado, Faça o login para continuar";
}

$conn->close();
?>