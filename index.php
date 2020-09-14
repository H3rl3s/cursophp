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
<form action="_inserir_produto.php" method="post" style="margin-top: 25px">
  <div class="form-group">
	    <label> Nro Produto </label>
	    <input type="number" name="nroproduto" class="form-control" placeholder="Insira o numero do produto" required autocomplete="off">
  </div>

  <div class="form-group">
	    <label> Nome do Produto </label>
	    <input type="text" name="nomeproduto" class="form-control" placeholder="Insira o nome do produto" required autocomplete="off">
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
	    <input type="number" name="quantidade" class="form-control" placeholder="Insira a quantidade do produto" required autocomplete="off">
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
  	<button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
  </div>


</form>

<h3>Atualização</h3>

</body>
</html>  