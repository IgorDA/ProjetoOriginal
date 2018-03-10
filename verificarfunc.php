<?php 
INCLUDE "conexao.php";
?>

<html>
 <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css" />

<head>
	<title></title>
<script type="text/javascript">
	function loginsucesso() {
		setTimeout("window.location ='perfilfunc.php' ",2000)
	}
	function loginerror(){
		setTimeout("window.location = 'login.php'",2000)
	}
</script>

</head>
<body>





<?php

$email = $_POST['email'];
$senha = $_POST['senha'];
 session_start();
$sql=" SELECT * FROM funcionario WHERE email = '$email' AND senha = '$senha' ";
$result = $conn->query($sql);


if ($result->num_rows>0){
    while ($row = $result->fetch_assoc())  {
		
    $nome =$row['nome'];
    $cargo = $row['cargo'];

    $_SESSION['email'] = $email;
    $_SESSION['cargo'] = $cargo;
    $_SESSION['nome'] = $nome;



 echo " <center ><div class='alert alert-success' role='alert'>
 vendedor conectado com sucesso , espere alguns segundos até ser redirecionado </div></center>" ;

 echo "<script>loginsucesso()</script>" ;

}

} else {
	echo "center> nome de usuario ou senha invalido</center>";
	echo "<script>loginerror()</script>";
}

?>

</body>
</html>