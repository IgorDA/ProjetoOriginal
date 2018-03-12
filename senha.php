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
$senha = $row['senha'];


echo "<div class='container>"

		echo "<h4>Digite sua Senha antiga</h4>";


  echo "<div class='form-group col-md-12'>
			
			<input type='text' name='senha' value=' $senha' class='form-control form-control-md'/> 

		 <a href ='trocarsenha.php' > Trocar sua senha </a>    
		</div>";


echo "<form method='POST' action='updatedados.php'>";
echo "<h4>Digite Sua Nova Senha</h4>";

 echo "<div class='form-group col-md-12'>
			
			<input type='text' name='senhanova'  class='form-control form-control-md'/> ";

 echo "<button type='submit' class='btn btn-primary'>trocar Senha</button></a>
	</form>
	</div>";

	}
} 

?>


<?php

include "footer.php";

?>