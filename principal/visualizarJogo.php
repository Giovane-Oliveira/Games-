	<?php
		include '../config/conexao.php';
	
		$id=$_GET['id'];
		
		$sql = "SELECT * FROM game where id='$id'";
		$result = mysqli_query($conecta, $sql);
		$resultado = mysqli_fetch_assoc($result);
		
		$id_usuario = $resultado['usuario_id'];	
		$consultaUsuario = "SELECT nome, imgPerfil FROM usuario WHERE id = $id_usuario;";
		$executaConsultaUsuario = mysqli_query($conecta, $consultaUsuario);
		$resultadoUsuario = mysqli_fetch_array($executaConsultaUsuario);

		include 'barraNavegacao.php';
		?>
		
		
		
			<div class="border-0 bg-transparent card w-50 container mt-5">
				
				<div class="text-center">
													
				<div class="card">
					<!--- dados jogo -->
					<div class="card-header">
						<h1><?php echo $resultado['nomeGame'] ?></h1>
					</div>
					<div class="card-body">
						<div >
							<img src="<?php echo $resultado['imgCapa'] ?>" width="400" height="400">
						</div>
						
						<hr><h5 class="card-title text-left">DESCRIÇÃO:</h5><hr>
							<?php echo $resultado['descricao'] ?>
											
					</div>
					<!--- fim dados jogo -->    
				</div>
				
				<br> <br>
												
				<div >
					<!-- dados usuario -->										
					<div class="p-3 mb-2 text-center">
					  	<hr><h5 class="card-title text-left">PROPRIETÁRIO:</h5><hr>						
						<img src="<?php echo $resultadoUsuario['imgPerfil'] ?>" alt="Foto usuario" class="rounded-circle" width="70" height="70">
						<?php echo $resultadoUsuario ['nome'] ?>
						  
					</div>
				
					<!-- fim dados usuario -->
				
					<br> <br>
				
				
					<!--- botões voltar e solicitar -->  
					<div class="col">
						<form action="../jogos/emprestimo.php?id=<?php echo $resultado['id'];?>" method="POST">
							<input type="hidden" name="id_Conversa" class="id_Conversa" value="<?php if($_SESSION['id'] != $resultado['usuario_id']){echo $_SESSION['id'];}?>" />
							<a href="home.php">
								<button type="button" class="btn btn-outline-success">Voltar</button>
							</a>
						<?php if($resultado['disponivel'] == 0){  ?>
							<a href="../jogos/emprestimo.php?id=<?php echo $resultado['id'];?>">
								<input type="submit" class="btn btn-outline-success" value="Solicitar Emprestimo" />
							</a>
                        <?php }else{ ?>
                        <button type="button" disabled class="btn btn-outline-danger">Jogo Ocupado</button>
                        <?php } ?>
						</form>
						<br>
						<br>
					</div>
				
					<!---  fim botões voltar e solicitar -->
				</div>

				</div>
					
			</div>
			
			<?php
					include 'rodape.php';
?>
