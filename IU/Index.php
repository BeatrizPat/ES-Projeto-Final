<?php
    require_once(__DIR__.'/../negocios/Restaurante.php');

    $restaurante = new Restaurante("AiFood");
?>

<html>
    <title>Tela de Pagamento</title>
    <body>
        <br><br>
        Os Bairros em que o Restaurante entrega atualmente são:
        <?php 
            foreach($restaurante->bairrosDisponiveis() as $endereco){ 
                echo $endereco->getBairro();
                echo "<br><br>"; 
            }
        ?>
    </body>
</html>