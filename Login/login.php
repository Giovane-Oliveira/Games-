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

$consulta = "SELECT * FROM usuario WHERE email = '{$_POST['email']}' AND senha = '{$_POST['senha']}';";

$email = $_POST['email'];
$senha = $_POST['senha'];


//echo $email;
//echo $senha;

$result = mysqli_query($conecta, $consulta);

$resultado = mysqli_fetch_array($result);

$id = $resultado['id'];
$email = $resultado['email'];
$nome = $resultado['nome'];
$senha = $resultado['senha'];
$rua = $resultado['rua'];
$casaNumero = $resultado['casaNumero'];
$cidade = $resultado['cidade'];
$bairro = $resultado['bairro'];
$cep = $resultado['cep'];
$telefone = $resultado['telefone'];



if(mysqli_num_rows ($result) > 0 )

{
	$_SESSION['id'] = $id;
	$_SESSION['email'] = $email;
	$_SESSION['nome'] = $nome;
	$_SESSION['senha'] = $senha;
	$_SESSION['rua'] = $rua;
	$_SESSION['casaNumero'] = $casaNumero;
	$_SESSION['cidade'] = $cidade;
	$_SESSION['bairro'] = $bairro;
	$_SESSION['cep'] = $cep;
	$_SESSION['telefone'] = $telefone;
	$_SESSION['logado'] = true;


//echo $_SESSION['email'];
header('location:../index.html');
//echo "deu";

}
else{
 unset ($_SESSION['email']);
 unset ($_SESSION['senha']);
 $msg = 'login ou usuario incorreto!';
 echo "<script>alert('$msg');window.location.assign('login.php');</script>";

  }
?>
