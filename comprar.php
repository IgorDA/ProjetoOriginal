
<?php

include "header.php";
include "nav.php";

?>


<?php

include "conexao.php";

$nome = $_SESSION['nome'];

$sql=" SELECT * FROM cadastro WHERE nome= '$nome'";
$result = $conn->query($sql);
if ($result->num_rows>0){
    while ($row = $result->fetch_assoc())  {
		
$telefonefixo =$row['telefonefixo'];
$email = $row['email'];
$celular = $row['celular'];
$endereco = $row['endereco'];
$cpf = $row['cpf'];

echo "<div class='container text-center'>
<h4>Email:</h4>
<h3> $email </h3>","</br>";

echo '<h4>Celular:</h4>',
"<h3> $celular </h3>","</br>";

echo '<h4>Telefone Fixo:</h4>',
"<h3> $telefonefixo </h3>","</br>";

echo '<h4>Endereço:</h4>',
"<h3> $endereco </h3>","</br>";

echo '<h4>CPF:</h4>',
"<h3> $cpf </h3>","</br>";

	}
} 

else {
	echo "center> nome de usuario ou senha invalido</center>";
	echo "<>loginerror()</>";
}

?>

<?php 

include "footer.php";


?>