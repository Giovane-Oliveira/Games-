<?php
$consulta = "SELECT * FROM genero ORDER BY nomeGenero ASC;";
$result = mysqli_query($conecta, $consulta);
?>

<?php while($resultado = mysqli_fetch_array($result)) { 
	$genero_id =  $resultado['id']?>
	<tr>
		<th>
			<button type="button" class="btn btn-link ">
				<a style="white-space: nowrap" href="home.php?idGenero=<?php echo($genero_id)?>">	
					<img src="../imagens/icon/iconPesquisa.png" width="15" height="15">
					<text class="text-dark">&nbsp&nbsp<?php echo $resultado['nomeGenero']; ?></text>
				</a>
			</button>
		</th>
    </tr>
<?php } ?>
