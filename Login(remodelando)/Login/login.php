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
		<meta name="author" content="Maurilio Dener,...">
	</head>
</html>

<?php





$_SESSION['count'] = 1;

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
	

//echo $_SESSION['email'];
header('location:../Principal/home.php');
//echo "deu";

}else{
 unset ($_SESSION['email']);
 unset ($_SESSION['senha']);
 $_SESSION['logado'] = false;


 //$msg = 'login ou usuario incorreto!';
// echo "<script>alert('$msg');window.location.assign('Login.html');</script>";
?>
<script>window.location.assign('index.php');</script>


<?php  } ?>
