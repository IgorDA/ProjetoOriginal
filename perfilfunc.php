<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>

    <title>Gerenciamento</title>
  </head>
  <body>
    <header>
      <p> </p>
  
  <div class = "container">
    <center><h1 class="display-4">O que deseja fazer?</h1></center>  
      <hr/>
  </div>

  
  

    </header>
<section>

<?php

  session_start();
  
  $cargo = $_SESSION['cargo'];
  $nome = $_SESSION['nome'];
  
  echo "<div class='container text-center'>
  <h4>$nome</h4>
  </div>";

  echo "<div class='container text-center'>
  <h4>Cargo: $cargo</h4>
  </div>";

  if($_SESSION['cargo'] == 'rh'){
    
    echo '<ul class="nav justify-content-center">
  
      <li class="nav-item">
        <a class="nav-link active" name= "cadastroproduto" href="cadastroproduto.php" style="color: #000;">Cadastrar Produtos</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link active" name= "alterarproduto" href="alterarproduto.php" style="color: #000;">Alterar produto</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link active" name="excluirproduto" href="excluirproduto.php" style="color: #000;">Excluir produto</a>
      </li>

          </ul>';

  }

else {

  echo '<ul class="nav justify-content-center">

    <li class="nav-item">
    <a class="nav-link active" name="sair" href="sair.php" style="color: #000;">Desconectar</a>
    </li>

    <li class="nav-item">
    <a class="nav-link active" name="contra" href="contracheque.php" style="color: #000;">Contracheque</a>
    </li>

    </ul>';

  }


  ?>

</section>

<footer>
</footer>



  
  </body>
</html>