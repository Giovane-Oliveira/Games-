<?php
    include '../config/conexao.php';
    //var_dump($_POST);
    $pesquisar = $_POST['pesquisar'];
    //echo $pesquisar;

    $consulta_game = "SELECT * FROM game WHERE nomeGame LIKE '%$pesquisar%';";
    $resultado_game = mysqli_query($conecta, $consulta_game);
    
   $resultado = mysqli_fetch_array($resultado_game);

   var_dump($resultado);
?>