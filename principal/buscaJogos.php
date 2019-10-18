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
                <div class="container" align="center">
                  <div class="row">

                      <div class="col">
                        <img src="<?php echo $resultadoUsuario['imgPerfil'] ?>" alt="Foto usuario" class="rounded-circle" width="70" height="70">
                      </div>

                      <div class="col" >
                        <h5 class="float-left"><?php echo $resultadoUsuario ['nome'] ?></h5>
                      </div>

                  </div>
                </div>

                <h4><?php echo $resultado['nomeGame'] ?></h4>
                <p><?php echo $resultado['descricao'] ?></p>
                <img src="../<?php echo $resultado['imgCapa'] ?>" width="400" height="400">
               
                <br>
                <br>
                
                <div class="row">

                      <div class="col">
                         <button type="button" class="btn btn-outline-success float-right">Visualizar</button>

                      </div>

                      <div class="col" >
                        <button type="button" class="btn btn-outline-success float-left">Solicitar Emprestimo</button>
                        <br>
                        <br>
                      </div>

                </div>

                <br>
                <br>
                <?php } ?>
        	</div>
	</div>

