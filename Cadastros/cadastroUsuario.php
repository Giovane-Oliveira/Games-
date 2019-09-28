<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="text/javascript">
			function validarSenha(){
				var password = document.getElementById("senha1").value, confirm_password = document.getElementById("senha2").value;
				if(password != confirm_password) {
					document.getElementById('confereSenha').innerHTML = "As senhas são diferentes";
				} else {
					document.getElementById('confereSenha').innerHTML = "";
				}
            }
		</script> 
	</head>
	<body>
		<div id="divCadastroUsuario">
			<h1 id="cadastroUsuario">Cadastro</h1>
			<form enctype="multipart/form-data" name="cadastroUsuario" action="scriptCadastroUsuario.php" method="POST">
				<input type="text" name="nome" placeholder="Nome" required /> <br />
				<input type="text" name="email" placeholder="Email" required /> <br />
				<input type="text" name="cep" placeholder="CEP" required /> <br />
				<input type="text" name="endereco" placeholder="Endereço" required /> <br />
				<input type="text" name="numero" placeholder="Número" required /> <br />
				<input type="text" name="bairro" placeholder="Bairro" required /> <br />
				<input type="text" name="cidade" placeholder="Cidade" required /> <br />
				<input type="text" name="estado" placeholder="Estado" required /> <br />
				<input type="text" name="cpf" placeholder="CPF" required /> <br />
				<input type="text" name="telefone" placeholder="Telefone" required /> <br />
				<input type="password" id="senha1" name="senha" placeholder="Senha" onkeyup="validarSenha();" required /> <br />
				<input type="password" id="senha2" placeholder="Repetir Senha" onkeyup="validarSenha();" required /> <br />
				<label id="confereSenha"></label><br />
				<input type="file" name="imagem" value="Carregar Imagem"> <br />
				<input type="submit" value="Cadastrar"/>
			</form>
		</div>
	</body>
</html>
