<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de Produtos</title>
	  <link rel="stylesheet" href="css/bootstrap.css">
	</head>


<body>


<div class="container" style="margin-top: 40px">

  <div style="text-align: right;">
    <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
  </div>

  <h3>Lista de Produtos</h3>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">NroProduto</th>
      <th scope="col">Nome Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
          include 'conexao.php';
          $sql = "SELECT * FROM `estoque`";
          $busca = mysqli_query($conn, $sql);

          while ($array = mysqli_fetch_array($busca)) {
            
            $id_estoque = $array['id_estoque'];
            $nroproduto = $array['nroproduto'];
            $nomeproduto = $array['nomeproduto'];
            $categoria = $array['categoria'];
            $quantidade = $array['quantidade'];
            $fornecedor = $array['fornecedor'];

      ?>
    <tr >

      <td> <?php echo $nroproduto ?></td>
      <td> <?php echo $nomeproduto ?></td>
      <td> <?php echo $categoria ?></td>
      <td> <?php echo $quantidade ?></td>
      <td> <?php echo $fornecedor ?></td>
      <td>
        <a class="btn btn-warning btn-sm" style="color:#fff" href="editarproduto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
        <a class="btn btn-danger btn-sm" style="color:#fff" href="excluir.php?id=<?php echo $id_estoque ?>" role="button"><i class="fas fa-trash-alt"></i>&nbsp;Excluir</a>
      </td>
    </tr>
      <?php 

        }

      ?>
    </tr>
  </tbody>
</table>


</div>
<script src="https://kit.fontawesome.com/ff2489b726.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>