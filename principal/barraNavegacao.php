<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
        <img src="../imagens/super-mario.png" alt="Logotipo Game" width="50" height="50" >
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <h3><a class="nav-link" href="home.php">Alpha Games</a></h3>

        <form class="form-inline my-2 my-lg-0"  method="POST" action="home.php">


        <input class="form-control mr-sm-2" type="text" name="pesquisar" placeholder="Nome Game" aria-label="Pesquisar" >

        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="ENVIAR">Pesquisar</button>


        </form>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Meus jogos
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="usuarios.php">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="perfilUsuario.php">Perfil</a>
        </li>
      </ul>
    </div>
  </div>
</nav>