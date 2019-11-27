<head>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="../estilos/estilos.css" />
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
 
	 <div class="container">
		<a class="navbar-brand" href="../Principal/home.php">
			<img src="../imagens/super_mario.png" alt="Logotipo Game" width="70" >
			<img src="../imagens/banner.png" alt="Banner Game" width="250">
		</a>

		<form class="form-inline my-2 my-lg-0"  method="POST" action="home.php">
			<a class="nav-link">
				<input class="form-control mr-sm-2" type="text" name="pesquisar" placeholder="Nome do game" aria-label="Pesquisar" >
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="ENVIAR">PESQUISAR</button>
			</a>
		</form>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">			
				<li class="nav-item active">
					<a class="nav-link btn btn-secondary" href="../jogos/jogos.php">MEUS JOGOS
						<span class="sr-only">(current)</span>
					</a>
				</li>&nbsp&nbsp
				<li class="nav-item active">
					<a class="nav-link btn btn-secondary" href="../Principal/usuarios.php">USUÁRIOS</a>
				</li>&nbsp&nbsp
				  <li class="nav-item dropdown active">
				    <a class="nav-link dropdown-toggle btn btn-secondary" data-toggle="dropdown" href="../Principal/perfilUsuario.php" role="button" aria-haspopup="true" aria-expanded="false">PERFIL</a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
							<a class="dropdown-item" href="../Principal/perfilUsuario.php">Meu Perfil</a>
							<a class="dropdown-item" href="../jogos/listaSolicitacao.php">Minhas Solicitações</a><a class="dropdown-item" href="../jogos/listaEmprestimos.php">Meus Empréstimos</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="../login/sair.php">Sair</a>
						</div>
				  </li>
			</ul>
		</div>
  </div>
</nav>
