
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
							<th scope="col">Chat</th>

						</tr>
					</thead>
					<tbody>
						<?php
							include '../jogos/buscaSolicitacoesJogos.php'
						?>
					</tbody>
				</table>
			</div>
		</div>

	</div>
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
