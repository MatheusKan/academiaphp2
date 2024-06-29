<?php
session_start();
include 'verificar_login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/consultarStyles.css">
    <title>Index</title>
</head>
<body>
    <div id="sidebar-left">
        <ul>
            <image src='assets/logo.png' class="logo">            
            <li class="topic"><a href="index.php">Index</a></li><hr>
            <li class="topic"><a href="consultarAl.php">Buscar Turma</a></li><hr>
            <li class="topic"><a href="listarAl.php">Listar Turmas</a></li><hr>
            <li class="topic"><a href="logout.php">Sair</a></li><hr>
        </ul>
    </div>

    <div id="sidebar-right">
        <form method="post" action="valida_listar.php">        
            <div class="form-group">
                <label for="id">Código do Evento:</label><p>
                <input type="text" id="id" name="id" placeholder="Digite o codigo do evento">
            </div>      
            <div class="form-group">
                <input type="submit" value="Buscar" class="button">
            </div>
        </form>
    </div>
</body>
</html>