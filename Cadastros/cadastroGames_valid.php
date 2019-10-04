<?
if ( isset( $_FILES[ 'img_produto' ][ 'name' ] ) && $_FILES[ 'img_produto' ][ 'error' ] == 0 ) {
 
    $arquivo_tmp = $_FILES[ 'img_produto' ][ 'tmp_name' ];
    $nome = $_FILES[ 'img_produto' ][ 'name' ];
 
    // Pega a extensão
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
 
    // Converte a extensão para minúsculo
    $extensao = strtolower ( $extensao );
 
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
        $novoNome = $_SESSION['id'] . "_" . uniqid ( time () ) . '.' . $extensao;
 
        // Concatena a pasta com o nome
        $destino = 'imagens/game/' . $novoNome;
 
        // tenta mover o arquivo para o destino
        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
			
			include('conexao.php');
			$sql = "SELECT * FROM conta WHERE id = {$_SESSION['id']}";
			$resultado = mysqli_query($conect, $sql);
			if(mysqli_num_rows($resultado) == 0){
				header('location: index.php?pagina=cadastrarp&msg=idError');
			}else{
				$sql = "INSERT produto VALUES ('', {$_SESSION['id']}, '{$_POST['nome']}', '{$_POST['descr']}', '{$destino}')";
				$resultado = mysqli_query($conect, $sql);
				if ($resultado)
					header("location: index.php?pagina=cadastrarp&msg=Ok");
				else
					header("location: index.php?pagina=cadastrarp&msg=Error");
					}
        }
        else
            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
    }
    else
        echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
}
else{
	include('conexao.php');
	$destino = 'imagens/game/game1.jpg';
	$sql = "SELECT * FROM conta WHERE id = {$_SESSION['id']}";
	$resultado = mysqli_query($conect, $sql);
	if(mysqli_num_rows($resultado) == 0){
		header('location: index.php?pagina=cadastrarp&msg=idError');
	}else{
		$sql = "INSERT produto VALUES ('', {$_SESSION['id']}, '{$_POST['nome']}', '{$_POST['descr']}', '{$destino}')";
		$resultado = mysqli_query($conect, $sql);
		if ($resultado)
			header("location: index.php?pagina=cadastrarp&msg=Ok");
		else
			header("location: index.php?pagina=cadastrarp&msg=Error2");
	}
}
?>