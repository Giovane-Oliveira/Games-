<?php
$consulta = "SELECT * FROM usuario;";
$result = mysqli_query($conecta, $consulta);
?>

<?php while($resultado = mysqli_fetch_array($result)) { 
	
	$usuario_id =  $resultado['id']?>
	<tr>
      	<td scope="row"><img src="<?php echo $resultado['imgPerfil'] ?>" alt="Foto Usuario" class="rounded-circle" width="15" height="15"></td>
      	<td><?php echo $resultado['nome']; ?></td>
		<td><a href="perfilUsuario.php?idUsuario=<?php echo($usuario_id)?>"><img src="../imagens/icon/iconPesquisa.png" width="20" height="20"></a></td>
	</tr>
<?php } ?>
