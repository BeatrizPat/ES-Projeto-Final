<?php
    namespace negocios;
    use negocios\Item;
    use negocios\Entrega;
    use negocios\Cliente;
    use negocios\EnumPagamento;
    use persistencia\RestaurantePersist;

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

        private EnumPagamento $tipoPagamento;//nenhuma US da sprint envolve isso

        public function __construct(Cliente $cliente){
            $this->cliente = $cliente;

            //acha preco total do pedido
            foreach($this->itens as $item){
                $this->precoTotal+=$item->getValor();
            }
            $this->precoTotal+=$this->entrega->getValor();

        }

        public function setEntrega(Endereco $endereco){
            $temp = RestaurantePersist::getInstance();
            $this->entrega = $temp->resgatarEntrega($endereco);
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