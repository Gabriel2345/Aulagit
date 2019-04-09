<?php
    include 'funcoes/conexao.php';
    $con = getConexao();
    $sql = "select * from cursos order by descricao";
    $rs = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>novo aluno</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h2>Novo aluno</h2>
    <form action="gravaalunos.php" method="post">
    <table>
        <tr><td>nome</td><td><input name="nome" type="text"></td></tr>
        <tr><td>email</td><td><input name="email" type="text"></td></tr>
        <tr><td>fone</td><td><input name="fone" type="text"></td></tr>
        <tr><td>curso</td><td><select name="idcurso" >
        <?php
            while($row = mysqli_fetch_array($rs)){
                $id = $row['id'];
                $curso = $row['descricao'];
             echo "<option value='$id'>$curso</option>";
            } 
        ?>
            
         
        </select></td></tr>
        <tr><td></td><td><input name="bt" type="submit" value="GRAVAR"></td></tr>

    </table>
    </form>
    
</body>
</html>