<?php
    namespace negocios;
    use persistencia\RestaurantePersist;
    
    class Restaurante{
        private $nome;

        public function __construct($nome){
            $this->nome = $nome;
        }
        
        public function getNome(){
            return $this->nome;
        }
    }
?>