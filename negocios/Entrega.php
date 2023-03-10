<?php
    class Entrega {
        private $valor;
        private Endereco $localizacao;
        private $tempoEstimado; 
        private $tipoEntrega;

        public function __construct(Endereco $localizacao, $valor, $tempoEstimado) {
            $this->localizacao = $localizacao;
            $this->tempoEstimado = $tempoEstimado;
            $this->valor = $valor;
            $this->tipoEntrega = "CONVENCIONAL";
        }


        public function setTipoEntrega($entregaExpressa){
            if($entregaExpressa == true){
                $this->tipoEntrega = "EXPRESSA";
                $this->valor += ($this->valor * 0.25);//na entrega expressa, o valor aumenta em 25%
                $this->tempoEstimado -= ($this->tempoEstimado * 0.25);//e o tempo estimado cai em 25%
            }
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
            return $this->tipoEntrega;
        }
    }


?>