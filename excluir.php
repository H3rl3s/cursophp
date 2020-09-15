<?php

include "conexao.php";

$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";
$excluir = mysqli_query($conn, $sql);

?>

 <link rel="stylesheet" href="css/bootstrap.css">
 <div class="container" style="width: 400px">
 	<center>
 		<h3>Deletado com Sucesso</h3>
 		<div style="margin-top: 10px">
 		<a href="listaprodutos.php" class="btn btn-sm btn-warning">Voltar</a>
 		</div>
 	</center>
 </div>