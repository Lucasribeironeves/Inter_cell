<?php 

    session_start();
    $i = 1;

    if(isset($_POST["Confirmar"])){
        header("Location: ../central/confirmacao_compra.php", true, 303);
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Resumo da compra</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='plimplim.css'>
    <script src='main.js'></script>
</head>
<body>
    <center>
        <table class="resulmo">
            <tr>
                <th colspan="5"><p class="destaque">Dados do usuário ;D</p></th>
            </tr>
            <tr>
                <th></th>
                <th><p class="destaque2">Tipo</p></th>
                <th></th>
                <th><p class="destaque2">Informado:</p></th>
            </tr>
            <tr>
                <th></th>
                <td><p class="destaque2">Nome:</p></td>
                <th></th>
                <td><?php echo $_SESSION['login']['nome'] ?></td>
            </tr>
            <tr>
                <th></th>
                <td><p class="destaque2">Endereço:</p></td>
                <th></th>
                <td><?php echo $_SESSION['login']['endereco'] ?></td>
            </tr>
            <tr>
                <th></th>
                <td><p class="destaque2">Telefone:</p></td>
                <th></th>
                <td><?php echo $_SESSION['login']['telefone'] ?></td>
            </tr><br>

            <tr>
                <th colspan="5"><p class="destaque">Itens selecionados</p></th>
            </tr>

            <tr>
                <th><p class="destaque2">Indíce</p></th>
                <th><p class="destaque2">Nome</p></th>
                <th><p class="destaque2">Descrição</p></th>
                <th><p class="destaque2">Quantidade</p></th>
                <th><p class="destaque2">Valor</p></th>
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
                <?php 
                    if (isset($capinhas['cor'])) {
                        echo "<td>".$capinhas['cor']."</td>";    
                    }else{
                        echo "<td>Não selecionou cor</td>";
                    }
                ?>
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

        <?php 
            $i++;

            echo '
            <tr>
                <td colspan="3"></td>
                <th><p class="destaque2">Valor total</p></th>
                <td><p class="dtq_vtl">'. 'R$' . $_SESSION['valor_total'] . '</p></td>
            </tr>';
        ?>
        
            <tr>
                <th colspan='5'><p class="destaque">Dados de pagamento $</p></th>
            </tr>
            <tr>
                <th></th>
                <th><p class="destaque2">Método</p></th>
                <th></th>
                <th><p class="destaque2">Dados</p></th>
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
                        if($_SESSION['dadospag']['metselec'] == 'Pix'){
                            echo $_SESSION['dadospag']['pix'];
                        }else if($_SESSION['dadospag']['metselec'] == 'Cartão de crédito'){
                            echo $_SESSION['dadospag']['cred'];
                        }else if($_SESSION['dadospag']['metselec'] == 'Cartão de débito'){
                            echo $_SESSION['dadospag']['deb'];
                        }
                    ?>
                </td>
            </tr></br> 
        </table>
    </center>

    <form action="resumo_compra.php" method="post"> 
        <input class="botao_final" type="submit" value="CONFIRMAR" name="Confirmar">  
    </form>
</body>
</html>