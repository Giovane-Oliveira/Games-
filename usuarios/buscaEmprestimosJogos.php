<?php

$consulta_emprestimo = "SELECT * FROM solicitacao WHERE usuario_id = $_SESSION[id];";
$resultado_emprestimo = mysqli_query($conecta, $consulta_emprestimo);


?>

	<?php while($resultado = mysqli_fetch_array($resultado_emprestimo)) {

		$consulta_game = "SELECT * FROM game WHERE id = $resultado[game_id];";
		$resultado_game = mysqli_query($conecta, $consulta_game);
		$resultado2 =  mysqli_fetch_array($resultado_game);

		$consulta_usuario = "SELECT * FROM usuario WHERE id = $resultado[usuario_id];";
		$resultado_usuario = mysqli_query($conecta, $consulta_usuario);
		$resultado3 =  mysqli_fetch_array($resultado_usuario);

	?>
	<tr>
      <td><?php echo $resultado['id']; ?></td>
      <td><img src="../<?php echo $resultado2['imgCapa'] ?>" alt="Foto Game" class="rounded-circle" width="30" height="30"></td>
      <td><img src="<?php echo $resultado3['imgPerfil'] ?>" alt="Foto Game" class="rounded-circle" width="30" height="30"></td>
      <td><?php echo $resultado['situacao_id']; ?></td>
      
	</tr>
  <?php } ?>
      	

