<?php
$dbServidor = 'localhost';
$dbUsuario = 'u431374128_root';
$dbSenha = 'ipr@123';
$dbBanco = 'u431374128_ipr';
$connect = mysqli_connect($dbServidor, $dbUsuario, $dbSenha, $dbBanco) or die ("Erro ao se conectar: ".mysqli_error($connect));
?>