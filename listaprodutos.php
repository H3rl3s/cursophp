<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de Produtos</title>
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    

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
        <a class="btn btn-danger btn-sm" style="color:#fff" href="excluir.php?id=<?php echo $id_estoque ?>" role="button"><i class="fas fa-trash-alt"></i></i></i>&nbsp;Excluir</a>
      </td>
    </tr>
      <?php 

        }

      ?>
    </tr>
  </tbody>
</table>


</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

</body>
</html>