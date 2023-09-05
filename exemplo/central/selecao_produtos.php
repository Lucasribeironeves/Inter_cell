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
    if(isset($_POST['esvaziar'])){
        session_destroy();
        header("Location: selecao_produtos.php", true, 303);
    }
    $i = 1;
    

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Carrinho de compras</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="plimplim.css">
    <script src='main.js'></script>
    <!--bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<body>
    
    <p class="inicio">Bem vindo a Inter Cell</p>      
    <p>Confira nossos produtos!</p>
    
    
    
    <form action="selecao_produtos.php" method="post">
    <div class="container">

        <div class="row ">
            <div class="col-lg-3 col-md-6  ">

                <div class="capinhas">
                    
                    <input class="botao_entrar" type="submit" value="Capinhas" name="capinhas">
                    
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6  ">
                <div class="peliculas">
                    <input class="botao_entrar" type="submit" value="Películas" name="peliculas">
                </div>
            </div>
            <div class="col-lg-3 col-md-6  ">

                <div class="finos">
                    
                    <input class="botao_entrar" type="submit" value="Fones" name="fones">
                </div>
            </div>
               
       
        

            <div class="col-lg-3 col-md-6  ">
                
                <div class="carregadores">
                    <input class="botao_entrar_carregador" type="submit" value="Carregadores" name="carregador">
                    
                </div>
            </div>
 
            
        </div>
    

        <input class="final" type="submit" value="FINALIZAR" name="finalizar">
        <input class="esvaziar" type="submit" value="ESVAZIAR CARRINHO 🛒" name="esvaziar">

    </div>
    </form><br>
    
    <?php 

        if(isset($_SESSION['valor_total'])){
            if(isset($_SESSION['capinhas']) || isset($_SESSION['fones']) || isset($_SESSION['peliculas'])
            || isset($_SESSION['caixas']) || isset($_SESSION['carregadores'])){
            
            echo 
            '<table class="selecao_prod">
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
             
                echo '<tr>
                        <td colspan="3"></td>
                        <th>Valor total</th>
                        <td>'. 'R$' . $_SESSION['valor_total'] . '</td>
                    </tr>';                  

            echo 
            '</table><br>';

            }else{
                echo "Selecione algo :)";
            }
        }

    
    ?>
    
</body>
</html>