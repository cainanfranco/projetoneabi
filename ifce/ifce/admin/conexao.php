<?php
define('HOST','localhost');
define('USUARIO','nandevsi_ifce');
define('SENHA','cainan55085');
define('DB','nandevsi_ifce');
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possicel conectar');
?>