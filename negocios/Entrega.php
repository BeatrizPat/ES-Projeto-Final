<?php
    class Entrega {
        private $valor;
        private Endereco $localizacao;
        private $tempoEstimado; 
        private EnumEntrega $TipoEntrega; //não tenho certeza se fica assim msm 
        //pix, cartao e dinheiro
        public function __construct(Endereco $localizacao, EnumEntrega $TipoEntrega) {
            $this->valor; //calculado
            $this->localizacao = $localizacao;
            $this->tempoEstimado; //calculado
            $this->TipoEntrega = $TipoEntrega;

            //fazer cálculo do valor e tempo com base no tipo de entrega e endereço
        }

        public function getValor() {
            return $this->valor;
        }
        public function setValor($valor) {
            $this->valor = $valor;
        }
        public function getLocalizacao() {
            return $this->localizacao;
        }
        public function getTempoestimado() {
            return $this->tempoEstimado;
        }
        public function getTipoEntrega() {
            return $this->TipoEntrega;
        }
    }


?>