<?php

if(isset($_GET['idUsuario'])){

$idUsuario = $_GET['idUsuario'];	

$consulta_emprestimo = "SELECT * FROM solicitacao WHERE usuario_id = $idUsuario;";
$resultado_emprestimo = mysqli_query($conecta, $consulta_emprestimo);

}else{


$consulta_emprestimo = "SELECT * FROM solicitacao WHERE usuario_id = $_SESSION[id];";
$resultado_emprestimo = mysqli_query($conecta, $consulta_emprestimo);

}


 while($resultado = mysqli_fetch_array($resultado_emprestimo)) {

		$consulta_game = "SELECT * FROM game WHERE id = $resultado[game_id];";
		$resultado_game = mysqli_query($conecta, $consulta_game);
		$resultado2 =  mysqli_fetch_array($resultado_game);

		$consulta_usuario = "SELECT * FROM usuario WHERE id = $resultado2[usuario_id];";
		$resultado_usuario = mysqli_query($conecta, $consulta_usuario);
		$resultado3 =  mysqli_fetch_array($resultado_usuario);

		$consulta_genero = "SELECT * FROM genero WHERE id = $resultado2[genero_id];";
		$resultado_genero = mysqli_query($conecta, $consulta_genero);
		$resultado4 =  mysqli_fetch_array($resultado_genero);

?>
	<tr>
      <td><?php echo $resultado['data']; ?></td>
      <td><?php echo $resultado2['nomeGame']; ?></td>
      <td><img src="<?php echo $resultado2['imgCapa'] ?>" alt="Foto Game" class="rounded-circle" width="30" height="30"></td>
      <td><?php echo $resultado4['nomeGenero']; ?></td>
      <td><?php echo $resultado3['nome']; ?></td>
      <td><img src="<?php echo $resultado3['imgPerfil'] ?>" alt="Foto Game" class="rounded-circle" width="30" height="30"></td>

      <td><?php if($resultado['situacao_id'] == 1){echo 'Concluido';}else if ($resultado['situacao_id'] == 2) { echo 'Negado';} else if ($resultado['situacao_id'] == 3) {echo 'Solicitado';} else {echo 'Aprovada';} ?></td>

      <td><a class="btn btn-primary" href="../jogos/emprestimo.php?id=<?php echo $resultado2['id'];?>" role="button">Chat</a></td>
      
      
	</tr>
  <?php } ?>