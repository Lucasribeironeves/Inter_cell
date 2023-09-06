<?php

session_start();
    
    $i = 0;
    $ni = 0;
    $valor_total = 0;
    $_SESSION['carregadores'] = array();
    if(isset($_POST['selecione'])){
        $selecione = $_POST['selecione'];

        while($i <= 4){
            if($_POST['qtd'. $i]>0){
                $c = $ni;
                $desc = $_POST['desc'.$i];
                $qtd = $_POST['qtd'.$i];
                $vl = $_POST['vl'.$i];
                $valor_total += ($vl*$qtd);

                $_SESSION['carregadores'] = array_merge($_SESSION['carregadores'],
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
            header("Location: ../central/selecao_produtos.php", true, 303);
            $_SESSION['valor_total'] += $valor_total;
            
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
    <title>Carregadores</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='prod.css'>
    <!-- bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <!-- bootstrap-->
    <script src='main.js'></script>
</head>
<body>
    <div class="container-fluid"> 
        <form action="carregadores.php" method="post"> 
            <p class="titulo">Selecione seu carregador ;D</p>
            <div class="linha row justify-content-around">
                <div class="coluna col-xxl-4 col-lg-2 col-md-4 col-sm-6">   
                    <img src="imggs/sam20wcarregador.png" alt="capinhas" width="100%">

                    <input type="hidden" name="desc0" value="Samsung-USB C 20W" readonly>
                    <p>Samsung-USB C 20W</p>
                    Valor: R$59.90

                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <label for="qtd0">Quantidade: </label>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <input type="number" name="qtd0" id="qtd0" value="0" min="0" style="width: 100%;">
                        </div>
                    </div>
                    <input type="hidden" name="vl0" value="59.90" readonly> 
                </div> 

                <div class="coluna col-xxl-4 col-lg-2 col-md-4 col-sm-6">
                    <img src="imggs/xiaomi60wcarregador.png" alt="carregadores" width="100%">

                    <input type="hidden" name="desc1" value="Redmi-USB C 60W" readonly>
                    <p>Redmi-USB C 60W</p>
                    Valor: R$34.99

                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <label for="qtd1">Quantidade: </label>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <input type="number" name="qtd1" id="qtd1" value="0" min="0" style="width: 100%;">
                        </div>
                    </div>
                    <input type="hidden" name="vl1" value="34.99" readonly> 
                </div>   

                <div class="coluna col-xxl-4 col-lg-2 col-md-4 col-sm-6">
                    <img src="imggs/mt25wcarregador.png" alt="carregadores" width="100%">

                    <input type="hidden" name="desc2" value="Motorola-USB C 25W" readonly>
                    <p>Motorola-USB C 25W</p>
                    Valor: R$49.90

                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <label for="qtd2">Quantidade: </label>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <input type="number" name="qtd2" id="qtd2" value="0" min="0" style="width: 100%;">
                        </div>
                    </div>
                    <input type="hidden" name="vl2" value="49.90" readonly> 
                </div>   

                <div class="coluna col-xxl-4 col-lg-2 col-md-4 col-sm-6">
                    <img src="imggs/lg10wcarregador.png" alt="carregadores" width="100%">

                    <input type="hidden" name="desc3" value="LG-USB 10W" readonly>
                    <p>LG-USB 10W</p>
                    Valor: R$25.00

                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <label for="qtd3">Quantidade: </label>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <input type="number" name="qtd3" id="qtd3" value="0" min="0" style="width: 100%;">
                        </div>
                    </div>
                    <input type="hidden" name="vl3" value="25.00" readonly> 

                </div> 
                <div class="coluna col-xxl-4 col-lg-2 col-md-4 col-sm-6">
                    <img src="imggs/apple50wcarregador.png" alt="carregadores" width="100%">

                    <input type="hidden" name="desc4" value="Iphone 14 Pro Max" readonly>
                    <p>Apple-USB C 50W</p>
                    Valor: R$199.90
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <label for="qtd4">Quantidade: </label>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <input type="number" name="qtd4" id="qtd4" value="0" min="0" style="width: 100%;">
                        </div>
                    </div>
                    <input type="hidden" name="vl4" value="199.90" readonly> 
                </div>
        
                <div class="row">
                    <div class="col-lg-3 col-sm-7">
                        <input type="submit" name="selecione" value = "Selecione">
                    </div>
                    <div class="col-lg-3 col-sm-7">
                        <input type="submit" name="volte" value = "Voltar">
                    </div>
                </div>
            </div>
        </form> 
    </div>
</body>
</html>