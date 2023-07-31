<?php 
    session_start();
    
    $i = 0;
    $ni=0;
    $valor_total=0;
    $_SESSION["itens"] = array();
    $_SESSION["valor_total"] = 0;
    if(isset($_POST["compre"])){
        $comprar = $_POST["compre"];

        while($i < 4){
            if(isset($_POST["pelicula". $i])){
                $c=$ni;
                $desc=$_POST["desc".$i];
                $qtd=$_POST["qtd".$i];
                $vl=$_POST["vl".$i];
                $valor_total+=$vl*$qtd;
                $_SESSION['itens']=array_merge($_SESSION['itens'],
                array($c=>array(
                    'ni'=>$i, 'desc'=>$desc, 'qtd'=>$qtd, 'vl'=>$vl
                )));

                $ni++;
            }
            $i++;
        }
        if($ni>0) {
            $_SESSION['valor_total'] = $valor_total;
            header("Location: ../central/login.php", true, 303);
            /*for ($i=0; $i < $ni; $i++) { 

                echo $i ."| Nome:". $_SESSION['itens'][$i]['desc'] . "| Valor:" . $_SESSION['itens'][$i]['vl'] . "| Quantidade:" . $_SESSION['itens'][$i]['qtd'] . "<br>";
            }


            $ni++;
            */
        }
    }
    echo "Valor Total: ".$valor_total;

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
    <form action="pelicula.php" method="post">
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
                <td>1</td>
                <td><input type="checkbox" name="fone0" id="fone"></td>
                <td><input type="text" name="desc0" value="Redmi Note 11" readonly></td>
                <td><input type="number" name="qtd0" id="qtd0" value="0" min="0"></td>
                <td><input type="text" name="vl0" value="15.00" readonly></td>
            </tr>
            <tr>
                <td>2</td>
                <td><input type="checkbox" name="fone1" id="fone"></td>
                <td><input type="text" name="desc1" value="Samsung S20 FE" readonly></td>
                <td><input type="number" name="qtd1" id="qtd1" value="0" min="0"></td>
                <td><input type="number" name="vl1" value="15.00" readonly></td>
            </tr>
            <tr>
                <td>3</td>
                <td><input type="checkbox" name="fone2" id="fone"></td>
                <td><input type="text" name="desc2" value="LG Nexus 5" readonly></td>
                <td><input type="number" name="qtd2" id="qtd2" value="0" min="0"></td>
                <td><input type="number" name="vl2" value="15.00" readonly></td>
            </tr>
            <tr>
                <td>4</td>
                <td><input type="checkbox" name="fone3" id="fone"></td>
                <td><input type="text" name="desc3" value="Samsung Galaxy A30" readonly></td>
                <td><input type="number" name="qtd3" id="qtd3" value="0" min="0"></td>
                <td><input type="number" name="vl3" value="15.00" readonly></td>
            </tr>
            <tr>
                <td>5</td>
                <td><input type="checkbox" name="fone4" id="fone"></td>
                <td><input type="text" name="desc4" value="Iphone 14 Pro Max" readonly></td>
                <td><input type="number" name="qtd4" id="qtd4" value="0" min="0"></td>
                <td><input type="number" name="vl4" value="30.00" readonly></td>
            </tr>
        </table>
        <input type="submit" name="compre">
    </form>
</body>