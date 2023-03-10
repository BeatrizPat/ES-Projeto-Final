<?php
    class Restaurante{
        private $nome;

        private RestaurantePersist $restaurantePersist;

        public function __construct($nome){
            $this->restaurantePersist = new RestaurantePersist();
            $this->nome = $nome;

        }
        
        public function getNome(){
            return $this->nome;
        }

        public function getEntrega(Endereco $endereco){
            return $this->restaurantePersist->resgatarEntrega($endereco);
        }
    }
?>