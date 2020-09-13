 <?php

include "conexao.php";

$id = $_POST['id'];
//$nrproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`='$quantidade',`fornecedor`='$fornecedor' WHERE id_estoque = $id ";

$atualizar = mysqli_query($conn,  $sql);

 ?>

 <link rel="stylesheet" href="css/bootstrap.css">
 <div class="container" style="width: 400px">
 	<center>
 		<h3>Atualizado com Sucesso</h3>
 		<div style="margin-top: 10px">
 		<a href="listaprodutos.php" class="btn btn-sm btn-warning">Voltar</a>
 		</div>
 	</center>
 </div>