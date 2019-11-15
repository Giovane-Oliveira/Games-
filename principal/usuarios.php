

<!DOCTYPE html>
<html>
<head>
  <title>Alpha Games</title>
  <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
  <?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
  <meta name="description" content="Curso de Sistemas de Informação">
  <meta name="keywords" content="ULBRA, SI, Cachoeira do Sul">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../estilos/estilos.css" />
</head>
<body>

<!-- BARRA DE NAVEGAÇÃO -->
<?php

  include 'barraNavegacao.php';

?> 

<!-- CORPO PRINCIPAL -->

<div class="tableUsuarios">	
	<table class="table">
	    <thead class="thead-dark">
	        <tr>
	            <th scope="col">Id</th>
	            <th scope="col">Perfil</th>
	            <th scope="col">Nome</th>
	            <th scope="col">E-mail</th>
	            <th scope="col">Cidade</th>
	            <th scope="col">Rua</th>
	            <th scope="col">Nº da casa</th>
	            <th scope="col">Numero do Telefone</th>
	            <th scope="col">Perfil</th>
	        </tr>
	    </thead>
	    <tbody>
		    <?php
		      include 'buscaUsuariosTable.php';
		    ?>
	     </tbody>
	</table>
	<hr>
	<div class="text-center">
		<a href="home.php" >
			<button type="button" class="btn btn-outline-success">Voltar</button>
		</a>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
