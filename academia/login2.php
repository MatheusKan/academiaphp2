
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Se o usuário já está logado, redirecionar para agenda.php
if (isset($_SESSION['usuario_logado']) && $_SESSION['usuario_logado'] === true) {
    if($_SESSION['user_type'] == 'aluno'){
        header("Location: aluno.php");
    }else{
        header("Location: professor.php");
    }
    
    exit();
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="styles/login2Styles.css">
</head>
<body>
    <a href="index.php">Index</a>
<?php
    if (isset($_GET['erro'])) {
        echo "<p style='color:red;'>Erro: " . htmlspecialchars($_GET['erro']) . "</p>";
    }
    if (isset($_GET['mensagem']) && $_GET['mensagem'] == 'logout_sucesso') {
        echo "<p style='color:green;'>Você saiu com sucesso.</p>";
    }
    ?>
    <image src='assets/logo.png' class="logo">
    <form action="login.php" method="post">
        <input type="email" id="email" name="email" placeholder="Digite seu email" required><br><br>

        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required><br><br>

        <label for="tipo" class ="select">Tipo de Usuário:</label><br>
        <input type="radio" id="aluno" name="tipo" value="aluno" required>
        <label for="aluno">Aluno</label><br>
        <input type="radio" id="professor" name="tipo" value="professor" required>
        <label for="professor">Professor</label><br><br>

        <input type="submit" value="Logar"  class="login">
    </form>
</body>
</html>

