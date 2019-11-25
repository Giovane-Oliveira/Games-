
<?php include '../config/conexao.php';?>

<!DOCTYPE html>
<html>
<head>
  <title>Alpha Games</title>
  <meta charset="UTF-8">
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



    <div class="col-6">
      <h1>Jogos</h1>
      <div class="tableUsuarios"> 
        <table class="table">
          
          <thead class="thead-dark">
          <tr>
              <th scope="col">Img</th>
              <th scope="col">Nome</th>
              <th scope="col">Descrição</th>
              <th scope="col">Status</th>
              <th scope="col">Editar</th>
          </tr>
          </thead>
          <tbody>

                      <?php

                       include 'buscaJogosUsuarioBarra.php'

                      ?>

            </tbody>
          </table>

          
          <a class="btn btn-dark btn-lg btn-block" href="../Cadastros/cadastroGames.php" role="button">Cadastrar Jogo</a>
      </div>
    </div>

  </body>
</html>
