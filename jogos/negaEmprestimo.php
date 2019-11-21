<?php include '../config/conexao.php'; 

$id = $_GET['id'];

$sqlAtualizacaoGame = "UPDATE game SET disponivel = 0 WHERE id = $id;";
mysqli_query($conecta, $sqlAtualizacaoGame);


header('Location: emprestimo.php?id='.$id);



?>