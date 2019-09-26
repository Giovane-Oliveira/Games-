<?php
include '../config/conexao.php';
$consulta = "SELECT * FROM genero;";
$result = mysqli_query($conecta, $consulta);

?>

<?php while($resultado = mysqli_fetch_array($result)) { ?>
	<tr>
      <th scope="row"><?php echo $resultado['id']; ?></th>
      <td><?php echo $resultado['nomeGenero']; ?></td>
    </tr>
<?php } ?>
