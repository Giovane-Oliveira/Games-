<?php

if(isset($_GET['idUsuario'])){

$idUsuario = $_GET['idUsuario'];	

$consulta_game = "SELECT * FROM game WHERE usuario_id = $idUsuario;";
$resultado_game = mysqli_query($conecta, $consulta_game);


}else{

$consulta_game = "SELECT * FROM game WHERE usuario_id = $_SESSION[id];";
$resultado_game = mysqli_query($conecta, $consulta_game);

}

?>

	<?php while($resultado = mysqli_fetch_array($resultado_game)) { ?>
	<tr>
      <td><img src="../<?php echo $resultado['imgCapa'] ?>" alt="Foto Game" class="rounded-circle" width="30" height="30"></td>
      <td><?php echo $resultado['nomeGame']; ?></td>
      <td><?php echo $resultado['descricao']; ?></td>
      <td><?php echo $resultado['disponivel']; ?></td>
      <td><a href="home.php?idJogo=<?php echo($jogo_id)?>"><img src="../imagens/icon/iconEditar.png" width="15" height="15"></a></td>
	</tr>
  <?php } ?>
      	

