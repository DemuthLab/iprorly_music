<?php
$dbServidor = 'localhost';
$dbUsuario = 'root';
$dbSenha = 'mysql#123';
$dbBanco = 'iprorlymusic';
$connect = mysqli_connect($dbServidor, $dbUsuario, $dbSenha, $dbBanco) or die ("Erro ao se conectar: ".mysqli_error($connect));
?>
