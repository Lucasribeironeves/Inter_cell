<?php 

session_start();
$i = 1;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pagamento</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <!-- Exibição dos dados do usuário -->
    <table>
            <tr>
                <th colspan="2">Dados do usuário ;D</th>
            </tr>
            <tr>
                <th>Tipo</th>
                <th>Informado</th>
            </tr>
            <tr>
                <td>Nome</td>
                <td><?php echo $_SESSION['login']['nome'] ?></td>
            </tr>
            <tr>
                <td>Endereço</td>
                <td><?php echo $_SESSION['login']['endereco'] ?></td>
            </tr>
            <tr>
                <td>Telefone</td>
                <td><?php echo $_SESSION['login']['telefone'] ?></td>
            </tr>
    </table><br>

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

            echo '<tr>
                    <th>Valor total</th>
                    <td>'. 'R$' . $_SESSION['valor_total'] . '</td>
                </tr>';

        ?>
    </table><br>

    <form action="forma_pagamento.php" method="post">
        <table>
            <tr>
                <th colspan="2">Selecione a forma de pagamento!</th>
            </tr>
            <tr>
                <td><input type="radio" name="opcoes" id="cartao_credito" value="cartao_credito"></td>
                <td>Cartão de crédito</td>
            </tr>
            <tr>
                <td><input type="radio" name="opcoes" id="pix" value="pix"></td>
                <td>Pix</td>
            </tr>
            <tr>
                <td><input type="radio" name="opcoes" id="a_vista" value="avista"></td>
                <td>Á vista</td>
            </tr>
        </table><br>
        <input type="submit" value="Confirmar">
    </form>
</body>
</html>