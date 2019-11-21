<?php


$consulta_game = "SELECT * FROM game WHERE usuario_id = $_SESSION[id] and disponivel = '1';";
$resultado_game = mysqli_query($conecta, $consulta_game);




 while($resultado = mysqli_fetch_array($resultado_game)) {

		$consulta_solicitacao = "SELECT * FROM solicitacao WHERE game_id = $resultado[id];";
		$resultado_solicitacao = mysqli_query($conecta, $consulta_solicitacao);
		$resultado2 =  mysqli_fetch_array($resultado_solicitacao);

		$consulta_usuario = "SELECT * FROM usuario WHERE id = $resultado2[usuario_id];";
		$resultado_usuario = mysqli_query($conecta, $consulta_usuario);
		$resultado3 =  mysqli_fetch_array($resultado_usuario);

		

?>
	<tr>
      
      <td><?php echo $resultado['nomeGame']; ?></td>

      <td><img src="<?php echo $resultado['imgCapa'] ?>" alt="Foto Game" class="rounded-circle" width="30" height="30"></td>
      <td><?php echo $resultado2['data']; ?></td>
      <td><?php echo $resultado3['nome']; ?></td>
      <td><img src="<?php echo $resultado3['imgPerfil'] ?>" alt="Foto Perfil" class="rounded-circle" width="30" height="30"></td>

      
      
      
	</tr>
  <?php } ?>