<?php 
    session_start();
    
    $i = 0;
    $ni = 0;
    $valor_total = 0;
    $_SESSION['fones'] = array();
    if(isset($_POST['selecione'])){
        $selecione = $_POST['selecione'];

        while($i <= 4){
            if($_POST['qtd'.$i]>0){
                $c = $ni;
                $desc = $_POST['desc'.$i];
                $qtd = $_POST['qtd'.$i];
                $vl = $_POST['vl'.$i];
                $valor_total += ($vl*$qtd);

                $_SESSION['fones'] = array_merge($_SESSION['fones'],
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
    <title>Fones de ouvido</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='prod.css'>
    <script src='main.js'></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body> 

<div class="container-fluid">

<form action="fones.php" method="post">
   

        <h1>Selecione seu fone ;D</h1>
        
            <div class="linha row">
                
                <div class="coluna col-lg-2 col-md-4 col-sm-6">

                    
                    <img src="imggs/buds2fone.png" alt="fones" width="100%">


                    <input type="hidden" name="desc0" value="Galaxy Buds 2 - Bluetooth" readonly>
                    <p>Galaxy Buds 2 - Bluetooth</p>
                    Valor: R$390
                    <div class="row">
                        <div class="col-lg-6 col-md-12">

                            <label for="qtd0">Quantidade: </label>
                        </div>
                        <div class="col-lg-6 col-md-12">

                            <input type="number" name="qtd0" id="qtd0" value="0" min="0" style="width: 100%;">
                        </div>
                    </div>
                    <input type="hidden" name="vl0" value="390.00" readonly> 

                </div> 

                <div class="coluna col-lg-2 col-md-4 col-sm-6">

                   
                    <img src="imggs/instage3fone.png" alt="fones" width="100%">


                    <input type="hidden" name="desc1" value="Samsung Galaxy A03 S" readonly>
                    <p>inStage Hero 3 - Bluetooth</p>
                    Valor: R$140
                    <div class="row">
                        <div class="col-lg-6 col-md-12">

                            <label for="qtd1">Quantidade: </label>
                        </div>
                        <div class="col-lg-6 col-md-12">

                            <input type="number" name="qtd1" id="qtd1" value="0" min="0" style="width: 100%;">
                        </div>
                    </div>
                    <input type="hidden" name="vl1" value="140.00" readonly> 

                </div>   

                <div class="coluna col-lg-2 col-md-4 col-sm-6">

                   
                    <img src="imggs/airdotsfone.png" alt="fones" width="100%">


                    <input type="hidden" name="desc2" value="Redmi Air Dots - Bluetooth" readonly>
                    <p>Redmi Air Dots - Bluetooth</p>
                    Valor: R$120
                    <div class="row">
                        <div class="col-lg-6 col-md-12">

                            <label for="qtd2">Quantidade: </label>
                        </div>
                        <div class="col-lg-6 col-md-12">

                            <input type="number" name="qtd2" id="qtd2" value="0" min="0" style="width: 100%;">
                        </div>
                    </div>
                    <input type="hidden" name="vl2" value="120.00" readonly> 

                </div>   

                <div class="coluna col-lg-2 col-md-4 col-sm-6">

                    
                    <img src="imggs/qcyt13fone.png" alt="fones" width="100%">


                    <input type="hidden" name="desc3" value="QCY T13 - Bluetooth" readonly>
                    <p>QCY T13 - Bluetooth</p>
                    Valor: R$30
                    <div class="row">
                        <div class="col-lg-6 col-md-12">

                            <label for="qtd3">Quantidade: </label>
                        </div>
                        <div class="col-lg-6 col-md-12">

                            <input type="number" name="qtd3" id="qtd3" value="0" min="0" style="width: 100%;">
                        </div>
                    </div>
                    <input type="hidden" name="vl3" value="110.00" readonly> 

                </div> 

                <div class="coluna col-lg-2 col-md-4 col-sm-6">

                    
                    <img src="imggs/buds2profone.png" alt="fones" width="100%">


                    <input type="hidden" name="desc4" value="Galaxy Buds 2 Pro - Bluetooth" readonly>
                    <p>Galaxy Buds 2 Pro - Bluetooth</p>
                    Valor: R$900
                    <div class="row">
                        <div class="col-lg-6 col-md-12">

                            <label for="qtd4">Quantidade: </label>
                        </div>
                        <div class="col-lg-6 col-md-12">

                            <input type="number" name="qtd4" id="qtd4" value="0" min="0" style="width: 100%;">
                        </div>
                    </div>
                    <input type="hidden" name="vl4" value="900.00" readonly> 

                </div>

                <!-- <form action="fones.php" method="post">
                    <center><table>
            <tr>
                <th colspan="5">Selecione seu fone de ouvido ;D</th>
            </tr>
            <tr>
                <th>Indíce</th>
                <th>#</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Valor</th> 
                <th>Imagem</th>
            </tr>
            <tr>
                <td>1</td>
                <td><input type="checkbox" name="fone0" id="fone"></td>
                <td><input type="text" name="desc0" value="Galaxy Buds 2 - Bluetooth" readonly></td>
                <td><input type="number" name="qtd0" id="qtd0" value="0" min="0"></td>
                <td><input type="text" name="vl0" value="390.00" readonly></td> 
                <td> <img src= "imggs/gbuds1.jpg" alt="" widht="60px" height="60px"/></td>
            </tr>
            <tr>
                <td>2</td>
                <td><input type="checkbox" name="fone1" id="fone"></td>
                <td><input type="text" name="desc1" value="inStage Hero 3 - Bluetooth" readonly></td>
                <td><input type="number" name="qtd1" id="qtd1" value="0" min="0"></td>
                <td><input type="number" name="vl1" value="140.00" readonly></td> 
                <td> <img src= "imggs/ins1.jpg" alt="" widht="60px" height="60px"/></td>
            </tr>
            <tr>
                <td>3</td>
                <td><input type="checkbox" name="fone2" id="fone"></td>
                <td><input type="text" name="desc2" value="Redmi Air Dots - Bluetooth" readonly></td>
                <td><input type="number" name="qtd2" id="qtd2" value="0" min="0"></td>
                <td><input type="number" name="vl2" value="120.00" readonly></td> 
                <td> <img src= "imggs/red1.jpg" alt="" widht="60px" height="60px"/></td>
            </tr>
            <tr>
                <td>4</td>
                <td><input type="checkbox" name="fone3" id="fone"></td>
                <td><input type="text" name="desc3" value="QCY T13 - Bluetooth" readonly></td>
                <td><input type="number" name="qtd3" id="qtd3" value="0" min="0"></td>
                <td><input type="number" name="vl3" value="110.00" readonly></td> 
                <td> <img src= "imggs/qcyy1.jpg" alt="" widht="60px" height="60px"/></td>
            </tr>
            <tr>
                <td>5</td>
                <td><input type="checkbox" name="fone4" id="fone"></td>
                <td><input type="text" name="desc4" value="Galaxy Buds 2 Pro - Bluetooth" readonly></td>
                <td><input type="number" name="qtd4" id="qtd4" value="0" min="0"></td>
                <td><input type="number" name="vl4" value="900.00" readonly></td> 
                <td> <img src= "imggs/pro1.jpg" alt="" widht="60px" height="60px"/></td>
            </tr>
        </table></center>
    --> 
        
                <div class="row">
                    <div class="col-lg-3 col-sm-7">
                        <input type="submit" name="selecione" value = "Selecione">
                    </div>
                    <div class="col-lg-3 col-sm-7">
                        <input type="submit" name="volte" value = "Voltar">
                    </div>
                </div>
    </form> 
</body>  