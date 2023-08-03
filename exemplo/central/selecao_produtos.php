<?php
    if(isset($_POST['capinhas'])){
        header("Location: ../selecionado/capinhas.php", true, 303);
    }
    if(isset($_POST['fones'])){
        header("Location: ../selecionado/fones.php", true, 303);
    }
    if(isset($_POST['peliculas'])){
        header("Location: ../selecionado/peliculas.php", true, 303);
    }
    if(isset($_POST['caixa'])){
        header("Location: ../selecionado/caixa_de_som.php", true, 303);
    }
    if(isset($_POST['carregador'])){
        header("Location: ../selecionado/carregadores.php", true, 303);
    }
    
    
    
    
    //botão comprar
    
    if(isset($_POST['compre'])){
        header("Location: ../central/login.php", true, 303);
    }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Carrinho de compras</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="selecao_produtos.php" method="post">
        <table>
            <tr>
                <th>Bem vindo ao carrinho de compras da Inter Cell</th>
            </tr>
            <tr>
                <th>Produtos</th>
            </tr>
            <tr>
                <td><input type="submit" value="Capinhas" name="capinhas"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Películas" name="peliculas"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Fones de ouvido" name="fones"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Carregadores" name="carregador"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Caixa de som" name="caixa"></td>
            </tr>
        </table><br>

        <input type="submit" value="Finalizar" name="compre">
    </form>
</body>
</html>