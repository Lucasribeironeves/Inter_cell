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
    $i = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Carrinho de compras</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
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
        ?>

        <!-- Exibição das películas -->
        <?php 
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
        ?>

        <!-- Exibição dos fones de ouvido -->
        <?php 
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
        ?>

        <!-- Exibição dos carregadores -->
        <?php 
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
        ?>

        <!-- Exibição das caixas de som -->
        <?php 
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
        ?>
    </table>
</body>
</html>