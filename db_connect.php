<?php

$servename = "localhost";
$username = "rodrigo";
$password = "rodrigo1835";
$db_name = "crud";

$connect = mysqli_connect($servename, $username, $password, $db_name);
mysqli_set_charset($connect, "utf-8");

if(mysqli_connect_error()):
    echo "Erro na conexão: ".mysqli_connect_error();
endif;