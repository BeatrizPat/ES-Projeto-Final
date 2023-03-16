<?php
    namespace negocios;
    use negocios\Item;
    use negocios\Entrega;
    use negocios\Cliente;
    use negocios\EnumPagamento;
    
    class Pedido{
        private $precoTotal = 0;

        //para teste, todos os pedidos terao 3 itens
        private $itens = array(
            new Item(50, "File de Frango"),
            new Item(40, "X-tudo"),
            new Item(10, "Refrigerante")
        );

        private Cliente $cliente;//um pedido possui um cliente?

        private Entrega $entrega;

        private EnumPagamento $tipoPagamento;

        public function __construct(Entrega $entrega, Cliente $cliente, EnumPagamento $enumPagamento){
            $this->cliente = $cliente;
            $this->entrega = $entrega;
            $this->tipoPagamento = $enumPagamento;


            //acha preco total do pedido
            foreach($this->itens as $item){
                $this->precoTotal+=$item->getValor();
            }
            $this->precoTotal+=$this->entrega->getValor();

        }

        public function getPrecoTotal(){
            return  $this->precoTotal;
        }

        public function getTipoPagamento(){
            return  $this->tipoPagamento;
        }

        public function getEntrega(){
            return $this->entrega;
        }
        
    }
?>