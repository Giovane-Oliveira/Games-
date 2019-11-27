<?php
$consulta = "SELECT * FROM usuario;";
$result = mysqli_query($conecta, $consulta);
?>

<?php while($resultado = mysqli_fetch_array($result)) { 
	$usuario_id =  $resultado['id']?>
	<tr>	
		<th>			
				<a style="white-space: nowrap" class="btn" href="perfilUsuario.php?idUsuario=<?php echo($usuario_id)?>">	
					<img src="../imagens/icon/iconPesquisa.png" width="20" height="20">&nbsp&nbsp
					<img src="<?php echo $resultado['imgPerfil'] ?>" alt=" " class="rounded-circle" width="30">
					<text class="text-dark">&nbsp&nbsp<?php echo $resultado['nome']; ?></text>					
				</a>			
		</th>
	</tr>
<?php } ?>
