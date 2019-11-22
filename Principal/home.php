

Pular para o conteúdo
Como usar o Gmail com leitores de tela

1 de 910
home.php
Caixa de entrada
x

Maurilio Dener <mauriliodener@gmail.com>
Anexos
21:34 (há 1 minuto)
para eu


Área de anexos

<?php include '../config/conexao.php';
if($_SESSION['logado'] == true){

?>

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

  include 'barraNavegacao.php';

?> 

<!-- CORPO PRINCIPAL -->

<div  class="container" align="center">
  
            <div class="row">


                <div class="col-2">
                 <br>
                  <table class="table">
                    <thead class="thead-dark">
					<tr>						
						<th class="text-center">Games</th>
					</tr>
				</thead>
                    <tbody>

                    <?php
                      include 'buscaGenero.php';

                    ?>

                    </tbody>
                  </table>
                  </div>
				<div class="col">
                   <?php                    
                        include 'buscaJogos.php';
                    ?>
				</div>
                <div class="col-2">
                <br>
                 <table class="table">
                    <thead class="thead-dark">
						<tr>
							<th class="text-center">Usuarios</th>
						</tr>
					</thead>
                    <tbody>
						<?php
						  include 'buscaUsuarios.php';
						?>
                    </tbody>
                  </table>
                 </div>
				 <div class="col-1"></div>
                </div>
            </div>

            <?php

                include 'rodape.php';

            ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php }else {

  header('Location: ../login/index.php');
  
} ?>
home.php
Exibindo home.php.