<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
    <link rel="stylesheet" href="styles/BuscarStyles.css">
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
</body>
</html>
<?php

session_start();
include 'verificar_login.php';
include 'conexao.php';
if($_SESSION['user_type'] == 'aluno'){
$email = $_SESSION['email'];
$id2 = $_POST['id'];
$pegar = "SELECT * FROM tbAluno WHERE email = '$email'";
$resultado1 = mysqli_query($con, $pegar);
$escrever1=mysqli_fetch_array($resultado1);
$id = $escrever1['idAluno'];


echo "<div class='geral'>";
echo "<div class='espaco'";
echo "<a class='a1'> </a> ";
echo "<a class='a1'>Olá,</a> ";
echo "<a class='a2'>". $_SESSION['nome']. "</a>";
echo "<a class='a1'> aqui estão as suas turmas!</a><p> ";
echo "</div>";



   $sql_c = "SELECT t.idTurma as ID, t.descricao, t.horarioInicio, t.horarioTermino, p.nome AS nomeProfessor, m.dataMatricula
   FROM tbTurma t
   INNER JOIN tbMatricula m ON m.idTurma = t.idTurma
   INNER JOIN tbProfessor p ON p.idProfessor = t.idProfessor
   WHERE m.idAluno = '$id' and t.idTurma = '$id2'";
   $res = mysqli_query($con, $sql_c);
  
   $linha = mysqli_num_rows($res);

   if ($linha>0) {
    echo "<div class='organizar'>";
    while ($write = mysqli_fetch_array($res)) {
       

        $idTurma = $write[0];
        $descricao = $write[1];
        $horarioInicio = $write[2];
        $horarioTermino = $write[3];
        $nomeprofessor = $write[4];
        $data = implode("/", array_reverse(explode("-", $write['5'])));
        
        echo "<div class='resultadoConsulta2'>";
        echo "<p>ID da Turma: $idTurma</p>";
        echo "<p>Descrição: $descricao</p>";
        echo "<p>Horário de Início: $horarioInicio</p>";
        echo "<p>Horário de Término: $horarioTermino</p>";
        echo "<p>Nome Professor $nomeprofessor</p>";
        echo "<p>Data de Matricula $data</p>";
        echo "</div>";
        echo "</div>";
    }
    echo "<div>";
}

if($linha == 0) {
    echo "<div class='organizar'>";
    echo "<div class='resultadoConsulta2'>";
    echo "Nenhuma turma encontrada.";
    echo "</div>";
    echo "<div>";

} 
}else{
    $email = $_SESSION['email'];
$id2 = $_POST['id'];
$pegar = "SELECT * FROM tbAluno WHERE email = '$email'";
$resultado1 = mysqli_query($con, $pegar);
$escrever1=mysqli_fetch_array($resultado1);
$id = $escrever1['idAluno'];


echo "<div class='geral'>";
echo "<div class='espaco'";
echo "<a class='a1'> </a> ";
echo "<a class='a1'>Olá,</a> ";
echo "<a class='a2'>". $_SESSION['nome']. "</a>";
echo "<a class='a1'> aqui estão as suas turmas!</a><p> ";
echo "</div>";



   $sql_c = "SELECT t.idTurma as ID, t.descricao, t.horarioInicio, t.horarioTermino, p.nome AS nomeProfessor, m.dataMatricula
   FROM tbTurma t
   INNER JOIN tbMatricula m ON m.idTurma = t.idTurma
   INNER JOIN tbProfessor p ON p.idProfessor = t.idProfessor
   WHERE t.idProfessor = '$id' and t.idTurma = '$id2'";
   $res = mysqli_query($con, $sql_c);
  
   $linha = mysqli_num_rows($res);

   if ($linha>0) {
    echo "<div class='organizar'>";
    while ($write = mysqli_fetch_array($res)) {
       

        $idTurma = $write[0];
        $descricao = $write[1];
        $horarioInicio = $write[2];
        $horarioTermino = $write[3];
        $nomeprofessor = $write[4];
        $data = implode("/", array_reverse(explode("-", $write['5'])));
        
        echo "<div class='resultadoConsulta2'>";
        echo "<p>ID da Turma: $idTurma</p>";
        echo "<p>Descrição: $descricao</p>";
        echo "<p>Horário de Início: $horarioInicio</p>";
        echo "<p>Horário de Término: $horarioTermino</p>";
        echo "<p>Nome Professor $nomeprofessor</p>";
        echo "<p>Data de Matricula $data</p>";
        echo "</div>";
        echo "</div>";
    }
    echo "<div>";
}

if($linha == 0) {
    echo "<div class='organizar'>";
    echo "<div class='resultadoConsulta2'>";
    echo "Nenhuma turma encontrada.";
    echo "</div>";
    echo "<div>";

} 
}
   
 
 
?> 
