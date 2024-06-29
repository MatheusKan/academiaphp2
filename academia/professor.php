<?php
session_start();
include 'verificar_login.php';
echo "Bem-vindo, Professor " . $_SESSION['nome'];
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

        echo "<div class='name'>Bem-vindo, " . $_SESSION['nome'] . " Professor</div>";

    ?>
    <div id="sidebar-left">
        <image src='assets/logo.png' class="logo">
        <ul>
            <li class= "topic"><a href="index.php">Index</a></li><hr>
            <li class= "topic"><a href="listarProf.php">Listar Turma</a></li><hr>
            <li class= "topic"><a href="consultarProf.php">Consultar Turma</a></li><hr>
            <li class= "topic"><a href="listaralunos.php">Listar Aluno por Turma</a></li><hr>
            <li class= "topic"><a href="logout.php">Sair</a></li><hr>
        </ul>
    </div>
</body>
</html>
