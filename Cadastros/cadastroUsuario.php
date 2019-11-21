<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"
			integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			crossorigin="anonymous">
		</script>
		
		<!--adc jquery e bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
		<!--adc jquery e bootstrap -->
		
		<!-- Adicionando Javascript -->
		<script type="text/javascript" >
			function validarSenha(){
				var password = document.getElementById("senha1").value, confirm_password = document.getElementById("senha2").value;
				if(password != confirm_password) {
					document.getElementById('confereSenha').innerHTML = "As senhas são diferentes";
				} else {
					document.getElementById('confereSenha').innerHTML = "";
				}
            }
			
			$(document).ready(function() {
				
				function limpa_formulário_cep() {
					// Limpa valores do formulário de cep.
					$("#rua").val("");
					$("#bairro").val("");
					$("#cidade").val("");
					$("#estado").val("");
				}
            
				//Quando o campo cep perde o foco.
				$("#cep").blur(function() {
					//Nova variável "cep" somente com dígitos.
					var cep = $(this).val().replace(/\D/g, '');
					//Verifica se campo cep possui valor informado.
					if (cep != "") {
						//Expressão regular para validar o CEP.
						var validacep = /^[0-9]{8}$/;
						//Valida o formato do CEP.
						if(validacep.test(cep)) {
							//Preenche os campos com "..." enquanto consulta webservice.
							$("#rua").val("...");
							$("#bairro").val("...");
							$("#cidade").val("...");
							$("#estado").val("...");
							//Consulta o webservice viacep.com.br/
							$.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
								if (!("erro" in dados)) {
									//Atualiza os campos com os valores da consulta.
									$("#rua").val(dados.logradouro);
									$("#bairro").val(dados.bairro);
									$("#cidade").val(dados.localidade);
									$("#estado").val(dados.uf);
								} else {
									//CEP pesquisado não foi encontrado.
									limpa_formulário_cep();
									alert("CEP não encontrado.");
								}
							}
							);
						} else {
							//cep é inválido.
							limpa_formulário_cep();
							alert("Formato de CEP inválido.");
						}
					} else {
						//cep sem valor, limpa formulário.
						limpa_formulário_cep();
					}
				}
				);
			}
			);
		</script> 
	</head>
	<body class="img-fluid" background="../Imagens/background.png">
		<!-- CORPO PRINCIPAL -->
			
		  <div class="login d-flex align-items-center py-4">
			<div class="container-fluid">					
				<div id="divCadastroUsuario" class="col-md-9 col-lg-8 mx-auto">
					<div class="p-3 mb-2 bg-light text-dark text-center">
						<img src="../Imagens/Logo.png" class="rounded mx-auto d-block" alt="Logo não encontrado" width="140" >
						INFORME OS DADOS A SEGUIR:<br/><br/>
																															
											
						<form enctype="multipart/form-data" name="cadastroUsuario" action="scriptCadastroUsuario.php" method="POST">
																			
							<div class="form-label-group">
								<input type="text" id="inputNome" name="nome" class="form-control" placeholder="Nome" required /> <br>
							</div>
							<div class="row">
								<div class="form-label-group col">
									<input type="text" id="inputEmail" name="email" placeholder="Email" class="form-control" placeholder="Informe seu Email"required /> <br />											
								</div>	
								<div class="form-label-group col">
									<input class="form-control" type="int" name="cep" placeholder="CEP" id="cep" maxlength="8" required /> 
								</div>
							</div>
							<div class="row">
								<div class="form-label-group col">	
									<input class="form-control" type="text" name="rua" placeholder="Rua" id="rua" required /> <br />
								</div>	
								<div class="form-label-group col">	
									<input class="form-control" type="int" name="numero" placeholder="Número"  maxlength="5" required /> <br />
								</div>	
							</div>
							<div class="row">
								<div class="form-label-group col">	
									<input class="form-control" type="text" name="complemento" placeholder="Complemento" /> <br />
								</div>	
								<div class="form-label-group col">
									<input class="form-control" type="text" name="bairro" placeholder="Bairro" id="bairro" required /> <br />
								</div>
							</div>
							<div class="row">
								<div class="form-label-group col">
									<input class="form-control" type="text" name="cidade" placeholder="Cidade" id="cidade" required /> <br />
								</div>
								<div class="form-label-group col">	
									<input class="form-control" type="char(2)" name="estado" placeholder="Estado" id="estado" maxlength="2" required /> <br />
								</div>
							</div>
							<div class="row">
								<div class="form-label-group col">
									<input class="form-control" type="int" name="cpf" placeholder="CPF" maxlength="11" required /> <br />
								</div>
								<div class="form-label-group col">
									<input class="form-control" type="int" name="telefone" placeholder="Telefone" required /> <br />
								</div>
							</div>
							<div class="row">
								<div class="form-label-group col">
									<input class="form-control" type="password" id="senha1" name="senha" placeholder="Senha" onkeyup="validarSenha();" required /> <br />
								</div>
								<div class="form-label-group col">
									<input class="form-control" type="password" id="senha2" placeholder="Repetir Senha" onkeyup="validarSenha();" required />
									<label id="confereSenha"></label><br /><br/>
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

