<?php

$consulta_game = "SELECT * FROM game WHERE usuario_id = $_SESSION[id];";
$resultado_game = mysqli_query($conecta, $consulta_game);


?>

	<?php while($resultado = mysqli_fetch_array($resultado_game)) { ?>
	<tr>
      <td><img src="../<?php echo $resultado['imgCapa'] ?>" alt="Foto Game" class="rounded-circle" width="30" height="30"></td>
      <td><?php echo $resultado['nomeGame']; ?></td>
      <td><?php echo $resultado['descricao']; ?></td>
      <td><?php echo $resultado['disponivel']; ?></td>
	</tr>
  <?php } ?>
      	


