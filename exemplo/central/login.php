<?php 
    session_start();
    $i = 1;
    $logar = '';

    $_SESSION['login'] = "";

    if(isset($_POST['logar'])){
        $logar = $_POST['logar'];

        if(isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['telefone'])){

            $_SESSION['login'] = array(
                'nome' => $_POST['nome'],
                'endereco' => $_POST['endereco'],
                'telefone' => $_POST['telefone']
            ); 

            header("Location: ../central/forma_pagamento.php", true, 303);
        }

    }
    
    echo "Valor total: R$". $_SESSION['valor_total'];
?>

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
    <table>
        <tr>
            <th colspan="5">Itens selecionados</th>
        </tr>
        <tr>
            <th>Indíce</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Valor</th>
        </tr>

        <!-- Exibição das capinhas -->
        <?php 
            if(isset($_SESSION['capinhas'])){
                foreach($_SESSION['capinhas'] as $capinhas){
        ?>

            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo "Capinha" ?></td>
                <td><?php echo $capinhas['desc']; ?></td>
                <td><?php echo $capinhas['qtd']; ?></td>
                <td><?php echo $capinhas['vl']; ?></td>
            </tr>
        
        <?php 
        $i++;
                }
            }
        ?>

        <!-- Exibição das películas -->
        <?php
            if(isset($_SESSION['peliculas'])){ 
                foreach($_SESSION['peliculas'] as $peliculas){
        ?>

            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo "Película" ?></td>
                <td><?php echo $peliculas['desc']; ?></td>
                <td><?php echo $peliculas['qtd']; ?></td>
                <td><?php echo $peliculas['vl']; ?></td>
            </tr>
        
        <?php 
        $i++;
                }
            }
        ?>

        <!-- Exibição dos fones de ouvido -->
        <?php 
            if(isset($_SESSION['fones'])){
                foreach($_SESSION['fones'] as $fones){
        ?>

            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo "Fone de ouvido" ?></td>
                <td><?php echo $fones['desc']; ?></td>
                <td><?php echo $fones['qtd']; ?></td>
                <td><?php echo $fones['vl']; ?></td>
            </tr>
        
        <?php
        $i++; 
                }
            }
        ?>

        <!-- Exibição dos carregadores -->
        <?php
            if(isset($_SESSION['carregadores'])){ 
                foreach($_SESSION['carregadores'] as $carregadores){
        ?>

            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo "Carregador" ?></td>
                <td><?php echo $carregadores['desc']; ?></td>
                <td><?php echo $carregadores['qtd']; ?></td>
                <td><?php echo $carregadores['vl']; ?></td>
            </tr>
        
        <?php 
        $i++;
                }
            }
        ?>

        <!-- Exibição das caixas de som -->
        <?php 
            if(isset($_SESSION['caixas'])){
                foreach($_SESSION['caixas'] as $caixas){
        ?>

            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo "Caixas de som" ?></td>
                <td><?php echo $caixas['desc']; ?></td>
                <td><?php echo $caixas['qtd']; ?></td>
                <td><?php echo $caixas['vl']; ?></td>
            </tr>
        
        <?php 
        $i++;
                }
            }
        ?>
    </table><br>

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
                <td><input type="number" name="telefone" id="telefone"></td>
            </tr>
        </table><br>
        <input type="submit" name="logar" value="Logar">
    </form>

    
</body>
</html>