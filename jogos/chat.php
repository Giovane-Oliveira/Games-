<html>
<head>
	<!-- estilo css do chat -->
	<link rel="stylesheet" type="text/css" href="css/estilos.css" />
</head>
<body>
	 <!-- CHAT -->
<?php
	$sqlConversa = "SELECT * FROM chat WHERE (((id_de = $_SESSION[id] OR id_para = $_SESSION[id]) AND (id_conversa = id_de OR id_conversa = id_para)) AND id_game = $id) ORDER BY id asc;";
	$resultConversa = mysqli_query($conecta, $sqlConversa);
	$resultadoConversa = mysqli_fetch_assoc($resultConversa);

	if($_SESSION['id'] != $resultado['usuario_id']){
		$sql1 = "SELECT * FROM chat WHERE id_de = $_SESSION[id] AND id_para = $resultado[usuario_id] and id_game = $id and id_conversa = $_SESSION[id] or id_de = $resultado[usuario_id] AND id_para = $_SESSION[id] and id_game = $id and id_conversa = $_SESSION[id] ORDER BY id asc "; 
		$resultChat = mysqli_query($conecta, $sql1);;
?>
	<div class="window" id="janela_x">
		<div class="body">
			<div class="card-header bg-dark text-white">
				<h2>CHAT</h2>
			</div>
			<div class="mensagens" id="mensagens">
				<ul>
<?php		
		while($row = mysqli_fetch_assoc($resultChat)){
			if($row['id_de'] == $_SESSION['id']){
?>	
				<li class="eu">
					<p>
						<?php 
								echo $row['mensagem'];
						?>
					</p>
				</li>
		<?php 
			} else if($row['id_de'] != $_SESSION['id']){
		?>
				<li class="">
					<p>
						<?php
							echo $row['mensagem'];
						?>
					</p>
				</li>
<?php
			}
		}
?>
		</ul>
<?php
	
	} elseif($_SESSION['id'] == $resultado['usuario_id']){
		
		$sql1 = "SELECT * FROM chat WHERE ((id_de = $resultadoConversa[id_conversa] AND id_para = $_SESSION[id]) and (id_game = $id and id_conversa = $resultadoConversa[id_conversa])) or ((id_de = $_SESSION[id] AND id_para = $resultadoConversa[id_conversa]) and (id_game = $id and id_conversa = $resultadoConversa[id_conversa])) ORDER BY id asc;";
		$resultChat1 = mysqli_query($conecta, $sql1);

		if($resultChat1 = mysqli_query($conecta, $sql1)){
?>
	
	<div class="window" id="janela_x">
		<div class="body">
			<div class="card-header bg-dark text-white">
				<h2>CHAT</h2>
			</div>
			<div class="mensagens" id="mensagens">
				<ul>
<?php
			while($row1 = mysqli_fetch_assoc($resultChat1)){
				if($row1['id_de'] == $_SESSION['id']){
?>	
					<li class="eu">
						<p>
							<?php 
									echo $row1['mensagem'];
							?>
						</p>
					</li>
		<?php 
				} else if($row1['id_de'] != $_SESSION['id']){
		?>
					<li class="">
						<p>
							<?php
								echo $row1['mensagem'];
							?>
						</p>
					</li>
<?php
				}
			}
		}
?>
		</ul>
<?php
	}
?>
      </div>
<?php
	
	if($resultChat1 = mysqli_query($conecta, $sql1)){
		
?>
      <div class="send_message">
        <form enctype="multipart/form-data" name="chat" action="#" method="POST">
				<input type="hidden" name="id_de" class="id_de" value="<?php echo $_SESSION['id'];?>" />
				<input type="hidden" name="id_para" class="id_para" value="<?php 
																				if($_SESSION['id'] != $resultado['usuario_id']){ 
																					echo $resultado['usuario_id'] ;
																				} elseif($_SESSION['id'] == $resultado['usuario_id']){
																					echo $resultadoConversa['id_conversa'];
																				} 
																			?>"/>
				<input type="hidden" name="id_game" class="id_game" value="<?php echo $resultado['id'];?>"/>
				<input type="hidden" name="id_Conversa" class="id_Conversa" value="<?php 
																						if($_SESSION['id'] != $resultado['usuario_id']){
																							echo $_SESSION['id']; 
																						} else{
																							echo $resultadoConversa['id_conversa'];
																						}
																					?>"/>
				<input type="text" name="mensagem" class="enviaMsg" />
				<button class="bg-dark text-white" type="submit" value="Enviar">Enviar</button>
        </form>
      </div>
<?php
	}
?>
    </div>
  </div>
</body>
</html>
