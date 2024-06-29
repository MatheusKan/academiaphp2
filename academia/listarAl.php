<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="./styles/listarStyles.css">
</head>
<body>
    <div id="sidebar-left">
        <ul>
            <image src='assets/logo.png' class="logo">            
            <li class="topic"><a href="agenda.php">Index</a></li><hr>
            <li class="topic"><a href="consultarAl.php">Buscar Turma</a></li><hr>
            <li class="topic"><a href="listarAl.php">Listar Turmas</a></li><hr>
            <li class="topic"><a href="logout.php">Sair</a></li><hr>
        </ul>
    </div>
    
</body>
</html>

<?php
session_start();
include 'verificar_login.php';
include 'conexao.php';

if ($_SESSION['user_type'] == 'aluno') {
    $email = $_SESSION['email'];
    $res1 = mysqli_query($con, "SELECT * FROM tbAluno WHERE email = '$email'");
    $escrever1 = mysqli_fetch_array($res1);
    $id = $escrever1['idAluno'];

    $sql_c = "SELECT t.idTurma as ID, t.descricao, t.horarioInicio, t.horarioTermino, p.nome AS nomeProfessor, m.dataMatricula
              FROM tbTurma t
              INNER JOIN tbMatricula m ON m.idTurma = t.idTurma
              INNER JOIN tbProfessor p ON p.idProfessor = t.idProfessor
              WHERE m.idAluno = '$id' order by m.dataMatricula";
    
    $res = mysqli_query($con, $sql_c);
    $linha = mysqli_num_rows($res);
    
    if ($linha > 0) {
        echo "<div class= 'geral'>";
        echo "<table>";
        echo "<tr>
                <th class='titleTable'>IdTurma</th>
                <th class='titleTable'>Descrição</th>
                <th class='titleTable'>Horário de Início</th>
                <th class='titleTable'>Horário de Término</th>
                <th class='titleTable'>Nome Professor</th>
                <th class='titleTable'>Data de Matrícula</th>
            </tr>";

        while ($escrever = mysqli_fetch_array($res)) {
            $data = implode("/", array_reverse(explode("-", $escrever['dataMatricula'])));
            echo "<tr>
                    <td>" . $escrever['ID'] . "</td>
                    <td>" . $escrever['descricao'] . "</td>
                    <td>" . $escrever['horarioInicio'] . "</td>
                    <td>" . $escrever['horarioTermino'] . "</td>
                    <td>" . $escrever['nomeProfessor'] . "</td>
                    <td> $data</td>
                </tr>";
            }


        echo "</table>";
        echo "</div>";
    } else {
        echo "Nenhuma turma encontrada.";
    }
}else{
    $email = $_SESSION['email'];
    $res1 = mysqli_query($con, "SELECT * FROM tbProfessor WHERE email = '$email'");
    $escrever1 = mysqli_fetch_array($res1);
    $id3 = $escrever1['idProfessor'];

    $sql_c = "SELECT t.idTurma as ID, t.descricao, t.horarioInicio, t.horarioTermino, p.nome AS nomeProfessor
              FROM tbTurma t
              INNER JOIN tbMatricula m ON m.idTurma = t.idTurma
              INNER JOIN tbProfessor p ON p.idProfessor = t.idProfessor
              WHERE p.idProfessor = '$id3' order by t.idTurma";
    
    $res = mysqli_query($con, $sql_c);
    $linha = mysqli_num_rows($res);
    
    if ($linha > 0) {
        echo "<div class= 'geral'>";
        echo "<table>";
        echo "<tr>
                <th class='titleTable'>IdTurma</th>
                <th class='titleTable'>Descrição</th>
                <th class='titleTable'>Horário de Início</th>
                <th class='titleTable'>Horário de Término</th>
            </tr>";

        while ($escrever = mysqli_fetch_array($res)) {

            echo "<tr>
                    <td>" . $escrever['ID'] . "</td>
                    <td>" . $escrever['descricao'] . "</td>
                    <td>" . $escrever['horarioInicio'] . "</td>
                    <td>" . $escrever['horarioTermino'] . "</td>
                </tr>";
            }


        echo "</table>";
        echo "</div>";
    } else {
        echo "Nenhuma turma encontrada.";
    }
}
?>
