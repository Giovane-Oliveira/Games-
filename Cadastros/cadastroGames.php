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
<body class="img-fluid" background="../Imagens/background.png">
		<!-- CORPO PRINCIPAL -->
			
		  <div class="login d-flex align-items-center py-4">
			<div class="container-fluid">					
				<div id="divCadastroUsuario" class="col-md-9 col-lg-8 mx-auto">
					<div class="p-3 mb-2 bg-light text-dark text-center">
						<img src="../Imagens/Logo.png" class="rounded mx-auto d-block" alt="Logo não encontrado" width="140" >
						CADASTRAR JOGO:<br/><br/>
																															
											
						<form enctype="multipart/form-data" name="cadastroUsuario" action="scriptCadastroUsuario.php" method="POST">
																			
							<div class="form-label-group">
								<input type="text" id="inputNomeGame" name="nomeGame" class="form-control" placeholder="Nome do jogo" required /> <br>
							</div>
							<div class="row">
								<div class="form-label-group col">
									<input type="text" id="inputGenero" name="genero" placeholder="Genero do jogo" class="form-control"/> <br>				
								</div>	
							</div>
							<div class= "row">
								<div class="form-group form-label-group col">
									<textarea class="form-control" id="exampleFormControlTextarea1" placeholder=" Descricao do jogo" rows="5"></textarea>
								</div>
							</div>
														
																
							<div class="form-label-group text-center ">
								<input type="file" name="imagem" value="Carregar Imagem" required> <br />
							</div>
																		
							<br>
									
							<button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" value="Cadastrar">
									Cadastrar
							 </button>
						</form>
					</div>	
				</div>
			</div>
		</div>
	</body>
</html>
