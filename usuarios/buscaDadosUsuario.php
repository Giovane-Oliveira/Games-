<?php

if(isset($_GET['idUsuario'])){

$idUsuario = $_GET['idUsuario'];	

$consulta = "SELECT * FROM usuario WHERE id = '$idUsuario';";
$result = mysqli_query($conecta, $consulta);
$resultado = mysqli_fetch_array($result);


}else{

$consulta = "SELECT * FROM usuario WHERE id = $_SESSION[id];";
$result = mysqli_query($conecta, $consulta);
$resultado = mysqli_fetch_array($result);

}
?>

<img src="<?php echo $resultado['imgPerfil'] ?>" alt="Foto usuario" class="rounded-circle" width="150" height="300">
<br>
<br>
<h5><?php echo $resultado['nome'] ?></h5>
<p><?php echo $resultado['email'] ?></p>
<p><?php echo $resultado['telefone'] ?></p>
<p><?php echo $resultado['cidade'] ?></p>

