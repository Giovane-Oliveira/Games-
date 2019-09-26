<?php
include '../config/conexao.php';
$consulta = "SELECT * FROM genero;";
$result = mysqli_query($conecta, $consulta);



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php while($resultado = mysqli_fetch_array($result)) { ?>
	<tr>
      <td><?php echo $resultado['id']; ?></td>
      <td><?php echo $resultado['nomeGenero']; ?></td>
    </tr>
<?php } ?>
</body>
</html>
   