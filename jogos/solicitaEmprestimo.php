<?php include '../config/conexao.php';

$id = $_GET['idJogo'];
$data = date('Y-m-d');
$usuario = $_SESSION['id'];
$_SESSION['solicitado'] = true;

$consulta_game = "SELECT * FROM game WHERE id = $id;";
$resultado_game = mysqli_query($conecta, $consulta_game);
$resultado = mysqli_fetch_array($resultado_game);

$idDono = $resultado['usuario_id'];

$sql = "INSERT INTO solicitacao (data, usuario_id, game_id, situacao_id, dono_id) VALUES ('$data', '$usuario', '$id', '3', '$idDono');";
mysqli_query($conecta, $sql);

$sqlAtualizacaoGame = "UPDATE game SET disponivel = 1 WHERE id = $id;";
mysqli_query($conecta, $sqlAtualizacaoGame);


header('Location: emprestimo.php?id='.$id);


?>