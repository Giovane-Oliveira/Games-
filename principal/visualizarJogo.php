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
													
				
				<!--- dados jogo -->
					<div class="p-3 mb-2 bg-light text-dark text-center">
						<h1><?php echo $resultado['nomeGame'] ?></h1>
					</div>
					<div class="p-3 mb-2 bg-light text-dark text-center">
						<h4><?php echo $resultado['descricao'] ?></h4>
					</div>
					<div class="p-3 mb-2 bg-light text-dark text-center">
						<img src="../<?php echo $resultado['imgCapa'] ?>" width="400" height="400">
					</div>
				   
					
				<!--- fim dados jogo -->    
				
				
				<br> <br>
				
				
				
				<div >
					<!-- dados usuario -->										
					<div class="p-3 mb-2 bg-light text-dark text-center">
					  							
						<img src="<?php echo $resultadoUsuario['imgPerfil'] ?>" alt="Foto usuario" class="rounded-circle" width="70" height="70">
						<?php echo $resultadoUsuario ['nome'] ?>
						  
					</div>
				
					<!-- fim dados usuario -->
				
					<br> <br>
				
				
					<!--- botões voltar e solicitar -->  
					<div class="col">
						<a href="home.php">
							<button type="button" class="btn btn-outline-success">Voltar</button>
						</a>
						<?php if($resultado['disponivel'] == 0){  ?>
                        <a class="btn btn-outline-success" href="../jogos/emprestimo.php?id=<?php echo $resultado['id'];?>" role="button">Solicitar Emprestimo</a>
                        <?php }else{ ?>
                        <button type="button" disabled class="btn btn-outline-danger">Jogo Ocupado</button>

                        <?php } ?>
						<br>
						<br>
					</div>
				
					<!---  fim botões voltar e solicitar -->
				</div>
				  


				</div>
					
			</div>
	
	
	
	<!--<div class="container px-lg-5">
		<div class="row mx-lg-n5">
			<div class="col py-3 px-lg-5">
				<p>
					<strong>
						<center>Grand Theft Auto IV</center>
					</strong>
				</p>
				<p>
					<strong>
						<center>
							Acompanhe a história de Niko e seu primo no submundo do crime, cheio de capangas, ladrões e sociopatas. GTA IV é o primeiro jogo da série a usar o engine RAGE, que também foi usado no jogo Rockstar Games presents Table Tennis.
						</center>
					</strong>
				</p>
				
				<p>
					<div class="text-center">
						<img src="../Imagens/game/game1.jpg" style="width:300px" ></a>
					</div>
				</p>
				
				
				<div class="row">

					<div class="col">
						<a href="home.php">
							<button type="button" class="btn btn-outline-success float-right">Voltar</button>
						</a>
					</div>

                     <div class="col" >
                        <button type="button" class="btn btn-outline-success float-left">Solicitar Emprestimo</button>
                        <br>
                        <br>
                    </div>

                </div>
				
				
				
			</div>
		</div>
		
		
	</div>

	-->
	
	
	
	<!--
	<!-- Player do Youtube se caso colocassemos video do jogo --
	<object width="425" height="350" data="http://www.youtube.com/v/Ahg6qcgoay4" type="application/x-shockwave-flash"><param name="src" value="http://www.youtube.com/v/Ahg6qcgoay4" /></object>
		-->
