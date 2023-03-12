<?php
    namespace negocios;
    class Endereco{
        //declaracao de variáveis
        private $rua;
        private $numero;
        private $cep;
        private $bairro;
        private $complemento;
        private $pontoReferencia;

        //o '=null' é usado como sobrecarga do metodo construtor, pois para uma entrega nao importa qual rua que voce esta, mas sim somente seu bairro
        public function __construct($bairro, $rua=null, $numero=null, $cep=null, $complemento=null, $pontoReferencia=null){
            if($rua !== null)
                $this->rua =  $rua;
            if($numero !== null)
                $this->numero =  $numero;
            if($cep !== null)
                $this->cep =  $cep;

            $this->bairro =  $bairro;

            if($complemento !== null)
                $this->complemento =  $complemento;
            if($pontoReferencia !== null)
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