<?php 

session_start();
$i = 1;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Resumo da compra</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <table>
            <tr>
                <th colspan="5">Dados do usuário ;D</th>
            </tr>
            <tr>
                <th></th>
                <th>Tipo</th>
                <th></th>
                <th>Informado</th>
            </tr>
            <tr>
                <th></th>
                <td>Nome</td>
                <th></th>
                <td><?php echo $_SESSION['login']['nome'] ?></td>
            </tr>
            <tr>
                <th></th>
                <td>Endereço</td>
                <th></th>
                <td><?php echo $_SESSION['login']['endereco'] ?></td>
            </tr>
            <tr>
                <th></th>
                <td>Telefone</td>
                <th></th>
                <td><?php echo $_SESSION['login']['telefone'] ?></td>
            </tr><br>

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
                    <th colspan="3"></th>
                    <th>Valor total</th>
                    <td>'. 'R$' . $_SESSION['valor_total'] . '</td>
                </tr>';
        ?>
        
        <tr>
            <th colspan='5'>Dados de pagamento $</th>
        </tr>
        <tr>
            <th></th>
            <th>Método</th>
            <th></th>
            <th>Dados</th>
        </tr>
        <tr>
            <td></td>
            <td>
                <?php
                    if(isset($_SESSION['dadospag']['metselec'])){
                        echo $_SESSION['dadospag']['metselec'];
                    }    
                ?>
            </td>
            <td></td>
            <td>
                <?php 
                    if($_SESSION['dadospag']['metselec'] == 'pix'){
                        echo $_SESSION['dadospag']['pix'];
                    }else if($_SESSION['dadospag']['metselec'] == 'credito'){
                        echo $_SESSION['dadospag']['cred'];
                    }else if($_SESSION['dadospag']['metselec'] == 'debito'){
                        echo $_SESSION['dadospag']['deb'];
                    }
                ?>
            </td>
        </tr>

    </table>
</body>
</html>