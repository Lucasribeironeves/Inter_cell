<?php 

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Películas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="peliculas.php" method="post">
        <table>
            <tr>
                <th colspan="5">Selecione sua película ;D</th>
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
                <td><input type="checkbox" name="pelicula0" id="pelicula"></td>
                <td>Samsung A32</td>
                <td><input type="number" name="qtd0" id="qtd0" min="0"></td>
                <td>20,00</td>
            </tr>
            <tr>
                <td>1</td>
                <td><input type="checkbox" name="pelicula1" id="pelicula"></td>
                <td>Samsung A33 5G</td>
                <td><input type="number" name="qtd1" id="qtd1" min="0"></td>
                <td>20,00</td>
            </tr>
            <tr>
                <td>2</td>
                <td><input type="checkbox" name="pelicula2" id="pelicula"></td>
                <td>Redmi Note 11 4G</td>
                <td><input type="number" name="qtd2" id="qtd2" min="0"></td>
                <td>20,00</td>
            </tr>
            <tr>
                <td>3</td>
                <td><input type="checkbox" name="pelicula3" id="pelicula"></td>
                <td>Moto G30</td>
                <td><input type="number" name="qtd3" id="qtd3" min="0"></td>
                <td>20,00</td>
            </tr>
            <tr>
                <td>4</td>
                <td><input type="checkbox" name="pelicula4" id="pelicula"></td>
                <td>Samsung M23 5G</td>
                <td><input type="number" name="qtd4" id="qtd4" min="0"></td>
                <td>20,00</td>
            </tr>
        </table>
    </form>
</body>