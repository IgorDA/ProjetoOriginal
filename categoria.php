<link rel="stylesheet" type="text/css" href="style.css">

<?php

  include 'header.php';
  include 'nav.php';

 

?>
<div class ="container">
<section class="row"> 
<?php

 	
	require_once "functions/product.php";
	$pdoConnection = require_once "connection.php";
	$products = getProducts($pdoConnection);


INCLUDE "conexao.php";



$cate = $_GET['cat'];

$sql= "SELECT * FROM paginainicial WHERE categoria = '$cate' ";
$result = $conn->query($sql);
  while($row = $result->fetch_assoc()){


?>

	



   <div class="card col-sm-12 col-md-4 col-lg-4" >
			<div class="text-center">
			  <div class="card-body">
			  	<img class="imgcard" src="<?php echo $row['foto'];?>">
			    <h5 class="card-title"> <?php echo $row['nome'];?>"</h5>
			     R$<?php echo number_format($row['preco'], 2, ',', '.')?>
			    <hr />
			    <a class="btn btn-primary" href="carrinho.php?acao=add&id=<?php echo $row['id']?>" class="card-link">Comprar</a>
			  </div>
			</div>
</div>




<?php 
}
?>


</div></center>

</section>



<br><div class ="container center"></br>
<center>   <footer> @Todos os direitos reservados</footer>  </center>
</div>
</body>
</html>