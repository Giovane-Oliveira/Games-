<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"
			integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			crossorigin="anonymous">
		</script>

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
			
			function validarEmail(){
								
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
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
		});
    </script> 
	</head>
	<body>
		<div id="divCadastroUsuario">
			<h1 id="cadastroUsuario">Cadastro</h1>
			<form enctype="multipart/form-data" name="cadastroUsuario" action="scriptCadastroUsuario.php" method="POST">
				<input type="text" name="nome" placeholder="Nome" required /> <br />
				<input type="text" name="email" placeholder="Email" onblur="validarEmail()" required /> <br />
				<input type="int" name="cep" placeholder="CEP" id="cep" maxlength="8" required /> <br />
				<input type="text" name="rua" placeholder="Rua" id="rua" required /> <br />
				<input type="int" name="numero" placeholder="Número"  maxlength="5" required /> <br />
				<input type="text" name="complemento" placeholder="Complemento" /> <br />
				<input type="text" name="bairro" placeholder="Bairro" id="bairro" required /> <br />
				<input type="text" name="cidade" placeholder="Cidade" id="cidade" required /> <br />
				<input type="char(2)" name="estado" placeholder="Estado" id="estado" maxlength="2" required /> <br />
				<input type="int" name="cpf" placeholder="CPF" maxlength="11" required /> <br />
				<input type="int" name="telefone" placeholder="Telefone" required /> <br />
				<input type="password" id="senha1" name="senha" placeholder="Senha" onkeyup="validarSenha();" required /> <br />
				<input type="password" id="senha2" placeholder="Repetir Senha" onkeyup="validarSenha();" required /> <br />
				<label id="confereSenha"></label><br />
				<input type="file" name="imagem" value="Carregar Imagem"> <br />
				<input type="submit" value="Cadastrar"/>
			</form>
		</div>
	</body>
</html>
