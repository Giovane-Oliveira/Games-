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

<div class="text-center">
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col"><?php echo $resultado['nome'] ?></th>			
			</tr>
		</thead>
	</table>
	<img src="<?php echo $resultado['imgPerfil'] ?>" alt="Foto usuario" class="rounded-circle" width="160" height="160">
	<p><?php echo $resultado['email'] ?></p>
	<p><?php echo $resultado['telefone'] ?></p>
	<p><?php echo $resultado['cidade'] ?></p>
</div>