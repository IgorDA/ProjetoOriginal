




<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css" />

<?php
include "conexao.php";


$sql= "SELECT * FROM paginainicial";
$result = $conn->query($sql);

if($result->num_rows>0){
  echo "<div class = 'container form-control form-control-lg ' > <form method='POST' action='editarproduto.php'>";
  echo "<div class ='text-center'><select  name='id'>";

  while($row = $result->fetch_assoc()){
        $id = $row['id'];
        $nome = $row['nome'];
    echo "<option value = '$id'> $nome </option>";
        
  }
  echo "</select>";
  echo "</br><button type = 'submit' class='btn btn-dark btn-sm' > EDITAR </button> </div> " ;
  echo "</form> </div>";

}
else {
  echo "0 resultados";
}
$conn ->close();
?>


