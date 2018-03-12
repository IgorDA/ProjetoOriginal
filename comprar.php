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
$telefonefixo = $row['telefonefixo'];
$email = $row['email'];
$celular = $row['celular'];
$endereco = $row['endereco'];
$cpf = $row['cpf'];

echo "<form method='POST' action='insertpedido.php'>";

echo "<div class='container '>

<h1> Confirme seus dados</h1></br>
<h4>Nome:</h4>";


  echo "<div class='form-group col-md-12'>
			
			<input type='text' name='nome' value='$nome' class='form-control form-control-lg'/>     
		</div>";

echo "<h4>Email:</h4>";


  echo "<div class='form-group col-md-12'>
			
			<input type='text' name='email' value='$email' class='form-control form-control-lg'/>     
		</div>";


echo "<h4>CPF:</h4>";


  echo "<div class=' form-group col-md-12'>
			
			<input type='text' name='cpf' value='$cpf' class='form-control form-control-lg'/>     
		</div>";


echo "<h4>Celular:</h4>";


  echo "<div class='form-group col-md-12'>
			
			<input type='text' name='celular' value='$celular' class='form-control form-control-lg'/>     
		</div>";


echo "<h4>Endereco:</h4>";


  echo "<div class='form-group col-md-12'>
			
			<input type='text' name='endereco' value='$endereco' class='form-control form-control-lg'/>     
		</div>";

	}
} 

?>



<?php
      
	require_once "functions/product.php";
	require_once "functions/cart.php";

	$pdoConnection = require_once "connection.php";

	if(isset($_GET['acao']) && in_array($_GET['acao'], array('add', 'del', 'up'))) {
		
		if($_GET['acao'] == 'add' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){ 
			addCart($_GET['id'], 1);			
		}

		if($_GET['acao'] == 'del' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){ 
			deleteCart($_GET['id']);
		}

		if($_GET['acao'] == 'up'){ 
			if(isset($_POST['prod']) && is_array($_POST['prod'])){ 
				foreach($_POST['prod'] as $id => $qtd){
						updateCart($id, $qtd);
				}
			}
		} 
		header('location: carrinho.php');
	}

	$resultsCarts = getContentCart($pdoConnection);
	$totalCarts  = getTotalCart($pdoConnection);

?>


<!DOCTYPE html>

<head>

	<meta charset="UTF-8">
	<title>E-commerce</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
 
</head>
<body>
	<div class="container">
	
		</div>

		<?php if($resultsCarts) : ?>
			<form action="carrinho.php?acao=up" method="POST">
			<table class="table table-strip">
				<thead>
					<tr>
						<th>Produto</th>
						<th>Quantidade</th>
						<th>Preço</th>
						<th>Subtotal</th>
						<th>Ação</th>

					</tr>				
				</thead>
				<tbody>
				  <?php foreach($resultsCarts as $result) : ?>
					<tr>
						
						<td><?php echo $result['name']?></td>
						<td>
							<input type="text" name="prod[<?php echo $result['id']?>]" value="<?php echo $result['quantity']?>" size="1" />
														
							</td>
						<td>R$<?php echo number_format($result['price'], 2, ',', '.')?></td>
						<td>R$<?php echo number_format($result['subtotal'], 2, ',', '.')?></td>
						<td><a href="carrinho.php?acao=del&id=<?php echo $result['id']?>" class="btn btn-danger">Remover</a></td>
						
					</tr>
				<?php endforeach;?>
				 <tr>
				 	<td colspan="3" class="text-right"><b>Total: </b></td>
				 	<td>R$<?php echo number_format($totalCarts, 2, ',', '.')?></td>
				 	<td></td>
				 </tr>
				</tbody>
				
			</table>

			
		<?php	echo 	"<a class='btn btn-info' href='insertpedido.php'>Finalizar Compra</a>
		
			</form>";

			 ?>
	<?php endif?>

	<p> </p>
	<p> </p>
	
	</div>
	
</body>
</html>


<?php 

include "footer.php";

?>
