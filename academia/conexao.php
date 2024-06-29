<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "bdAcademia";

$con = mysqli_connect($servername, $username, $password, $dbname);

// Verifica a conexão
if (!$con) {
    die("Falha na Conexao: " . mysqli_connect_error());
}
?>