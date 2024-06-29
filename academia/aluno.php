<?php
session_start();
include 'verificar_login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="styles/parteStyle.css">
</head>
<body>
    <?php

        echo "<div class='name'>Bem-vindo, aluno " . $_SESSION['nome'] . "</div>";

    ?>
    <div id="sidebar-left">
        <ul>
            <image src='assets/logo.png' class="logo">            
            <li class="topic"><a href="index.php">Index</a></li><hr>
            <li class="topic"><a href="consultarAl.php">Buscar Turma</a></li><hr>
            <li class="topic"><a href="listarAl.php">Listar Turmas</a></li><hr>
            <li class="topic"><a href="logout.php">Sair</a></li><hr>
        </ul>
    </div>
</body>
</html>
