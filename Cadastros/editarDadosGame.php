<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../estilos/estilos.css" />
</head>

	<?php

		include_once('../Config/conexao.php');
		session_start();
		include '../Principal/barraNavegacao.php';
		
		if(isset($_GET['idUsuario'])){

			$idUsuario = $_GET['idUsuario'];	
			
			$consulta_game = "SELECT * FROM game WHERE usuario_id = $idUsuario;";
			$resultado_game = mysqli_query($conecta, $consulta_game);
			
			
			}else{
			
			$consulta_game = "SELECT * FROM game WHERE usuario_id = $_SESSION[id];";
			$resultado_game = mysqli_query($conecta, $consulta_game);
			
			} 
	?>

		
		  <div class="login d-flex align-items-center py-4">
			<div class="container-fluid">					
				<div id="divCadastroUsuario" class="col-md-9 col-lg-8 mx-auto">
					<div class="p-3 mb-2 bg-light text-dark text-center">
						<div class="card">

						<?php while ($resultado = mysqli_fetch_array($resultado_game)){ ?>
						<img src="../<?php echo $resultado['imgCapa'] ?>" alt="Foto Game" class="rounded mx-auto d-block" width="140" >

						EDITAR JOGO:<br/><br/>	
						<form enctype="multipart/form-data" name="cadastroGames" action="editarGame_valid.php" method="POST">
							
							<div class="form-label-group">
								<input type="text" id="inputNomeGame" name="nomeGame" class="form-control" placeholder="Nome do jogo" value ="<?php echo $resultado['nomeGame']; ?>" required /> <br>
							</div>
							<div class="row">
								<div class="form-label-group col">
									<select name="genero" value="<?php echo $resultado['genero_id']?>" class="form-control" >
										<option value="1" name="genero" selected="selected">Ação</option>
										<option value="2" name="genero" >Aventura</option>
										<option value="3" name="genero" >Luta</option>
										<option value="4" name="genero" >Tiro</option>
										<option value="5" name="genero" >RPG</option>
										<option value="6" name="genero" >Construção</option>
										<option value="7" name="genero" >Vida Virtual</option>
										<option value="8" name="genero" >Música</option>
										<option value="9" name="genero" >Esportes</option>
										<option value="10" name="genero" >Corrida</option>
									</select>
								
									<br>				
								</div>	
							</div>

							<div class= "row">
								<div class="form-group form-label-group col">
									<textarea class="form-control" id="exampleFormControlTextarea1" name="descricao" placeholder="Descricao do jogo"  rows="5"><?php echo $resultado['descricao'];?> </textarea>
								</div>
							</div>
							<?php } ?>
							<div class="form-label-group text-center ">
								<input type="file" name="imagem" value="Carregar Imagem" required> <br />
							</div>
																		
							<br>
									
							<div class="text-center">
								<a href="../Principal/perfilUsuario.php">
									<button type="button" class="btn btn-outline-success">Voltar</button>
								</a>		
								&nbsp&nbsp	
								<button class="btn btn-primary" type="submit" value="Editar">
										Editar
								</button>
							</div>
							<br>
						</form>
					</div>	</div>
				</div>
			
			</div>
		</div>
		<?php
			include '../Principal/rodape.php';
		?>
	
</html>
