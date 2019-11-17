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
	<div class="card">
		<p>Email: <?php echo $resultado['email'] ?></p>
		<p>Telefone: <?php echo $resultado['telefone'] ?></p>
		<p>Cidade: <?php echo $resultado['cidade'] ?></p>
		<!---->
		<div id="accordion">
			<div id="headingTwo">
				<h5 class="mb-0">
					<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					  Ver Mais
					</button>
				</h5>
			</div>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
			  <div class="card-body">
				<p>Rua: <?php echo $resultado['rua'] ?></p>
				<p>Bairro: <?php echo $resultado['bairro'] ?></p>
				<p>Nº Casa: <?php echo $resultado['casa'] ?></p>
			  </div>
			</div>
		</div>
		<hr>
		<p>
			<?php
				if($resultado['id'] == $_SESSION['id']){?>			
					<a href="../usuarios/editarDadosUsuario.php" >
						<button type="button" class="btn btn-outline-success">Editar Informações</button>
					</a>
				<?php } ?>
			<a class="dropdown-item" href="../login/sair.php">
				<button type="button" class="btn btn-danger">Sair</button>
			</a>
		</p>
		
		<!---->
	</div>
	
</div>
