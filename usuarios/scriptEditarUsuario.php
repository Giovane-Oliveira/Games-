<?php
	include_once('../Config/conexao.php');
	
	$imagem   = $_FILES['imagem']['name'];
	$nome     = $_POST['nome'];
	$id       = $_POST['id'];
	$email    = $_POST['email'];
	$cep      = $_POST['cep'];
	$rua      = $_POST['rua'];
	$numero   = $_POST['numero'];
	$bairro   = $_POST['bairro'];
	$casa     = $_POST['numero'];
	$cidade   = $_POST['cidade'];
	$estado   = $_POST['estado'];
	$cpf      = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$senha    = $_POST['senha'];
	$mysqli = 0;

	if(empty($imagem)){
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$msg = false;
			
			$sql_code = "UPDATE usuario SET
			nome= '$nome',
			rua= '$rua',
			bairro='$bairro',
			cidade='$cidade',
			casa='$casa',
			estado='$estado',
			cpf='$cpf',
			cep='$cep',
			telefone='$telefone',
			senha='$senha' WHERE id='$id'";
				
				if ($conecta->query($sql_code) === TRUE){
					header('Location: ../Principal/perfilUsuario.php');
					
				} else {
					echo "Error: " . $sql_code . "<br />" . $conecta->error. "VAZIO";
				}
		}
		
		else {
			echo 'Email Inválido!';
		}
		
	}
	else {
		
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$msg = false;
			if(isset($_FILES['imagem'])){
				$extensao = strtolower(substr($_FILES['imagem']['name'], -4)); //pega a extensao do arquivo
				$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
				$diretorio = "../Imagens/user/"; //define o diretorio para onde enviaremos o arquivo
			
				move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
				
			}  
				
			$imagemTeste = $diretorio.$novo_nome;
				
				$sql_code = "UPDATE usuario SET
				nome= '$nome',
				rua= '$rua',
				bairro='$bairro',
				cidade='$cidade',
				casa='$casa',
				estado='$estado',
				cpf='$cpf',
				cep='$cep',
				telefone='$telefone',
				senha='$senha',
				imgPerfil='$imagemTeste' WHERE id='$id'";
				
				if ($conecta->query($sql_code) === TRUE){
					header('Location: ../Principal/perfilUsuario.php');
					
				} else {
					echo "Error: " . $sql_code . "<br />" . $conecta->error ."CHEIO"; 
				}
		} 
		
		
		else {
			echo 'Email Inválido!';
		}
	}	
	
?>