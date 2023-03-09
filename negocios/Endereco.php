<?php>
    class Endereco{
        //declaracao de variáveis
        private $rua;
        private $numero;
        private $cep;
        private $bairro;
        private $complemento;
        private $pontoReferencia;

        public function __construct($rua, $numero, $cep, $bairro, $complemento, $pontoReferencia){
            $this->rua =  $rua;
            $this->numero =  $numero;
            $this->cep =  $cep;
            $this->bairro =  $bairro;
            $this->complemento =  $complemento;
            $this->pontoReferencia =  $pontoReferencia;
        }
        public function getRua(){
            return $this->rua;
        }
        public function getNumero(){
            return $this->numero;
        }
        public function getCep(){
            return $this->cep;
        }
        public function getBairro(){
            return $this->bairro;
        }
        public function getComplemento(){
            return $this->complemento;
        }
        public function getPontoReferencia(){
            return $this->pontoReferencia;
        }
    }
?>