<?php   

if (isset($_POST['voltar'])) {
    header("Location: ../central/selecao_produtos.php", true, 303);
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Confirmação Compra </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='plimplim.css'>
    <script src='main.js'></script>
</head>
<body> 

    <div class="confirmacao">  

        <p>Sua compra foi confirmada!!!🛒</p>

    </div>
    <form action="confirmacao_compra.php" method="post">
        <div>
            <input class="botao_final" type="submit" value="🏠 Voltar à tela inicial" name="voltar">
        </div>
    </form>
</body>
</html>