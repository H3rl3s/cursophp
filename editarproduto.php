<?php

include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário</title>
	<link rel="stylesheet" href="css/bootstrap.css">

	<style type="text/css">
		
		#tamanhoContainer {
			width: 500px;
		}
		#botao {
			background-color: #FF1168;
			color: #ffffff;
			font-weight: bold;
		}
	</style>
	
</head>
<body>
<script type="text/javascript" src="js/bootstrap.js"></script>

<div class="container" id="tamanhoContainer" style="margin-top: 40px">
	<h4 >Formulário de Cadastro</h4>
<form action="atualizar_produto.php" method="post" style="margin-top: 25px">
	<?php

	$sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
	$buscar = mysqli_query($conn, $sql);

	while ($array = mysqli_fetch_array($buscar)) {
		  $id_estoque = $array['id_estoque'];
          $nroproduto = $array['nroproduto'];
          $nomeproduto = $array['nomeproduto'];
          $categoria = $array['categoria'];
          $quantidade = $array['quantidade'];
          $fornecedor = $array['fornecedor'];

	?>
  <div class="form-group">
	    <label> Nro Produto </label>
	    <input type="number" name="nroproduto" class="form-control" value="<?php echo $nroproduto ?>" disabled>
	    <input type="number" name="id" class="form-control" value="<?php echo $id ?>" style="display: none">
  </div>

  <div class="form-group">
	    <label> Nome do Produto </label>
	    <input type="text" name="nomeproduto" class="form-control" value="<?php echo $nomeproduto ?>">
  </div>

  <div class="form-group">
    <label> Categoria </label>
    <select name="categoria" class="form-control">
      <option>Periférico</option>
      <option>Hardware</option>
      <option>Software</option>
      <option>Celulares</option>
    </select>
  </div>

  <div class="form-group">
	    <label> Quantidade </label>
	    <input type="number" name="quantidade" class="form-control" value="<?php echo $quantidade ?>" >
  </div>

  <div class="form-group">
    <label> Fornecedor </label>
    <select name="fornecedor" class="form-control">
      <option>Fornecedor A</option>
      <option>Fornecedor B</option>
      <option>Fornecedor C</option>
    </select>
  </div>

  <div style="text-align: right;">
  	<button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
  </div>
 <?php 

	}

 ?>

</form>



</body>
</html>  