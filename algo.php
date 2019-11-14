<?php
	if($_SESSION['id' != $resultado['usuario_id'){
		$sql = "SELECT * FROM chat WHERE id_de = '$_SESSION['id']' AND id_para = '$resultado['usuario_id']' ORDER BY id asc";
		$resultChat = mysqli_query($conecta, $sql);
		$resultadoChat = mysqli_fetch_assoc($result);
		$resultado_idChat = $resultadoChat['id'];
		
		while(){
?>	
			<ul>
				<li class="eu">
					<p>
						Este e um exemplo de msg que aparecera na pagina!!!
					</p>
				</li>
				<li class="">
					<p>
						Este e um exemplo de msg que aparecera na pagina!!!!
					</p>
				</li>
			</ul>
<?php
		}
	} else {
		$sql = "SELECT * FROM chat WHERE id_de = '$resultado['usuario_id']' AND id_para = '$_SESSION['id']' ORDER BY id asc";
		$resultChat = mysqli_query($conecta, $sql);
		$resultadoChat = mysqli_fetch_assoc($result);
		$resultado_idChat = $resultadoChat['id'];
		
		while(){
?>	
			<ul>
				<li class="eu">
					<p>
						Este e um exemplo de msg que aparecera na pagina!!!
					</p>
				</li>
				<li class="">
					<p>
						Este e um exemplo de msg que aparecera na pagina!!!!
					</p>
				</li>
			</ul>
<?php
		}
	}
?>