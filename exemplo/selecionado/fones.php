<?php 

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Fones de ouvido</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="fones.php" method="post">
        <table>
            <tr>
                <th colspan="5">Selecione seu fone de ouvido ;D</th>
            </tr>
            <tr>
                <th>Indíce</th>
                <th>#</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Valor</th>
            </tr>
            <tr>
                <td>0</td>
                <td><input type="checkbox" name="fone0" id="fone"></td>
                <td>Galaxy Buds 2 - Bluetooth</td>
                <td><input type="number" name="qtd0" id="qtd0" min="0"></td>
                <td>390,00</td>
            </tr>
            <tr>
                <td>1</td>
                <td><input type="checkbox" name="fone1" id="fone"></td>
                <td>Stage Hero 3 - Bluetooth</td>
                <td><input type="number" name="qtd1" id="qtd1" min="0"></td>
                <td>140,00</td>
            </tr>
            <tr>
                <td>2</td>
                <td><input type="checkbox" name="fone2" id="fone"></td>
                <td>Redmi Air Dots - Bluetooth</td>
                <td><input type="number" name="qtd2" id="qtd2" min="0"></td>
                <td>120,00</td>
            </tr>
            <tr>
                <td>3</td>
                <td><input type="checkbox" name="fone3" id="fone"></td>
                <td>QCY T13 - Bluetooth</td>
                <td><input type="number" name="qtd3" id="qtd3" min="0"></td>
                <td>110,00</td>
            </tr>
            <tr>
                <td>4</td>
                <td><input type="checkbox" name="fone4" id="fone"></td>
                <td>Galaxy Buds 2 Pro - Bluetooth</td>
                <td><input type="number" name="qtd4" id="qtd4" min="0"></td>
                <td>900,00</td>
            </tr>
        </table>
    </form>
</body>