<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <?php
       $nome = $_GET['nome'];
        $comandoSQL = "INSERT INTO `usuarios` (`id`,`nome`) VALUES (NULL, '$nome')";

        $user = 'root';
        $pass = '';
        include('conexao.php');

        $resultado = $conexao->exec($comandoSQL);

        var_dump($resultado);

        if($resultado)
            echo "Usuário cadastrado!";
        else
            echo "Erro ao cadastrar usuário";
    ?>
</body>
</html>