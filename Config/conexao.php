<?php
	$servidor="localhost"; $login="root"; $senha=""; $base = "projetogame";
	$conecta = mysqli_connect($servidor, $login, $senha, $base) or die ("Erro: ".mysqli_connect_error() );
	session_start();
?>
