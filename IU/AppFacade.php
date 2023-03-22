<?php
    namespace IU;
    use negocios\Endereco;
    use negocios\Entrega;
    use negocios\Pedido;

    class AppFacade{
        //apresentar 
        public function telaDePagamento(Entrega $entrega, Pedido $pedido, Endereco $endereco){
            echo "Preço Total: R$ ".nl2br($pedido->getPrecoTotal()."\n");
            echo "Frete: R$ ".nl2br($entrega->getValor()."\n");
            echo "Localizacao: ".$endereco->getRua().",".$endereco->getBairro().", ".$endereco->getNumero();   
        }
    }

?>