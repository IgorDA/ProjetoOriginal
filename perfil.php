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
		
$nome = $row['nome'];

$telefonefixo =$row['telefonefixo'];
$email = $row['email'];
$celular = $row['celular'];
$endereco = $row['endereco'];
$nascimento = $row['nascimento'];
$sexo = $row['sexo'];
$cpf = $row['cpf'];
$senha = $row['senha'];





echo "<div class='container '>



<center><h1> Olá $nome </h1></center>

<h3> Seus Dados </h3>
<h4>Nome completo</h4>";


  echo "<div class='form-group col-md-12'>
			
			<input type='text' name='nome' value=' $nome' class='form-control form-control-md'/>     
		</div>";

echo "<h4>email</h4>";


  echo "<div class='form-group col-md-12'>
			
			<input type='text' name='email' value=' $email' class='form-control form-control-md'/>     
		</div>";


echo "<h4>CPF</h4>";


  echo "<div class=' form-group col-md-12'>
			
			<input type='text' name='cpf' value=' $cpf' class='form-control form-control-md'/>     
		</div>";


echo "<h4>celular</h4>";


  echo "<div class='form-group col-md-12'>
			
			<input type='text' name='celular' value=' $celular' class='form-control form-control-md'/>     
		</div>";


echo "<h4>Endereco</h4>";


  echo "<div class='form-group col-md-12'>
			
			<input type='text' name='endereco' value=' $endereco' class='form-control form-control-md'/>     
		</div>";

echo "<h4>Data de Nascimento</h4>";


  echo "<div class='form-group col-md-12'>
			
			<input type='text' name='nascimento' value=' $nascimento' class='form-control form-control-md'/>     
		</div>";

		echo "<h4>Senha</h4>";


  echo "<div class='form-group col-md-12'>
			
			<input type='text' name='senha' value=' $senha' class='form-control form-control-md'/> 

		 <a href ='senha.php' > Trocar sua senha </a>    
		</div>";





















	}
} 


?>


<?php
include "footer.php";

?>