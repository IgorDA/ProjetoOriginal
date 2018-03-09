<?php

include 'conexao.php';

$nome = $_POST['nome'];
$foto = $_POST['foto'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];

$sql = "INSERT INTO paginainicial (nome, foto, preco, categoria) VALUES ('$nome', '$foto', '$preco', '$categoria')";

if($conn->query($sql) === TRUE){

	include 'header.php';
	include 'nav.php';
	echo "<div class='container text-center'></br>
	Produto inserido com sucesso !!!
	
	</div></br>";
	include 'footer.php';

header('refresh: 2, cadastroproduto.php');

}

else{
	echo "Error: ".$sql."<br>".$conn->error;
}



?>