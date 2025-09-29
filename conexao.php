<?php

$servidor = "localhost";
$user = "root";
$senha = "";
$banco = "traquinagens";


$conn = mysqli_connect($servidor, $user, $senha, $banco);

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

?>