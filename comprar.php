<?php

include "conexao.php";

session_start();


$sql=" SELECT * FROM cadastro WHERE cpf = 'cpf'";
$result = $conn->query($sql);
if ($result->num_rows>0){
    while ($row = $result->fetch_assoc())  {
		

	



 $email = $row['email'];
 $celular = $row['celular'];
  $endereco = $row['endereco'];



 


 echo "$email" ;
 echo "$celular" ;
 echo "$endereco";
 

}

} else {
	echo "center> nome de usuario ou senha invalido</center>";
	echo "<>loginerror()</>";
}






?>

