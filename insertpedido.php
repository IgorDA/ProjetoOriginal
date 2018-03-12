<?php

	include 'conexao.php';

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$celular = $_POST['celular'];
$cpf = $_POST['cpf'];
$nomeproduto = $_POST['nomeproduto'];
$preco = $_POST['preco'];
$status = $_POST['status'];

$sql = "INSERT INTO pedido (nome, endereco, celular, cpf, nomeproduto, preco, status) VALUES ('$nome', '$endereco', '$celular', '$cpf', '$nomeproduto', '$preco', '$status')";

if($conn->query($sql) === TRUE){

	include 'header.php';
	include 'nav.php';

	echo "<div class='container text-center'></br>
	COMPRA EFETUADA COM SUCESSO !!!
	</div></br>";

	include 'footer.php';

header('refresh: 2, status.php');

}

else{
	echo "Error: ".$sql."<br>".$conn->error;
}


?>