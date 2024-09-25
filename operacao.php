<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações básicas</title>
</head>
<body>
<form action="#" method="post">
    <label for="num1">Número 1: </label>
    <input name="num1" id="num1" type="number">

    <label for="age">Número 2: </label>
    <input name="num2" id="num2" type="number">

    <button name="botao" type="submit">Confirmar</button>
</form>
    <?php
        if(isset($_POST['botao'])){
            try {
                $numero1 = $_POST["num1"];
                $numero2 = $_POST["num2"];
                $soma = $numero1 + $numero2;
                $subt = $numero1 - $numero2;
                $mult = $numero1 * $numero2;
                $divi = $numero1 / $numero2;
                echo " Soma: $soma <br> Subtração: $subt <br> Multiplicação: $mult <br> Divisão: $divi <br> ";
                } catch (DivisionByZeroError $zero) {
                    echo "Erro na divisão: " . $zero->getMessage();
                } catch(TypeError $type){
                    echo "Erro de tipo!";
                } catch (ArithmeticError $ari) {
                    echo "Erro aritmético";
                } catch (Exception $excecao) {
                    echo "Erro: " . $excecao->getMessage();
                } 
        }
    ?>
</body>
</html>