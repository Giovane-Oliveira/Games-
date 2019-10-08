<?php
include '../config/conexao.php';
$consulta = "SELECT * FROM usuario ORDER BY nome ASC;";
$result = mysqli_query($conecta, $consulta);

?>

<?php while($resultado = mysqli_fetch_array($result)) { 

	$teste =  $resultado['id']?>
	<tr>

      <th><?php echo $resultado['id']; ?></th>
      <td><img src="<?php echo $resultado['imgPerfil'] ?>" alt="Foto usuario" class="rounded-circle" width="20" height="20"></td>
      <td><?php echo $resultado['nome']; ?></td>
      <td><?php echo $resultado['email']; ?></td>
      <td><?php echo $resultado['cidade']; ?></td>
      <td><?php echo $resultado['rua']; ?></td>
      <td><?php echo $resultado['casa']; ?></td>
      <td><?php echo $resultado['telefone']; ?></td>
      <td><a href="home.php?idGenero=<?php echo($teste)?>"><img src="../imagens/icon/iconPesquisa.png" width="20" height="20"></a></td>
      
    </tr>
<?php } ?>
