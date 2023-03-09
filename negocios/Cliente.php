<?php
    class Cliente {
        private $nome;
        private $cpf;
        private $localizacao;

        //Construtor da Classe Cliente
        public function __construct($nome, $cpf, $localizacao) {
            $this->$nome = $nome;
            $this->$cpf = $cpf;
            $this->$localizacao = $localizacao;
        }
        //Getters e Setters
        public function getNome() {
            return $this->nome;
        }
        public function getCpf() {
            return $this->cpf;
        }
        public function getLocalizacao() {
            return $this->localizacao;
        }  
        public function setLocalizacao($localizacao) {
            $this->localizacao = $localizacao;
        }  
    }
?>