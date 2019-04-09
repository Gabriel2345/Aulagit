<?php
    include 'funcoes/conexao.php';
    $id = $_GET['id'];
    $con = getConexao();
    $sql = "select * from alunos where id = $id";
    $sql2 = "select * from cursos order by descricao";
    $rs = mysqli_query($con,$sql);
    $rs2 = mysqli_query($con, $sql2);
    while($row = mysqli_fetch_array($rs)){
        $nome = $row['nome'];
        $email = $row['email'];
        $fone = $row['fone'];
        break;
    }
    ?>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar aluno</title>
    </head>
    <body>
        <form action="atualizaaluno.php" method="post">
            <table>
            <tr><td>id</td><td><input type="text" name="id" value = "<?=$id;?>" readonly="readonly"/></td></tr>
            <tr><td>nome</td><td><input type="text" name="nome" value="<?=$nome;?>"/></td></tr>
            <tr><td>email</td><td><input type="text" name="email" value="<?=$email;?>"/></td></tr>
            <tr><td>fone</td><td><input type="text" name="fone" value="<?=$fone?>"/></td></tr>
            <tr><td>curso</td><td><select name="idcurso" >
                <?php
                while ($row = mysqli_fetch_array($rs2)){
                    $id = $row['id'];
                    $curso = $row['descricao'];
                    echo "<option value='$id'>$curso</option>";
                }
                ?>
                
            </select></td></tr>
            <tr><td></td><td><input type="submit" name="bt" value="GRAVAR"/></td></tr>
            </table>
        </form>
    </body>
    </html>