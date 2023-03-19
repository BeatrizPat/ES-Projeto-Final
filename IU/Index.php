<?php
    //namespace IU;

    use IU\AppFacade;
    use negocios\Cliente;
    require_once __DIR__.'/../negocios/Cliente.php';

    $cliente = new Cliente("Joao da Silva", "40040040022", 2);//essa linha serve para testar a recuperacao no BD (US3). é esperado que seu atributo localizacao esteja correto
    $facade = new AppFacade();
?>

<html>
    <title>Tela de Pagamento</title>
    <body> 
         <?php
            //apresenta preco total do pedido (US1 AC1)
            //apresenta localizacao do Cliente (US2 AC1)
         ?>
    </body>
</html>