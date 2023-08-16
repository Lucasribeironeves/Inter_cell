<?php
    //botões dos produtos por tipo
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
    if(isset($_POST['finalizar'])){
        header("Location: ../central/login.php", true, 303);
    }

    session_start();
    $i = 1;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Carrinho de compras</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../selecaocss.css'>
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

        <input type="submit" value="Finalizar" name="finalizar">
    </form><br>
    
    <?php 

        if(isset($_SESSION['capinhas']) || isset($_SESSION['fones']) || isset($_SESSION['peliculas'])
        || isset($_SESSION['caixas']) || isset($_SESSION['carregador'])){

            echo 
            '<table>
                <tr>
                    <th colspan="5">Itens selecionados</th>
                </tr>
                <tr>
                    <th>Indíce</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                </tr>';

                if(isset($_SESSION['capinhas'])){
                    foreach($_SESSION['capinhas'] as $capinhas){

                        echo '<tr>
                                <td>' . $i . '</td>
                                <td> Capinha </td>
                                <td>' . $capinhas['desc'] . '</td>
                                <td>' . $capinhas['qtd'] . '</td>
                                <td>' . $capinhas['vl'] . '</td>
                            </tr>';
                    $i++;    
                    }
                }

                if(isset($_SESSION['peliculas'])){
                    foreach($_SESSION['peliculas'] as $peliculas){

                        echo '<tr>
                                <td>' . $i . '</td>
                                <td> Película </td>
                                <td>' . $peliculas['desc'] . '</td>
                                <td>' . $peliculas['qtd'] . '</td>
                                <td>' . $peliculas['vl']. '</td>
                            </tr>';
                    $i++;
                    }
                }

                if(isset($_SESSION['fones'])){
                    foreach($_SESSION['fones'] as $fones){

                        echo '<tr>
                                <td>' . $i . '</td>
                                <td> Fone </td>
                                <td>' . $fones['desc'] . '</td>
                                <td>' . $fones['qtd'] . '</td>
                                <td>' . $fones['vl']. '</td>
                            </tr>';
                    $i++;
                    }
                }

                if(isset($_SESSION['carregadores'])){
                    foreach($_SESSION['carregadores'] as $carregadores){

                        echo '<tr>
                                <td>' . $i . '</td>
                                <td> Carregador </td>
                                <td>' . $carregadores['desc'] . '</td>
                                <td>' . $carregadores['qtd'] . '</td>
                                <td>' . $carregadores['vl']. '</td>
                            </tr>';
                    $i++;
                    }
                }

                if(isset($_SESSION['caixas'])){
                    foreach($_SESSION['caixas'] as $caixas){

                        echo '<tr>
                                <td>' . $i . '</td>
                                <td> Caixas de som </td>
                                <td>' . $caixas['desc'] . '</td>
                                <td>' . $caixas['qtd'] . '</td>
                                <td>' . $caixas['vl'] . '</td>
                            </tr>';
                    $i++;
                    }

                }
             
                if(isset($_SESSION['valor_total'])){
                    echo '<tr>
                            <td colspan="3"></td>
                            <th>Valor total</th>
                            <td>'. 'R$' . $_SESSION['valor_total'] . '</td>
                        </tr>';
                }                   

            echo 
            '</table><br>';

            //echo $_SESSION['valor_total'];

        }else{
            echo "Selecione algo :)";
        }

        //session_destroy();
    
    ?>

</body>
</html>