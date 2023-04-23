<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="Logo png.png" type="image/x-icon">
    <link rel="shortcut icon" href="imagens/logo.jpg" type="image/x-icon">
    <title>Gestão plugo</title>
</head>
<style>
    #bemvindo{
        color: #4D4DFF;
        font-size: 20px;
    }
    #logo{
        margin: auto;
        display: block;
        text-align: left;
        width: 100px;
        height: 100px;
        justify-content: space-around;
    }


</style>
<body>
    <?php
    // Verifica se o usuário está autenticado
    session_start();
    if (!isset($_SESSION["username"])) {
        header("Location: index.html");
        exit();
    }
    ?>
    
    
    <main>
         
        <div id="sair"><a href="index.html"> <img src="imagens/sairpng_resized.png" alt=""></a></div>
        
        
        <h1 id="titulo"> Gestão  Março</h1>

        <nav>
            <a href="vendas.php">Vendas</a>
            <a href="entradas.html">Entradas</a>
            <a href="saidas.html">Saidas</a>
            <a href="receber.html">Receber</a>
            <a href="tabela.html">Resumo</a>
            <a href="devolucao.html">Devoluções</a>
            <a href="planilhas/Senhas plugobr.pdf">Senhas</a>
             
        </nav>

        <table>
            <caption>
                Vendas
            </caption>
            <tr>
                <th>Cliente</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor</th>
                
            </tr>
            <tr>
                <td>Wesley</td>
                <td>Fone F9</td>
                <td>1UN</td>
                <td>Preço de custo</td>
            </tr>
            <tr>
                <td>Gabriel</td>
                <td>Fone F9</td>
                <td>1UN</td>
                <td>Preço de custo</td>
            </tr>

            <tr>
                <td>Kawany</td>
                <td>Fone F9</td>
                <td>1UN</td>
                <td>R$ 80,00</td>
            </tr>
            
        </table>
        <h1 id="bemvindo">Logado como, <?php echo $_SESSION["username"]; ?></h1>

        
         
    </main>
    <section>
        <table>
            <caption>
                Produtos Da PlugoBr
            </caption>
            <tr>
                <th>Produto</th>
                <th>Valor De venda</th>
                <th>Fornecedor</th>
                <th>Estoque</th>
    
            </tr>
            <tr>
                <td>Fone F9</td>
                <td>R$80,00</td>
                <td>Shopee</td>
                <td>1</td>
            </tr>
            <tr>
                <td>Relogio D20</td>
                <td>R$45,00</td>
                <td>Shopee</td>
                <td>1</td>
                
            </tr>
            <tr>
                <td>Fone TWS</td>
                <td>R$45,00</td>
                <td>Shopee</td>
                <td>4</td>
                
            </tr>
            <tr>
                <td>Ventilador</td>
                <td>R$25,00</td>
                <td>Shopee</td>
                <td>1</td>
                
            </tr>
            <tr>
                <td>Relogio Digital</td>
                <td>R$17,99</td>
                <td>Shopee</td>
                <td>2</td>
                
            </tr>
            <tr>
                <td>Fone TWS <strong>PRO</strong></td>
                <td>R$55,00</td>
                <td>Shopee</td>
                <td>2</td>
                
            </tr>
             
            
        </table>
    </section>
    
    
    <?php 
        echo "Saldo Atual: R$251,02 \nPojeção: R$370,82 \nMeta: R$450,00"

    ?>
    <script>
        //   window.document = alert ('Mes de Março fechado. planilhas Disponivel para dowload')

           //window.document = alert('Saldo Atual: R$251,02 \nPojeção: R$370,82 \nMeta: R$450,00')
            
        
    </script>

    
</body>
</html>