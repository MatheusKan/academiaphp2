<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="./styles/listarStyles.css">
</head>
<body>
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
    <div class= 'geral'>
        <form method="post" action="valida_listaralunos.php">        
            <div class="form-group">
                <label for="id">Código da Turma:</label>
                <input type="text" id="id" name="id">
            </div>      
            <div class="form-group">
                <input type="submit" value="Enviar">
            </div>
    </form>
    </header>
    </div>
</body>
</html>
</html>