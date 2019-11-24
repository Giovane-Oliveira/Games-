
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

</body>
</html>

<?php }else {

  header('Location: ../login/index.php');
  
} ?>
