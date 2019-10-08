<?php
$consulta = "SELECT * FROM usuario;";
$result = mysqli_query($conecta, $consulta);

?>

<?php while($resultado = mysqli_fetch_array($result)) { ?>
	<tr>
		
      	<td scope="row"><img src="<?php echo $resultado['imgPerfil'] ?>" alt="Foto Usuario" class="rounded-circle" width="15" height="15"></td>
      	<td><?php echo $resultado['nome']; ?></td>
      	
    </tr>
<?php } ?>
