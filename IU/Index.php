<?php
    //namespace IU;

use IU\AppFacade;
use negocios\Cliente;
    require_once __DIR__.'/../negocios/Cliente.php';

    $cliente = new Cliente("Joao da Silva", "40040040022", 2);
    $facade = new AppFacade();
?>

<html>
    <title>Tela de Pagamento</title>
    <body> 
         <?php
            $localizacao = $cliente->getLocalizacao();
            echo $localizacao->getBairro();
            echo $localizacao->getRua();
         ?>
    </body>
</html>