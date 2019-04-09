<?php
    include 'funcoes/conexao.php';
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $con = getConexao();
    $sql = "update alunos set nome = '$nome', email='$email', fone='$fone' where id=$id";
    mysqli_query($con, $sql);
    header("Location: listaalunos.php");
    ?>