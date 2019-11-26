<?php include '../config/conexao.php'; 

$idGame = $_GET['idGame'];
$idSolicitacao =  $_GET['idSolicitacao'];

echo $idSolicitacao;

$sqlAtualizacaoGame = "UPDATE game SET disponivel = 1 WHERE id = $idGame;";
mysqli_query($conecta, $sqlAtualizacaoGame);

$sqlAtualizacaoSolicitacao = "UPDATE solicitacao SET situacao_id = 4 WHERE id = $idSolicitacao;";
mysqli_query($conecta, $sqlAtualizacaoSolicitacao);


header('Location: emprestimo.php?id='.$idGame);






?>