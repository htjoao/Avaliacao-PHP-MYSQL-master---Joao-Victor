<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'ttloja_tec';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if ($conexao -> connect_errno) 

    echo "Falha na conexao : (".$conexao -> connect_errno. ") ".$conexao -> connect_errno;


?>