<?php
include 'funcoes/conexao.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$idcurso = $_POST['idcurso'];
$con = getConexao();
$sql = "insert into alunos (nome, email, fone, idcurso) values ('$nome', '$email', '$fone', $idcurso)";
mysqli_query ($con, $sql);
header ("Location: listaalunos.php");
?>