<?php   
 session_start();
include "conexao.php";
?>

<?php
$email = $_POST['email'];
$senha = $_SESSION['senha'];
$sql=" SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha' ";
$result = $conn->query($sql);
if ($result->num_rows>0) {


 $_SESSION['email'] = $_POST['email'];
 $_SESSION['senha'] = $_POST['senha'];

 echo $email;







} 

?>
<html>
<head>
	<title>Painel de informacoes</title>
</head>
<body>

</body>
</html>