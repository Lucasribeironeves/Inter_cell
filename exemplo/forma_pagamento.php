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
                <td><input type="radio" name="opcoes" id="a_visita" value="avisita"></td>
                <td>Á vista</td>
            </tr>
        </table><br>
        <input type="submit" value="Confirmar">
    </form>
</body>
</html>