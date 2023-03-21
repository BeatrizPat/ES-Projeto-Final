<?php
    namespace IU;

    class AppFacade{
        //apresentar 
        public function telaDePagamento($pedido){
            echo $pedido->getPrecoTotal();    
        }

    }

?>