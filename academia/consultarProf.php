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
        <div class="menu-content">
        <image src='assets/logo.png' class="logo">    
            <nav class="header-menu">
                <ul class="list-itens">
                <li class="topic"><a href="index.php">Index</a></li><hr>
                    <li class="topic"><a href="listarProf.php">Listar Turma</a></li><hr>
                    <li class="topic"><a href="consultarProf.php">Consultar Turma</a></li><hr>
                    <li class="topic"><a href="listaralunos.php">Listar Aluno por Turma</a></li><hr>
                    <li class="topic"><a href="logout.php">Sair</a></li><hr>
                    </ul>
    </div>

    <div id="sidebar-right">
        <form method="post" action="valida_listarprof.php">        
            <div class="form-group">
                <label for="id">Código da Turma:</label><p>
                <input type="text" id="id" name="id" placeholder="Digite o codigo do evento">
            </div>      
            <div class="form-group">
                <input type="submit" value="Buscar" class="button">
            </div>
        </form>
    </div>
</body>
</html>
