<?php

  include 'conexao.php';

$id = $_POST['id'];

$sql = "DELETE FROM paginainicial WHERE id=$id";
  if ($conn->query($sql) === TRUE) {   

echo "DELETADO COM SUCESSO";
}

else{
  echo "Erro:". $conn->error;
}

 $conn->close();
?>