
<?php header("Refresh: 3; perfil.php ");





?>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>



<?php
include 'conexao.php';


    $id =$row['id'];
    $nome = $row['nome'];
    $email = $row['email'];
    $senha = $row['senha'];
    $celular = $row['celular'];
    $telefonefixo = $row['telefonefixo'];
    $cpf = $row['cfp'];
    $nascimento = $row['nascimento'];
    $sexo = $row['sexo']



$sql = "UPDATE cadastro SET nome ='$nome', email = '$email',  senha = '$senha', celular = '$celular', teledonefixo = '$teledonefixo', cpf = '$cpf', nascimento = '$nascimento',sexo = '$sexo' WHERE id = '$id'"  ;

if ($conn->query($sql) === TRUE) {                                                            
 
 
  echo "</br><h1 class='display-6 text-center'>Cadastro Atualizado com Sucesso!</h1>";


  
  
}
else{
    echo "Erro:". $conn->error;
}
 $conn->close();
?>