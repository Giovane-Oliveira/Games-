<?php
	include('conexao.php');
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Curso de Sistemas de Informação">
		<meta name="keywords" content="ULBRA, SI, Cachoeira do Sul">
	</head>
</html>

<?php




$consulta = "SELECT * FROM usuario WHERE email = '{$_POST['email']}' AND senha = '{$_POST['senha']}';";

$email = $_POST['email'];
$senha = $_POST['senha'];


//echo $email;
//echo $senha;

$result = mysqli_query($conecta, $consulta);

$resultado = mysqli_fetch_array($result);

$id = $resultado['id'];
$email = $resultado['email'];
$senha = $resultado['senha'];


if(mysqli_num_rows ($result) > 0 )
{
	$_SESSION['id'] = $id;
	$_SESSION['email'] = $email;
	$_SESSION['senha'] = $senha;
	$_SESSION['logado'] = true;
	
?> <script>
alert("Seja bem-vindo ao Alpha Games!")
window.location.assign('../Principal/home.php')
</script> <?php


}else{
 unset ($_SESSION['email']);
 unset ($_SESSION['senha']);
 $_SESSION['logado'] = false;


 //$msg = 'login ou usuario incorreto!';
// echo "<script>alert('$msg');window.location.assign('Login.html');</script>";
?>
<script>
alert("Usuário ou senha inválidos")
window.location.assign('index.php');</script>

<?php  } ?>

