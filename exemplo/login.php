<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="login.php" method="post">
        <table>
            <tr>
                <th colspan="2">Faça seu login</th>
            </tr>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" id="nome"></td>
            </tr>
            <tr>
                <td>Endereço:</td>
                <td><input type="text" name="endereco" id="endereco"></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input type="text" name="telefone" id="telefone"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input type="text" name="senha" id="senha"></td>
            </tr>
        </table><br>
        <input type="submit" value="Confirmar">
    </form>
</body>
</html>