

<?php

include "header.php";




?>

<?php

  include 'conexao.php';

$id = $_POST['id'];

$sql = "DELETE FROM paginainicial WHERE id=$id";
  if ($conn->query($sql) === TRUE) {   


echo "

<div class='container text-center'></br>
	<h2>Produto Deletado com sucesso!!! </h2>
	
	</div></br>";

header('refresh: 2, excluirproduto.php');
}

else{
  echo "Erro:". $conn->error;
}

 $conn->close();
?>