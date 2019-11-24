

<!DOCTYPE html>
<html>
<head>
  <title>Alpha Games</title>
  
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
	<br>
	<?php
		include 'rodape.php';
	?>
</div>

</body>
</html>
