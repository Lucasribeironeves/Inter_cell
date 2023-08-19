<?php 

session_start();
$i = 1;

$_SESSION['dadospag'] = "";

if(isset($_POST['confirmar'])){
    if(isset($_POST['opcoes'])){
        $metselec = $_POST['opcoes'];
        $numpix = '40028922';
        $numdeb = $_POST['numcartaodeb'];
        $numcred = $_POST['numcartaocred'];
        
        $_SESSION['dadospag'] = array(
            'metselec' => $metselec,
            'cred' => $numcred,
            'deb' => $numdeb,
            'pix' => $numpix
        ); 
        header("Location: ../central/resumo_compra.php", true, 303);
    }   
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pagamento</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='plomplom.css'>
    <script src='main.js'></script>
</head>
<body>
    <!-- Exibição dos dados do usuário -->
    <center><table>
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
    </table></center><br>

    <center><table>
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
    </table></center><br>

    <form action="forma_pagamento.php" method="post">
        <center><table>
            <tr>
                <th colspan="4">Selecione a método de pagamento!</th>
            </tr>
            <tr>
                <th>#</th>
                <th>Opção</th>
                <th>Informações</th>
            </tr>
            <tr>
                <td><input type="radio" name="opcoes" name="pix" value="Pix"></td>
                <td>Pix</td>
                <td>40028922</td>
            </tr>
            <tr>
                <td><input type="radio" name="opcoes" name="debito" value="Cartão de débito"></td>
                <td>Cartão de débito</td>
                <td><input type="number" name="numcartaodeb"></td>
            </tr>
            <tr>
                <td><input type="radio" name="opcoes" name="credito" value="Cartão de crédito"></td>
                <td>Cartão de crédito</td>
                <td><input type="number" name="numcartaocred"></td>
            </tr>
        </table></center><br>
        <input type="submit" value="Confirmar" name="confirmar">
    </form>
</body>
</html>