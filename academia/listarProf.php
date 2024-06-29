<?php
include 'verificar_login.php';
?>
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

<div id="content-2">

<?php
include 'conexao.php';
$id = $_SESSION['id'];
$sql = "SELECT t.idTurma as ID, t.descricao, t.horarioInicio, t.horarioTermino, COALESCE(COUNT(m.idMatricula), 0) as numAlunos
        FROM tbTurma t
        LEFT JOIN tbMatricula m ON m.idTurma = t.idTurma
        INNER JOIN tbProfessor p ON p.idProfessor = t.idProfessor
        WHERE p.idProfessor = '$id'
        GROUP BY t.idTurma, t.descricao, t.horarioInicio, t.horarioTermino
        ORDER BY t.idTurma";
$res = mysqli_query($con, $sql);

if (!$res) {
    die("Erro na consulta: " . mysqli_error($con));
}

echo "<div class= 'geral'>";
echo "<table>";
echo "<tr>
<th class='titleTable'>ID da Turma</th>
<th class='titleTable'>Descrição da Turma</th>
<th class='titleTable'>Hora de Início</th>
<th class='titleTable'>Hora de Término</th>
<th class='titleTable'>Números de Aluno</th>

</tr>";

while ($escrever = mysqli_fetch_array($res)) {

    echo "<tr>
    <td>".$escrever['ID']."</td>
    <td>".$escrever['descricao']."</td>
    <td>".$escrever['horarioInicio']."</td>
    <td>".$escrever['horarioTermino']."</td>
    <td>".$escrever['numAlunos']."</td>


    </tr>";
}

echo "</table>";
echo "</div>";

mysqli_close($con);
?>
</div>

</body>
</html>
