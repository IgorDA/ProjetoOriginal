


<?php
include "header.php";
include "nav.php";



?>



<?php include_once("conexao.php");
 
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
if(!isset($_GET['pesquisar'])){
  header("Location: index.php");
}else{
  $valor_pesquisar = $_GET['pesquisar'];
}


//Selecionar todos os cursos da tabela
$result = "SELECT * FROM paginainicial WHERE nome LIKE '%$valor_pesquisar%'";
$resultado = mysqli_query($conn, $result);

//Contar o total de cursos
$total = mysqli_num_rows($resultado);



//Selecionar os cursos a serem apresentado na página
$result_ = "SELECT * FROM pagina inicial WHERE nome LIKE '%$valor_pesquisar%' ";
$resultado = mysqli_query($conn, $result);
$total = mysqli_num_rows($resultado);
?>










<center><h1> Resultados da pesquisa </h1></center>

        <?php while($row = mysqli_fetch_assoc($resultado)){ ?>
        <div class="container">
          <div class="row">

          <p>&nbsp;</p>

            <div class="col-sm-12">

              <div class="card">

                <div class="card-body">
          <center><img class="imgcar text-center" src="<?php echo $row['foto'] ?>" ></center> 
              <div class="caption text-center">
                <a href="detalhes.php?id=<?php echo $row['id']; ?>"><h3><?php echo $row['nome']; ?></h3></a>
                <h2>R$<?php echo number_format($row['preco'], 2, ',', '.')?></h2>
                 <a class="btn btn-primary" href="carrinho.php?acao=add&id=<?php echo $row['id']?>" class="card-link">Adicionar ao carrinho</a>
            </div>
          </div>
          </div>
          </div>
          </div>

          <p>&nbsp;</p>

          <?php

            include 'footer.php';

          ?>

        <?php 
        }
        ?>

      </div>
    