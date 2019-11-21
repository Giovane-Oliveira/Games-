<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
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
      <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#aprovarEmprestimo">Aprovar</button></td>
	  <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#negarEmprestimo">Negar</button></td>
	  <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#disponibilizarJogo">Disponibilizar Jogo</button></td>
	  <td><a class="btn btn-primary" href="../jogos/emprestimo.php?id=<?php echo $resultado['id'];?>" role="button">Chat</a></td>

      
      
      
	</tr>

	<!-- Modal -->
<div class="modal fade" id="aprovarEmprestimo" tabindex="-1" role="dialog" aria-labelledby="aprovarEmprestimo" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="aprovarEmprestimo">Aprovar Emprestimo?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Você realmente deseja aprovar o Emprestimo?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
        <a class="btn btn-primary" href="../principal/home.php" role="button">Aprovar Emprestimo</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="negarEmprestimo" tabindex="-1" role="dialog" aria-labelledby="negarEmprestimo" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="negarEmprestimo">Negar Emprestimo?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Você realmente deseja Negar o Emprestimo?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
        <a class="btn btn-primary" href="../principal/home.php" role="button">Negar Emprestimo</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="disponibilizarJogo" tabindex="-1" role="dialog" aria-labelledby="aprovarEmprestimo" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="aprovarEmprestimo">Jogo Liberado para emprestimo?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        O jogo já está disponivel novamente?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        <a class="btn btn-primary" href="../jogos/emprestimo.php?id=<?php $resultado['id'];?>" role="button">Sim</a>
      </div>
    </div>
  </div>
</div>
  <?php } ?>