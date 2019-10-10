<?php

	include_once('../Config/conexao.php');
	
	// Recupera os dados dos campos
	$imagem   = $_FILES['imagem'];
	$nome     = $_POST['nome'];
	$email    = $_POST['email'];
	$cep      = $_POST['cep'];
	$rua      = $_POST['rua'];
	$numero   = $_POST['numero'];
	$bairro   = $_POST['bairro'];
	$cidade   = $_POST['cidade'];
	$estado   = $_POST['estado'];
	$cpf      = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$senha    = $_POST['senha'];
	$mysqli = 0;
	
	//valida email
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$msg = false;
		if(isset($_FILES['imagem'])){
			$extensao = strtolower(substr($_FILES['imagem']['name'], -4)); //pega a extensao do arquivo
			$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
			$diretorio = "../Imagens/user/"; //define o diretorio para onde enviaremos o arquivo

			move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
			
			$sql_code = "INSERT INTO usuario (nome, email, rua, bairro, cidade, casa, estado, cpf, cep, telefone, senha, imgPerfil) ";
			$sql_code .= "VALUES('".$nome."', '".$email."', '".$rua."', '".$bairro."', '".$cidade."', '".$numero."', '".$estado."', '".$cpf."', '".$cep."', '".$telefone."', '".$senha."', '".$diretorio.$novo_nome."')";
			
			
			if ($conecta->query($sql_code) === TRUE){
				header('Location: ../login/');
			} else {
				echo "Error: " . $sql_code . "<br />" . $conecta->error;
			}
		}
	} else {
		echo 'Email Inválido!';
	}
?>