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


echo "</br>","</br>";
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$celular = $_SESSION['celular'];

echo '<div class="container text-center">';
echo "$nome",'</br>';
echo "$email",'</br>';
echo "$celular",'</br>';
echo "Conectado com sucesso";
echo '</div>';
echo "</br>","</br>";

	
	include 'conexao.php';
?>

<?php

include 'footer.php';

?>