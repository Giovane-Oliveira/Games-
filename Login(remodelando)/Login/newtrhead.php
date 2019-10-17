<?php
require_once "config.php";

mysql_select_db("reality");
$time = time();
mysql_query("INSERT INTO threads VALUES(NULL,'$_POST[title]','$_POST[message]','$_POST[author]','0','$time')");
echo "Thread Posted.<br><a href='index.php'>Return</a>";
?>