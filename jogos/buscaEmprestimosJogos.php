
<?php

$usuario = $_SESSION['id'];

$consulta_solicitacao = "SELECT * FROM solicitacao WHERE dono_id = $usuario;";
$resultado_solicitacao = mysqli_query($conecta, $consulta_solicitacao);



 while($resultado =  mysqli_fetch_array($resultado_solicitacao)) {

    $gameSolicitado = $resultado['game_id'];

 		$consulta_game = "SELECT * FROM game WHERE id = $gameSolicitado;";
    $resultado_game = mysqli_query($conecta, $consulta_game);
    $resultado2 =  mysqli_fetch_array($resultado_game);

		
    $usuarioSolicitante = $resultado['usuario_id'];

		$consulta_usuario = "SELECT * FROM usuario WHERE id = $usuarioSolicitante;";
		$resultado_usuario = mysqli_query($conecta, $consulta_usuario);
		$resultado3 =  mysqli_fetch_array($resultado_usuario);

		

?>
	<tr>
      
      <td><?php echo $resultado2['nomeGame']; ?></td>

      <td><img src="<?php echo $resultado2['imgCapa'];?>" alt="Foto Game" class="rounded-circle" width="30" height="30"></td>
      <td><?php echo $resultado['data']; ?></td>
      <td><?php echo $resultado3['nome']; ?></td>
      <td><img src="<?php echo $resultado3['imgPerfil'];?>" alt="Foto Perfil" class="rounded-circle" width="30" height="30"></td>

      <td><a class="btn btn-success" href="../jogos/aprovaEmprestimo.php?idGame=<?php echo($resultado2['id']);?>&idSolicitacao=<?php echo($resultado['id']);?>" role="button" >Aprovar</a></td>
      <td><a class="btn btn-danger" href="../jogos/negaEmprestimo.php?idGame=<?php echo($resultado2['id']);?>&idSolicitacao=<?php echo($resultado['id']);?>" role="button" >Negar</a></td>
      <td><a class="btn btn-primary" href="../jogos/liberaEmprestimo.php?idGame=<?php echo($resultado2['id']);?>&idSolicitacao=<?php echo($resultado['id']);?>" role="button" >Disponibilizar Jogo</a></td>
      
	    
      <td><?php if($resultado['situacao_id'] == 1){echo 'Concluido';}else if ($resultado['situacao_id'] == 2) { echo 'Negado';} else if ($resultado['situacao_id'] == 3) {echo 'Solicitado';} else {echo 'Aprovada';} ?></td>
	    <td><a class="btn btn-primary" href="../jogos/emprestimo.php?id=<?php echo $resultado2['id'];?>" role="button">Chat</a></td>

      
      
      
	</tr>

  <?php }?>


