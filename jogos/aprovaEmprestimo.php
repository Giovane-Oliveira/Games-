<?php include '../config/conexao.php'; 

$idGame = $_GET['id'];
$idSolicitacao =  $_GET['idSolicitacao'];

$sqlAtualizacaoGame = "UPDATE game SET disponivel = 0 WHERE id = $id;";
mysqli_query($conecta, $sqlAtualizacaoGame);

$sqlAtualizacaoSolicitacao = "UPDATE solicitacao SET situacao_id = 2 WHERE id = $idSolicitacao;";
mysqli_query($conecta, $sqlAtualizacaoSolicitacao);


header('Location: emprestimo.php?id='.$idGame);






?>