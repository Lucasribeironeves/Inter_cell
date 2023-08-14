<?php 

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pagamento</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <!-- Exibição dos dados do usuário -->
    <table>
            <tr>
                <th colspan="2">Dados do usuário ;D</th>
            </tr>
            <tr>
                <th>Tipo</th>
                <th>Informado</th>
            </tr>

            <tr>
                <td>Nome</td>
                <td><?php echo $_SESSION['login']['nome'] ?></td>
            </tr>
            <tr>
                <td>Endereço</td>
                <td><?php echo $_SESSION['login']['endereco'] ?></td>
            </tr>
            <tr>
                <td>Telefone</td>
                <td><?php echo $_SESSION['login']['telefone'] ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $_SESSION['login']['email'] ?></td>
            </tr>
    </table><br>

    <form action="forma_pagamento.php" method="post">
        <table>
            <tr>
                <th colspan="2">Selecione a forma de pagamento!</th>
            </tr>
            <tr>
                <td><input type="radio" name="opcoes" id="cartao_credito" value="cartao_credito"></td>
                <td>Cartão de crédito</td>
            </tr>
            <tr>
                <td><input type="radio" name="opcoes" id="pix" value="pix"></td>
                <td>Pix</td>
            </tr>
            <tr>
                <td><input type="radio" name="opcoes" id="a_vista" value="avista"></td>
                <td>Á vista</td>
            </tr>
        </table><br>
        <input type="submit" value="Confirmar">
    </form>
</body>
</html>