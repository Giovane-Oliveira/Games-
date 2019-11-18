<head>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="../estilos/estilos.css" />
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
					<a class="nav-link" href="../jogos/jogos.php"">MEUS JOGOS
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../Principal/usuarios.php">USUÁRIOS</a>
				</li>
				  <li class="nav-item dropdown ">
				    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">PERFIL</a>
				    <div class="dropdown-menu">
				      <a class="dropdown-item" href="../Principal/perfilUsuario.php">MEU PERFIL</a>
				      <div class="dropdown-divider"></div>
				      <a class="dropdown-item" href="../jogos/listaSolicitacao.php">MINHAS SOLICITAÇÕES</a>
				      <div class="dropdown-divider"></div>
				      <a class="dropdown-item" href="../login/sair.php">SAIR</a>
				    </div>
				  </li>
			</ul>
		</div>
  </div>
</nav>