<?php
$dsn = "mysql:host=localhost;dbname=aula6";
$user = "root";
$password = "";

try {
    $conexao = new PDO($dsn, $user, $password);
} catch (PDOException $excecao) {
    echo "Erro de conexão: " . $excecao->getMessage();
}
?>