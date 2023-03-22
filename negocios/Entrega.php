<?php
    namespace negocios;
    use negocios\Endereco;
    
    class Entrega {
        private $valor;
        private Endereco $localizacao;

        public function __construct(Endereco $localizacao, $valor, $tempoEstimado) {
            $this->localizacao = $localizacao;
            $this->valor = $valor;
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
    }


?>