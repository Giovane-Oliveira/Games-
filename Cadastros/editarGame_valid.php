<?php

	include_once('../Config/conexao.php');
	session_start();

	$nomeGame = $_POST['nomeGame'];
	$genero   = $_POST['genero'];
	$descricao= $_POST['descricao'];
	$id_upd   =$_POST['id_game'];
	$imagem   = $_FILES['imagem']['name'];
	
	
	if(empty($imagem)){
		
		$sql_code = "UPDATE game 
		SET nomeGame= '$nomeGame', descricao= '$descricao',  genero_id= '$genero' WHERE id= '$id_upd'";
		
		
		if ($conecta->query($sql_code) === TRUE){
			header('Location: ../jogos/jogos.php');
		} 
				
		else {
			echo "Error: " . $sql_code . "<br />" . $conecta->error. "VAZIO";
		}
		

	}
	
	else {
		$extensao = strtolower(substr($_FILES['imagem']['name'], -4)); //pega a extensao do arquivo
				$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
				$diretorio = "../Imagens/game/"; //define o diretorio para onde enviaremos o arquivo
			
				move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome); //efetua o upload				
			  
			
			$imagem= $diretorio.$novo_nome;
			

	$sql_code = "UPDATE game 
		SET nomeGame  ='$nomeGame', 
			descricao ='$descricao', 
			imgCapa	  ='$imagem', 
			genero_id ='$genero' WHERE id='$id_upd'";
	
	
				
	if ($conecta->query($sql_code) === TRUE){
				header('Location: ../jogos/jogos.php');
			} else {
				echo "Error: " . $sql_code . "<br />" . $conecta->error;
			}
		
	}
				
?>