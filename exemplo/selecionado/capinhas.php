<?php 
    session_start();
    
    $i = 0;
    $ni = 0;
    $valor_total = 0;
    $_SESSION['capinhas'] = array();
    if(isset($_POST['selecione'])){
        $selecione = $_POST['selecione'];

        while($i <= 4){
            if(isset($_POST['capinha'. $i])){
                $c = $ni;
                $desc = $_POST['desc'.$i];
                $qtd = $_POST['qtd'.$i];
                $vl = $_POST['vl'.$i];
                $valor_total += ($vl*$qtd);

                $_SESSION['capinhas'] = array_merge($_SESSION['capinhas'],
                array($c => array(
                    'ni'=> $i,
                    'desc'=> $desc, 
                    'qtd'=> $qtd, 
                    'vl'=> $vl
                )));

                $ni++;
            }
            $i++;
        }
        if($ni > 0) {
            $_SESSION['valor_total'] += $valor_total;
            header("Location: ../central/selecao_produtos.php", true, 303);   
        }
    }

    if(isset($_POST['volte'])){
        header("Location: ../central/selecao_produtos.php", true, 303);
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Capinhas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='prod.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<body>
    <form action="capinhas.php" method="post">
        <center>
 
                <h1>Selecione sua capinha ;D</h1>
  
                    <div class="row">
                        <div class="coluna col-2">
                            <img src="imggs/cap_cors.jpg" alt="capinhas" width="100%">
                        </div>
                        <div class="coluna col-3">

                            <input type="checkbox" name="capinha0" id="capinha">
                            <input type="text" name="desc0" value="Moto G30" readonly>
                            <input type="number" name="qtd0" id="qtd0" value="0" min="0">
                            <input type="text" name="vl0" value="20.00" readonly> 
                        </div>
                        
                    </div>

                    
            </tr>
            <tr>
                <td>2</td>
                <td><input type="checkbox" name="capinha1" id="capinha"></td>
                <td><input type="text" name="desc1" value= "Samsung Galaxy A03 S" readonly></td>
                <td><input type="number" name="qtd1" id="qtd1" value="0" min="0"></td>
                <td><input type="number" name="vl1" value="10.00" readonly></td> 
                <td> <img src= "imggs/cap_cors.jpg" alt="" widht="60px" height="60px"/></td>
            </tr>
            <tr>
                <td>3</td>
                <td><input type="checkbox" name="capinha2" id="capinha"></td>
                <td><input type="text" name="desc2" value="Redmi Note 11" readonly></td>
                <td><input type="number" name="qtd2" id="qtd2" value="0" min="0"></td>
                <td><input type="number" name="vl2" value="20.00" readonly></td> 
                <td> <img src= "imggs/cap_cors.jpg" alt="" widht="60px" height="60px"/></td>
            </tr>
            <tr>
                <td>4</td>
                <td><input type="checkbox" name="capinha3" id="capinha"></td>
                <td><input type="text" name="desc3" value="Samsung S20 FE" readonly></td>
                <td><input type="number" name="qtd3" id="qtd3" value="0" min="0"></td>
                <td><input type="number" name="vl3" value="30.00" readonly></td> 
                <td> <img src= "imggs/cap_cors.jpg" alt="" widht="60px" height="60px"/></td>
            </tr>
            <tr>
                <td>5</td>
                <td><input type="checkbox" name="capinha4" id="capinha"></td>
                <td><input type="text" name="desc4" value="Iphone 14 Pro Max" readonly></td>
                <td><input type="number" name="qtd4" id="qtd4" value="0" min="0"></td>
                <td><input type="number" name="vl4" value="70.00" readonly></td> 
                <td> <img src= "imggs/cap_cors.jpg" alt="" widht="60px" height="60px"/></td>
            </tr>
        </table></center>
        <input type="submit" name="selecione" value = "Selecione">
        <input type="submit" name="volte" value = "Voltar">
    </form>
</body>