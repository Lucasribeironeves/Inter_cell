<?php

session_start();
    
    $i = 0;
    $ni = 0;
    $valor_total = 0;
    $_SESSION['item'] = array();
    $_SESSION['valor_total'] = 0;
    if(isset($_POST['selecione'])){
        $selecione = $_POST['selecione'];

        while($i < 4){
            if(isset($_POST['caixa'. $i])){
                $c = $ni;
                $desc = $_POST['desc'.$i];
                $qtd = $_POST['qtd'.$i];
                $vl = $_POST['vl'.$i];
                $valor_total += ($vl*$qtd);

                $_SESSION['item'] = array_merge($_SESSION['item'],
                array($c => array(
                    'ni'=> $i, 
                    'desc'=> $desc, 
                    'qtd'=> $qtd, 
                    'vl'=> $vl
                )));

                $ni++;
            }else{
                echo 'Produto não selecionado';
            }
            $i++;
        }
        if($ni > 0) {
            $_SESSION['valor_total'] = $valor_total;
            header("Location: ../central/selecao_produtos.php", true, 303);
            /*for ($i=0; $i < $ni; $i++) { 

                echo $i ."| Nome:". $_SESSION['itens'][$i]['desc'] . "| Valor:" . $_SESSION['itens'][$i]['vl'] . "| Quantidade:" . $_SESSION['itens'][$i]['qtd'] . "<br>";
            }


            $ni++;
            */
        }
    }

    //echo "Valor Total: ".$valor_total;
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Caixa de som</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <script src='main.js'></script>
    </head>
    <body>
        <form action="caixa_de_som.php" method="post">
            <table>
                <tr>
                    <th colspan="5">Selecione sua caixa de som ;D</th>
                </tr>
                <tr>
                    <th>Indíce</th>
                    <th>#</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><input type="checkbox" name="caixa0" id="caixa"></td>
                    <td><input type="text" name="desc0" value="Mini/JBL - Bluetooth" readonly></td>
                    <td><input type="number" name="qtd0" id="qtd0" value="0" min="0"></td>
                    <td><input type="text" name="vl0" value="59.90" readonly></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><input type="checkbox" name="caixa1" id="caixa"></td>
                    <td><input type="text" name="desc1" value= "JBL Boombox 3 - portátil" readonly></td>
                    <td><input type="number" name="qtd1" id="qtd1" value="0" min="0"></td>
                    <td><input type="number" name="vl1" value="140.00" readonly></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><input type="checkbox" name="caixa2" id="caixa"></td>
                    <td><input type="text" name="desc2" value="Liv Star - Bluetooth" readonly></td>
                    <td><input type="number" name="qtd2" id="qtd2" value="0" min="0"></td>
                    <td><input type="number" name="vl2" value="91.74" readonly></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><input type="checkbox" name="caixa3" id="caixa"></td>
                    <td><input type="text" name="desc3" value="C3 tech - Bluetooth" readonly></td>
                    <td><input type="number" name="qtd3" id="qtd3" value="0" min="0"></td>
                    <td><input type="number" name="vl3" value="79.00" readonly></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><input type="checkbox" name="caixa4" id="caixa"></td>
                    <td><input type="text" name="desc4" value="JBL Charge 5 " readonly></td>
                    <td><input type="number" name="qtd4" id="qtd4" value="0" min="0"></td>
                    <td><input type="number" name="vl4" value="119.99" readonly></td>
                </tr>
            </table>
            <input type="submit" name="selecione" value = "Selecione">
        </form>
    </body>