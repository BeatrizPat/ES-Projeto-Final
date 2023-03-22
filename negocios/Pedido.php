<?php
    namespace negocios;
    use negocios\Item;
    use negocios\Entrega;
    use negocios\Cliente;
    use persistencia\RestaurantePersist;

    require_once __DIR__.'/../negocios/Item.php';
    require_once __DIR__.'/../persistencia/RestaurantePersist.php';
    class Pedido{
        private $precoTotal = 0;
        
        private $itens;
        
        private Cliente $cliente;//um pedido possui um cliente?

        private Entrega $entrega;

        public function __construct(Cliente $cliente){
            $this->cliente = $cliente;

            
            //para teste, todos os pedidos terao 3 itens
            $this->itens = array(
                new Item(50, "File de Frango"),
                new Item(40, "X-tudo"),
                new Item(10, "Refrigerante")
            );

            $this->setEntrega($cliente->getLocalizacao());
            
            //acha preco total do pedido
            foreach($this->itens as $item){
                $this->precoTotal+=$item->getValor();
            }
            
        }
        
        public function setEntrega(Endereco $endereco){
            $temp = RestaurantePersist::getInstance();
            $this->entrega = $temp->resgatarEntrega($endereco);
            $this->precoTotal+=$this->entrega->getValor();
        }

        public function getPrecoTotal(){
            return  $this->precoTotal;
        }


        public function getEntrega(){
            return $this->entrega;
        }
        

    }
?>