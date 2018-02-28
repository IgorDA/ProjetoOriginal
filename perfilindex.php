<?php

	include 'header.php';

?>

<link rel="stylesheet" type="text/css" href="style.css">

<div class="container">
    <nav>

<p>&nbsp;</p>
    <hr class="hr" />

      <ul class="nav justify-content-center">

        <li class="nav-item">
          <a href="index.php"><button type="submit" class="btn btn-primary">Início</button></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="categoria.php?cat=eletronico">Eletronicos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categoria.php?cat=livros">Livros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categoria.php?cat=informatica">Informatica</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categoria.php?cat=celulares">Celulares</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categoria.php?cat=roupas">Roupas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categoria.php?cat=games">Games</a>
        </li>
        <li>
        <li>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php 
            session_start();
             echo $nome = $_SESSION['nome'];
             ?>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="perfil.php">Perfil</a>
            <a class="dropdown-item" href="carrinho.php">Carrinho</a>
            <a class="dropdown-item" href="sair.php">Desconectar</a>
          </div>
        </div>
        </li>
      </ul>
    <hr class="hr" />
</div>

<?php

include 'carousel.php';
include 'section.php';
include 'footer.php';

?>