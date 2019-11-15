
<?php include '../config/conexao.php';?>

<!DOCTYPE html>
<html>
<head>
	
</head>

<!-- BARRA DE NAVEGAÇÃO -->
 <?php

  include '../principal/barraNavegacao.php';

?> 
<body>
<!-- CORPO PRINCIPAL -->	
<div class="container text-center">
	<div class="row">
		<div class="col">
			<br>
			<h1>Dados</h1><div class="tableUsuarios">
			<?php  			  
				include '../usuarios/buscaDadosUsuario.php';
			?></div>
		</div>
		<div class="col-6">
			<br>
			<h1>Jogos Cadastrados</h1>
			<div class="tableUsuarios"> 
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col">Img</th>
							<th scope="col">Nome</th>
							<th scope="col">Descrição</th>
							<th scope="col">Status</th>
							<th scope="col">Buscar</th>

						</tr>
					</thead>
					<tbody>
						<?php
							include '../usuarios/buscaJogosUsuario.php'
						?>

					</tbody>
				</table>
			</div>
		</div>
		<div class="col">
			<br>
			<h1>Empréstimos</h1>
			<div class="tableUsuarios"> 
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col">Data</th>
							<th scope="col">Nome do Jogo</th>
							<th scope="col">Jogo</th>
							<th scope="col">Genero</th>
							<th scope="col">Nome do Dono</th>
							<th scope="col">Dono</th>
							<th scope="col">Status</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include '../usuarios/buscaEmprestimosJogos.php'
						?>
					</tbody>
				</table>
			</div>
		</div>

	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity=		"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


<!-- Navigation -->

<!-- /.container -->