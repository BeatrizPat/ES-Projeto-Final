<?php
    namespace persistencia;
    use negocios\Endereco;
    use negocios\Entrega;
    
    class RestaurantePersist{

        private $arr_enderecos;
        private $arr_entregas;

        public function __construct(){
            //aqui deveria ser conectado ao BD, mas, para simplificar, implementaremos em RAM

            //cadastra bairros
            $this->arr_enderecos = array(
                new Endereco("Wanel Ville V"),
                new Endereco("Campolim"),
                new Endereco("Jardim Portal da Colina"),
                new Endereco("Centro"),
                new Endereco("Mangal"),
                new Endereco("Além-Ponte"),
                new Endereco("Jardim Moncayo"),
                new Endereco("Jardim Santa Rosália"),
                new Endereco("Cerrado"),
                new Endereco("Jardim Europa")
            );

            //cria para cada endereço cadastrado uma entrega
            $this->arr_entregas = array(
                new Entrega($this->arr_enderecos[0], 5, 50),
                new Entrega($this->arr_enderecos[1], 4, 30),
                new Entrega($this->arr_enderecos[2], 2, 15),
                new Entrega($this->arr_enderecos[3], 10, 70),
                new Entrega($this->arr_enderecos[4], 5, 40),
                new Entrega($this->arr_enderecos[5], 4, 35),
                new Entrega($this->arr_enderecos[6], 2, 20),
                new Entrega($this->arr_enderecos[7], 3, 30),
                new Entrega($this->arr_enderecos[8], 6, 60),
                new Entrega($this->arr_enderecos[9], 8, 65)
            );
        }

        //busca a Entrega respectiva pro endereco informado
        public function resgatarEntrega(Endereco $endereco){
            foreach($this->arr_entregas as $entrega)
                if($endereco->getBairro() == $entrega->getLocalizacao()->getBairro())
                    return $entrega;
        }

        public function bairrosDisponiveis(){
            return $this->arr_enderecos;
        }
    }

?>