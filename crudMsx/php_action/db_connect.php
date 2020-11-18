<?php
//Conectando com o Banco de Dados
$servername = "localhost";
$username = "root";
$password = "php07my2020";
$db_name = "crud";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
    echo "Erro na conexão: ".mysqli_connect_error();
endif;