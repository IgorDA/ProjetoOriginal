<!DOCTYPE html>
<html>
<head>
		<title></title>

<?php
 echo " <center ><div class='alert alert-success' role='alert'>
 voce foi conectado com sucesso , espere alguns segundos até ser redirecionado </div></center>" ;

 echo "<script>loginsucesso()</script>" ;


} 

else {
	echo "center> nome de usuario ou senha invalido</center>";
	echo "<script>loginerror()</script>";
}

?>
</head>
<body>

</body>
</html>