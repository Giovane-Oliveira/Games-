<?php
	include '../config/conexao.php';
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
  <!-- estilo css do chat -->
  <link rel="stylesheet" type="text/css" href="css/estilos.css" />
  
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript">
		
	</script>
</head>
<body>

<!-- BARRA DE NAVEGAÇÃO -->
<?php

  include '../principal/barraNavegacao.php';
  $id=$_GET['id'];
  
    $sql = "SELECT * FROM game where id='$id'";
    $result = mysqli_query($conecta, $sql);
    $resultado = mysqli_fetch_assoc($result);
    $resultado_id = $resultado['id'];

?> 

<!-- CORPO PRINCIPAL -->

<div  class="container" align="center"> 

  <div class="row">
    <div class="col">
      <div class="p-3 mb-2 bg-light text-dark text-center">
            <h1><?php echo $resultado['nomeGame']; ?></h1>
      </div>
      <div class="p-3 mb-2 bg-light text-dark text-center">
            <img src="<?php echo $resultado['imgCapa']; ?>" width="400" height="400">
      </div>
      <p><?php echo $resultado['descricao']; ?></p>

      <?php
      

       if ($resultado['disponivel'] == 1){
        
        
      ?>

      <a class="btn btn-outline-success" role="button" >Emprestimo solicitado</a>
        

        <?php }else {?>

      <a class="btn btn-dark btn-lg btn-block" href="" role="button" data-toggle="modal" data-target="#exampleModal">Solicitar </a>

      <?php }?>
      <p></p>
      <p></p>
    </div>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Solicitar Emprestimo Jogo</h5>
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





<div class="col">

	 <!-- CHAT -->
<?php
	$sqlConversa = "SELECT * FROM chat WHERE (((id_de = $_SESSION[id] OR id_para = $_SESSION[id]) AND (id_conversa = id_de OR id_conversa = id_para)) AND id_game = $id) ORDER BY id asc;";
	$resultConversa = mysqli_query($conecta, $sqlConversa);
	$resultadoConversa = mysqli_fetch_assoc($resultConversa);

	if($_SESSION['id'] != $resultado['usuario_id']){
		$sql1 = "SELECT * FROM chat WHERE id_de = $_SESSION[id] AND id_para = $resultado[usuario_id] and id_game = $id and id_conversa = $_SESSION[id] or id_de = $resultado[usuario_id] AND id_para = $_SESSION[id] and id_game = $id and id_conversa = $_SESSION[id] ORDER BY id asc "; 
		$resultChat = mysqli_query($conecta, $sql1);;
?>
	<div class="window" id="janela_x">
		<div class="body">
			<div class="mensagens" id="mensagens">
				<ul>
<?php		
		while($row = mysqli_fetch_assoc($resultChat)){
			if($row['id_de'] == $_SESSION['id']){
?>	
				<li class="eu">
					<p>
						<?php 
								echo $row['mensagem'];
						?>
					</p>
				</li>
		<?php 
			} else if($row['id_de'] != $_SESSION['id']){
		?>
				<li class="">
					<p>
						<?php
							echo $row['mensagem'];
						?>
					</p>
				</li>
<?php
			}
		}
?>
		</ul>
<?php
	
	} elseif($_SESSION['id'] == $resultado['usuario_id']){
		
		$sql1 = "SELECT * FROM chat WHERE ((id_de = $resultadoConversa[id_conversa] AND id_para = $_SESSION[id]) and (id_game = $id and id_conversa = $resultadoConversa[id_conversa])) or ((id_de = $_SESSION[id] AND id_para = $resultadoConversa[id_conversa]) and (id_game = $id and id_conversa = $resultadoConversa[id_conversa])) ORDER BY id asc;";
		$resultChat1 = mysqli_query($conecta, $sql1);

		if($resultChat1 = mysqli_query($conecta, $sql1)){
?>
	<div class="p-3 mb-2 bg-light text-dark text-center">
            <h1>CHAT</h1>
      </div>
	<div class="window" id="janela_x">
		<div class="body">
			<div class="mensagens" id="mensagens">
				<ul>
<?php
			while($row1 = mysqli_fetch_assoc($resultChat1)){
				if($row1['id_de'] == $_SESSION['id']){
?>	
					<li class="eu">
						<p>
							<?php 
									echo $row1['mensagem'];
							?>
						</p>
					</li>
		<?php 
				} else if($row1['id_de'] != $_SESSION['id']){
		?>
					<li class="">
						<p>
							<?php
								echo $row1['mensagem'];
							?>
						</p>
					</li>
<?php
				}
			}
		}
?>
		</ul>
<?php
	}
?>
      </div>
<?php
	
	if($resultChat1 = mysqli_query($conecta, $sql1)){
		
?>
      <div class="send_message">
        <form enctype="multipart/form-data" name="chat" action="#" method="POST">
				<input type="hidden" name="id_de" class="id_de" value="<?php echo $_SESSION['id'];?>" />
				<input type="hidden" name="id_para" class="id_para" value="<?php 
																				if($_SESSION['id'] != $resultado['usuario_id']){ 
																					echo $resultado['usuario_id'] ;
																				} elseif($_SESSION['id'] == $resultado['usuario_id']){
																					echo $resultadoConversa['id_conversa'];
																				} 
																			?>"/>
				<input type="hidden" name="id_game" class="id_game" value="<?php echo $resultado['id'];?>"/>
				<input type="hidden" name="id_Conversa" class="id_Conversa" value="<?php 
																						if($_SESSION['id'] != $resultado['usuario_id']){
																							echo $_SESSION['id']; 
																						} else{
																							echo $resultadoConversa['id_conversa'];
																						}
																					?>"/>
				<input type="text" name="mensagem" class="enviaMsg" />
				<button type="submit" value="Enviar">Enviar</button>
        </form>
      </div>
<?php
	}
?>
    </div>
  </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php 
	}else {

		header('Location: ../login/index.php');
  
	}

	if(isset($_POST['mensagem'])){
		$mensagem = utf8_decode( strip_tags(trim(filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING))) );
		$de = (int)$_POST['id_de'];
		$para = (int)$_POST['id_para'];
		$game = (int)$resultado['id'];
		$idConversa = (int)$_POST['id_Conversa'];
		
		if($mensagem != ''){
			$insert = "INSERT INTO chat (id_de, id_para, id_game, id_conversa, mensagem) VALUES ('".$de."', '".$para."','".$game."', '".$idConversa."' , '".$mensagem."')";
			if ($conecta->query($insert) === TRUE){
				echo "<meta http-equiv='refresh' content='1'>";
			}else{
				echo "Error: " . $insert . "<br />" . $conecta->error;
			}
		}
	}

?>
