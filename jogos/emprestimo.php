<?php
	include '../config/conexao.php';
	if($_SESSION['logado'] == true){
?>

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
	<br>
	<div class="row">
		<div class="col"><div class="card">
			<div class="card-header">
				<h1><?php echo $resultado['nomeGame']; ?></h1>
			</div>
			<div class="card-body">
				<img src="<?php echo $resultado['imgCapa']; ?>" width="400" height="400">
			<hr><h5 class="card-title text-left">DESCRIÇÃO:</h5><hr>
			<?php echo $resultado['descricao']; ?>
			</div></div>
			<?php
			  
				if ($resultado['disponivel'] == 1){
					
			?>
			
			<a class="btn btn-outline-success" role="button" >Emprestimo solicitado</a>	
			
			<?php }else {?>
			<hr>
			<a href="../Principal/home.php">
				<button type="button" class="btn btn-danger">Cancelar</button>
			</a>&nbsp&nbsp
			<a class="btn btn-outline-success" href="" role="button" data-toggle="modal" data-target="#exampleModal">Solicitar </a>

			<?php }?>
			<br><br>  
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
		<!-- Modal -->
		<!-- chat -->
		<div class="col">
			<?php 
				include 'chat.php';
			?>
		</div>
		<!-- chat -->
	</diV>
</div>

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
	include '../Principal/rodape.php';
?>
