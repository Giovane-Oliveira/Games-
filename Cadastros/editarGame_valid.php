<?php

	include_once('../Config/conexao.php');
	session_start();

	$nomeGame = $_POST['nomeGame'];
	$genero   = $_POST['genero'];
	$descricao= $_POST['descricao'];
	$imagem	  =$_FILES['imagem'];	
	
	if(isset($_FILES['imagem'])){
				$extensao = strtolower(substr($_FILES['imagem']['name'], -4)); //pega a extensao do arquivo
				$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
				$diretorio = "../Imagens/game/"; //define o diretorio para onde enviaremos o arquivo
			
				move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome); //efetua o upload				
			}  
			
			$imagem= $diretorio.$novo_nome;
			$userId = $_SESSION['id'];

	$sql_code = "UPDATE game (nomeGame, descricao, imgCapa, usuario_id, genero_id) SET ('$nomeGame','$descricao','$imagem','$userId','$genero')";
				
	if ($conecta->query($sql_code) === TRUE){
				header('Location: ../jogos/jogos.php');
				
			} else {
				echo "Error: " . $sql_code . "<br />" . $conecta->error;
			}
?>