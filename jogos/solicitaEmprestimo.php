<?php include '../config/conexao.php';

$id = $_GET['idJogo'];
$data = date('Y-m-d');
$usuario = $_SESSION['id'];

$consulta_game = "SELECT * FROM game WHERE genero_id = '$id';";
$resultado_game = mysqli_query($conecta, $consulta_game);
$resultado = mysqli_fetch_array($resultado_game);

$sql = "INSERT INTO solicitacao (data, usuario_id, game_id) VALUES ('$data', '$usuario', '$id');";
mysqli_query($conecta, $sql)


?>