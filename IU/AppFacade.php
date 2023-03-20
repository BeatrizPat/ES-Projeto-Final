<?php
    namespace IU;

    class AppFacade{
        //apresentar 
        public function telaDePagamento(){
            
            
        }

        public function exibePrecoTotalPedido(Pedido $pedido) {
            echo $pedido->getPrecoTotal();
        }
    }

?>