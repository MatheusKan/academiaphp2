<?php
session_start();
include 'conexao.php';


// Obtém os dados do formulário
$email = $_POST['email'];
$password = $_POST['senha'];
$user_type = $_POST['tipo'];

if ($user_type == 'aluno') {
    $sql = "SELECT * FROM tbAluno WHERE email = '$email' AND senha = '$password'";
} else if ($user_type == 'professor') {
    $sql = "SELECT * FROM tbProfessor WHERE email = '$email' AND senha = '$password'";
}

$result = mysqli_query($con, $sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    // Armazena informações do usuário na sessão
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_type'] = $user_type;
    $_SESSION['email'] = $user['email'];
    $_SESSION["usuario_logado"] = true;

    // Redireciona para a página apropriada com base no tipo de usuário
    if ($user_type == 'aluno') {
        $_SESSION['nome'] = $user['nome_aluno'];
        $_SESSION['id'] = $user['idAluno'];
        header("Location: aluno.php");

    } else if($user_type == 'professor') {
        $_SESSION['nome'] = $user['nome'];
        $_SESSION['id'] = $user['idProfessor'];

        header("Location: professor.php");
    }
    exit();
} else {
    header("Location: login2.php?erro=credenciais_incorretas");
    exit();
}

mysqli_close($con);
?>