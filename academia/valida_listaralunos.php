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
$id2 = $_POST['id'];
$id = $_SESSION['id'];
$sql = "SELECT a.nome_Aluno, a.obs, a.statusAluno, m.dataMatricula
FROM tbMatricula m
INNER JOIN tbAluno a ON m.idAluno = a.idAluno
INNER JOIN tbTurma t ON m.idTurma = t.idTurma
INNER JOIN tbProfessor p ON t.idProfessor = p.idProfessor
WHERE t.idTurma = $id2
  AND p.idProfessor = $id";
$res = mysqli_query($con, $sql);

if (!$res) {
    die("Erro na consulta: " . mysqli_error($con));
}

echo "<div class= 'geral'>";
echo "<table>";
echo "<tr>
<th class='titleTable'>Nome do Aluno</th>
<th class='titleTable'>Observação</th>
<th class='titleTable'>Status do Aluno</th>
<th class='titleTable'>Data de Matricula do Aluno</th>



</tr>";

while ($escrever = mysqli_fetch_array($res)) {
    $data = implode("/", array_reverse(explode("-", $escrever['dataMatricula'])));
    echo "<tr>
    <td>".$escrever['nome_Aluno']."</td>
    <td>".$escrever['obs']."</td>
    <td>".$escrever['statusAluno']."</td>
    <td> $data          </td>



    </tr>";
}

echo "</table>";
echo "</div>";

mysqli_close($con);
?>
</div>

</body>
</html>