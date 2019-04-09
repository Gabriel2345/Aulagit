<?php
include 'funcoes/conexao.php';
$con = getConexao();
$sql = "select * from alunos order by id";
if(isset($_POST['bt'])){
    $palavra = $_POST['palavra'];
    $sql = "select * from alunos where nome like '%".$palavra."%' or email like '%".$palavra."%'";
}
$rs = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de alunos</title>
</head>
<body>
    <form action="listaalunos.php" method="post">
        <input type="text" name="palavra" size="30"/>
        <input type="submit" name="bt" value="BUSCAR"/>
        <input type="submit" value="VOLTAR"/>
    </form>
    <a href="formalunos.php"><img src="imgs/incluir.png" width="16px" heigth="16px"/>Novo</a>
    <table border="1px">
        <tr><th>id</th><th>nome</th><th>e-mail</th><th>fone</th><th>curso</th><th>excluir</th><th>editar</th></tr>
    <?php
        while ($row = mysqli_fetch_array($rs)){
            $id = $row['id'];
            $nome = $row['nome'];
            $email = $row['email'];
            $fone = $row['fone'];
            
            
    ?>
        <tr>
        <td><?=$id;?></td>
        <td><?=$nome;?></td>
        <td><?=$email;?></td>
        <td><?=$fone;?></td>
        <td></td>
        <td align="center"><a href="excluiraluno.php?id=<?=$id;?>"><img src="imgs/excluir.jpg" width="16px" heigth="16px"/></a></td>
        <td align="center"><a href="formedit.php?id=<?=$id;?>"><img src="imgs/editar.jpg" width="16px" heigth="16px"/></a></td>
        </tr>
    <?php
        }
        echo "</table></body></html>";
