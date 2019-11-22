<?php
	//header("Content-type: text/html; charset=utf-8");
	$servidor="localhost"; $login="root"; $senha=""; $base = "projetogame";
	$conecta = mysqli_connect($servidor, $login, $senha, $base) or die ("Erro: ".mysqli_connect_error() );
	//$conecta->set_charset('utf-8');
	session_start();
?>
