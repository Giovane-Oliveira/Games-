
<?php include '../config/conexao.php';
if($_SESSION['logado'] == true){

?>

<!DOCTYPE html>
<html>
<head>
  <title>Alpha Games</title>
  <meta charset="UTF-8">
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

  $id=$_GET['id'];
    
    $sql = "SELECT * FROM game where id='$id'";
    $result = mysqli_query($conecta, $sql);
    $resultado = mysqli_fetch_assoc($result);
    $resultado_id = $resultado['id']

?> 

<!-- CORPO PRINCIPAL -->

<div  class="container" align="center"> 

  <div class="row">
    <div class="col">
      <div class="p-3 mb-2 bg-light text-dark text-center">
            <h1><?php echo $resultado['nomeGame'] ?></h1>
      </div>
      <div class="p-3 mb-2 bg-light text-dark text-center">
            <img src="../<?php echo $resultado['imgCapa'] ?>" width="400" height="400">
      </div>
      <p><?php echo $resultado['descricao'] ?></p>

      <a class="btn btn-dark btn-lg btn-block" href="solicitaEmprestimo.php?idJogo=<?php echo($resultado_id)?>" role="button" data-toggle="modal" data-target="#exampleModal">Solicitar Emprestimo</a>
      <p></p>
      <p></p>
    </div>
    <div class="col">



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Você realmente quer solicitar o emprestimo do Jogo?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <a href="solicitaEmprestimo.php?idJogo=<?php echo($resultado_id)?>" type="button" class="btn btn-primary">Solicitar emprestimo</a>
      </div>
    </div>
  </div>
</div>

    
   
        <div class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Modal body text goes here.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

   
      


                
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php }else {

  header('Location: ../login/index.php');
  
} ?>