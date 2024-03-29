<?php
    namespace negocios;
    use negocios\Endereco;
    use persistencia\EnderecoPersist;
    require_once __DIR__.'/../persistencia/EnderecoPersist.php';
    require_once __DIR__.'/Endereco.php';

    class Cliente {
        private $nome;
        private $cpf;
        private Endereco $localizacao;

        //Construtor da Classe Cliente
        public function __construct($nome, $cpf, $id) {
            $this->$nome = $nome;
            $this->$cpf = $cpf;
            $endereco = EnderecoPersist::getInstance(); 
            $temp = $endereco->resgatarEndereco($id);
            $this->localizacao = new Endereco($temp["bairro"], $temp["rua"], $temp["numero"], $temp["cep"], $temp["complemento"], $temp["ponto_referencia"]);
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