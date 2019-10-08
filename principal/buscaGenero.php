<?php

$consulta = "SELECT * FROM genero ORDER BY nomeGenero ASC;";
$result = mysqli_query($conecta, $consulta);

?>

<?php while($resultado = mysqli_fetch_array($result)) { 

	$teste =  $resultado['id']?>
	<tr>
      
      <th><a href="home.php?idGenero=<?php echo($teste)?>"><img src="../imagens/icon/iconPesquisa.png" width="15" height="15"></a></th>
      <td scope="row"><?php echo $resultado['nomeGenero']; ?></td>
      
    </tr>
<?php } ?>
