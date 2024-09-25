<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
</head>
<body>
    <?php
        $comandoSQL = "SELECT `nome` FROM `usuarios`";

        $user = 'root';
        $pass = '';

        include('conexao.php');

        $resultado = $conexao->query($comandoSQL);
    ?>
    <table border='1px'>
    <?php
        foreach($resultado as $linha){
    ?>
    <tr><td>
    <?php
            echo $linha['nome'];
    ?>
    </td></tr>
    <?php
        }
    ?>
</body>
</html>