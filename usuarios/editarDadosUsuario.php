<?php 
	include '../config/conexao.php';
	//session_start();
	$idUsuario = $_SESSION['id'];	
	$consulta = "SELECT * FROM usuario WHERE id = '$idUsuario';";
	$result = mysqli_query($conecta, $consulta);
	$resultado = mysqli_fetch_array($result);

?>

<head>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="../estilos/estilos.css" />
</head>

<?php 
	include '../Principal/barraNavegacao.php';
?>

	<div class="login d-flex align-items-center py-4">
		<div class="container-fluid">					
			<div id="divCadastroUsuario" class="col-md-9 col-lg-8 mx-auto">
				<div class="p-3 mb-2 bg-light text-dark text-center">
					
					<img src="<?php echo $resultado['imgPerfil'] ?>" alt="Foto usuario" class="rounded mx-auto d-block" width="140">
					
					INFORME OS DADOS A SEGUIR:<br/><br/>
					<div class="card">																														
						<form enctype="multipart/form-data" name="cadastroUsuario" action="scriptEditarUsuario.php" method="POST">
										
							<input type="hidden"  name="id" class="form-control" value="<?php echo $resultado['id']?>" required />
							<div class="form-label-group">
								<input type="text" id="inputNome" name="nome" placeholder="Informe seu nome" class="form-control" value="<?php echo $resultado['nome']?>" required /> <br>
							</div>
							<div class="row">
								<div class="form-label-group col">
									<input type="text" id="inputEmail" name="email" placeholder="Informe seu email" value="<?php echo $resultado['email']?>" class="form-control" onblur="validarEmail()" placeholder="Informe seu Email"required /> <br />											
								</div>	
								<div class="form-label-group col">
									<input class="form-control" type="int" name="cep" placeholder="Informe seu cep" value="<?php echo $resultado['cep']?>" id="cep" maxlength="8" required /> 
								</div>
							</div>
							<div class="row">
								<div class="form-label-group col">	
									<input class="form-control" type="text" name="rua" placeholder="Nome da sua rua" value="<?php echo $resultado['rua']?>" id="rua" required /> <br />
								</div>	
								<div class="form-label-group col">	
									<input class="form-control" type="int" name="numero" placeholder="Número da casa" value="<?php echo $resultado['casa']?>"  maxlength="5" required /> <br />
								</div>	
							</div>
							<div class="row">
								<div class="form-label-group col">	<!-- VERIFICAR OQUE É PQ PELO VISTO NÃO ESTA SENDO SALVO NO BD-->
									<input class="form-control" type="text" name="complemento" placeholder="Complemento" value="<?php echo $resultado['complemento']?>" /> <br />
								</div>	
								<div class="form-label-group col">
									<input class="form-control" type="text" name="bairro" placeholder="Bairro" value="<?php echo $resultado['bairro']?>" id="bairro" required /> <br />
								</div>
							</div>
							<div class="row">
								<div class="form-label-group col">
									<input class="form-control" type="text" name="cidade" placeholder="Cidade" value="<?php echo $resultado['cidade']?>" id="cidade" required /> <br />
								</div>
								<div class="form-label-group col">	
									<input class="form-control" type="char(2)" name="estado" placeholder="Estado" value="<?php echo $resultado['estado']?>" id="estado" maxlength="2" required /> <br />
								</div>
							</div>
							<div class="row">
								<div class="form-label-group col">
									<input class="form-control" type="int" name="cpf" placeholder="CPF" value="<?php echo $resultado['cpf']?>" maxlength="11" required /> <br />
								</div>
								<div class="form-label-group col">
									<input class="form-control" type="int" name="telefone" placeholder="Telefone" value="<?php echo $resultado['telefone']?>" required /> <br />
								</div>
							</div>
							<div class="row">
								<div class="form-label-group col">
									<input class="form-control" type="password" id="senha1" placeholder="Informe a Senha" name="senha" value="<?php echo $resultado['senha']?>" onkeyup="validarSenha();" required /> <br />
								</div>
								<div class="form-label-group col">
									<input class="form-control" type="password" placeholder="Repetir Senha" id="senha2" value="<?php echo $resultado['senha']?>" onkeyup="validarSenha();" required />
									<label id="confereSenha"></label><br /><br/>
								</div>
							</div>
																
							<div class="form-label-group text-center ">
								<input type="file" name="imagem" value=""> <br />
							</div>
																		
							<br>
							<hr>
							<div class="text-center">
								<a href="../Principal/perfilUsuario.php">
									<button type="button" class="btn btn-outline-success">Voltar</button>
								</a>		
								&nbsp&nbsp	
								<button class="btn btn-primary" type="submit" value="Salvar">
										Salvar
								</button>
							</div>
						</form>
					</div>
				</div>	
			</div>
		</div>
	</div>
	
<?php
	include '../Principal/rodape.php';
?>
