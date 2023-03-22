<?php
    //namespace IU;

    use IU\AppFacade;
    use negocios\Cliente;
    use negocios\Pedido;

    require_once __DIR__.'/../negocios/Cliente.php';
    require_once __DIR__.'/../negocios/PedidoFacade.php';
    require_once __DIR__.'/../IU/AppFacade.php';

    $cliente = new Cliente("Joao da Silva", "40040040022", 2);//essa linha serve para testar a recuperacao no BD (US3). é esperado que seu atributo localizacao esteja correto
    $pedido = new Pedido($cliente);
    $facade = new AppFacade();
?>

<html>
    <head> 
        <title>Tela de Pagamento</title>
        <!-- estilo -->
        <style>
            h1, h2 {
                font-size: 25px;
                text-align: center;
            }
            
            .dados {
                padding: 0px 100px 20px;
                margin: auto;
                border: 3px solid #146551;
                border-radius: 10px;
                background-color: #8FC1B5;
                width: max-content;
            }
        </style>
    </head>
    <body> 
        <div class = "tela">
            <div class = "dados">
                <h1>Pagamento</h1>
                <?php
                    //apresenta preco total do pedido (US1 AC1)
                    $pedido->exibirInfoPedido();
                    
                ?>
                <h2>Localização</h2>
                <?php
                    //apresenta localizacao do Cliente (US2 AC1)
                    $pedido->exibirInfoCliente();
                ?>
            </div>
        </div>
    </body>
</html>
