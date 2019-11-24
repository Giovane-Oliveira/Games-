<?php include '../config/conexao.php';?>
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

  include '../principal/barraNavegacao.php';

?> 

<!-- CORPO PRINCIPAL -->

<div class="tableUsuarios">	
	<table class="table">
	    <thead class="thead-dark">
	        <tr>
				<th scope="col">Nome do Jogo</th>
				<th scope="col">Capa</th>
				<th scope="col">Data</th>
				<th scope="col">Solicitante</th>
				<th scope="col">Foto Perfil</th>
				<th scope="col">Aprovar</th>
				<th scope="col">Negar</th>
				<th scope="col">Emrestimo</th>
				<th scope="col">Chat</th>

	        </tr>
	            </thead>
	                <tbody>

	                    <?php

	                      include '../jogos/buscaEmprestimosJogos.php'

	                    ?>

	                 </tbody>
	            </table>
</div>

</body>
</html>
