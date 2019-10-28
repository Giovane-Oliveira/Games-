<?php

if(isset($_POST['pesquisar'])){

$pesquisar = $_POST['pesquisar'];
$consulta_game = "SELECT * FROM game WHERE nomeGame LIKE '%$pesquisar%';";
$resultado_game = mysqli_query($conecta, $consulta_game);

}else if(isset($_GET['idGenero'])){

$id_genero = $_GET['idGenero'];
$consulta_game = "SELECT * FROM game WHERE genero_id = '$id_genero';";
$resultado_game = mysqli_query($conecta, $consulta_game);

}else{

$consulta_game = "SELECT * FROM game;";
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
                <img src="../<?php echo $resultado['imgCapa'] ?>" width="400" height="400">
               
                <br>
                <br>
                
                
				<div class="border-0  card w-50">
					<div >
						<a href="visualizarJogo.php?id=<?php echo $resultado['id'];?>">
							<button type="button" class="btn btn-outline-success float-left">Visualizar</button>
						</a>
					
                        <button type="button" class="btn btn-outline-success float-right">Solicitar Emprestimo</button>
                        <br>
                        <br>
                    </div>
				</div>
                
				<hr>
                <br><br><br>
                <?php } ?>
        	</div>
	</div>

