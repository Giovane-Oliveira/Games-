<?php
$idUsuario = $_SESSION['id'];

if(isset($_POST['pesquisar'])){

$pesquisar = $_POST['pesquisar'];
$consulta_game = "SELECT * FROM game WHERE nomeGame LIKE '%$pesquisar%' AND usuario_id != '$idUsuario' order by id desc;";
$resultado_game = mysqli_query($conecta, $consulta_game);

}else if(isset($_GET['idGenero'])){

$id_genero = $_GET['idGenero'];
$consulta_game = "SELECT * FROM game WHERE genero_id = '$id_genero' AND usuario_id != '$idUsuario' order by id desc;";
$resultado_game = mysqli_query($conecta, $consulta_game);

}else{

$consulta_game = "SELECT * FROM game WHERE usuario_id != '$idUsuario' order by id desc;";
$resultado_game = mysqli_query($conecta, $consulta_game);

}


?>


	<div class="col-7">
        <br>
            <div class="rolagem">

            	<?php while($resultado = mysqli_fetch_array($resultado_game)) {

            	$id_usuario = $resultado['usuario_id'];	

            	$consultaUsuario = "SELECT nome, imgPerfil FROM usuario WHERE id = $id_usuario;";

            	$executaConsultaUsuario = mysqli_query($conecta, $consultaUsuario);

            	$resultadoUsuario = mysqli_fetch_array($executaConsultaUsuario);

            	 ?>
				<hr>
				<!-- usuario-->
                <div class="p-3 mb-2 bg-light text-dark text-center">
					  							
					<img src="<?php echo $resultadoUsuario['imgPerfil'] ?>" alt="Foto usuario" class="rounded-circle" width="70" height="70">
					<?php echo $resultadoUsuario ['nome'] ?>
					  
				</div>
				<!-- usuario-->
				
				
                <h4><?php echo $resultado['nomeGame'] ?></h4>
                <p><?php echo $resultado['descricao'] ?></p>
                <img src="<?php echo $resultado['imgCapa'] ?>" width="400" height="400">
               
                <br>
                <br>
                
				<div class="border-0  card w-50">
					<form action="../jogos/emprestimo.php?id=<?php echo $resultado['id'];?>" method="POST">
						<input type="hidden" name="id_Conversa" class="id_Conversa" value="<?php if($_SESSION['id'] != $resultado['usuario_id']){echo $_SESSION['id'];}?>" />
						<a class="btn btn-outline-success float-left" href="visualizarJogo.php?id=<?php echo $resultado['id'];?>">
							Visualizar
						</a>
					<?php if($resultado['disponivel'] == 0){  ?>
						<a href="../jogos/emprestimo.php?id=<?php echo $resultado['id'];?>">
							<input type="submit" class="btn btn-outline-success" value="Solicitar Emprestimo" />
						</a>
					<?php }else{ ?>
					<button type="button" disabled class="btn btn-outline-danger">Jogo Ocupado</button>
					<?php } ?>
					</form>
					<br>
					<br>
				</div>
                
				<hr>
                <br><br><br>
                <?php } ?>
        	</div>
	</div>

