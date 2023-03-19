<?php
    namespace persistencia;

    //cria dados ficticios no BD
    $conexao = connectBDCliente();
    cria_tabela_cliente($conexao);
    insertTableCliente($conexao, 1, "Rua dos Mascates", 385, "Mangal", 585858000, "", "");
    insertTableCliente($conexao, 2, "Rua Perdigao", 454, "Campolim", 585858000, "", "");
    insertTableCliente($conexao, 3, "Rua Feroz de Vasconcelos", 397, "Centro", 585858000, "", "");
    insertTableCliente($conexao, 4, "Rua Sao Paulo", 325, "Jardim Europa", 585858000, "", "");
    insertTableCliente($conexao, 5, "Rua Legal", 358, "Mangal", 585858000, "", "");
    fechaBD($conexao);
      
    function connectBDCliente() {
        $servername = "localhost";
        $username = "root";
        $dbname = "myBD";
        $psswd = "";
      
        $conn = mysqli_connect($servername, $username, $psswd, $dbname);
      
        if (!$conn)
            $conn = null;
      
        return $conn;
    }
      
    function fechaBD($conn) {
       mysqli_close($conn);
    }

    function cria_tabela_cliente($conn){
        $sql ="CREATE TABLE IF NOT EXISTS localizacaoCliente(
            id_localizacao INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            id_cliente INT(2) UNSIGNED NOT NULL,
            rua VARCHAR(50) NOT NULL,
            numero INT(5) UNSIGNED NOT NULL,
            bairro VARCHAR(50) NOT NULL,
            cep INT(8) UNSIGNED NOT NULL,
            complemento VARCHAR(50),
            ponto_referencia VARCHAR(500)
        )";
      mysqli_query($conn, $sql);
    }
      
    function insertTableCliente($conn, $id_cliente, $rua, $numero, $bairro, $cep, $complemento, $pontoDeReferencia){
      $sql = "INSERT INTO localizacaoCliente (id_cliente, rua, numero, bairro, cep, complemento, ponto_referencia) VALUES ('" . $id_cliente . "','" . $rua . "','" . $numero . "','" . $bairro . "','" . $cep . "','" . $complemento . "','". $pontoDeReferencia  . "')";
      mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }

    class EnderecoPersist{
        private static EnderecoPersist $singleton;

        private function __construct(){

        }

        public static function getInstance(){
            if(self::$singleton == null){
                self::$singleton = new EnderecoPersist();
            }
            return self::$singleton;
        }

        public function resgatarEndereco($idCliente){
            $conn = connectBDCliente();
            $sql = "SELECT * FROM localizacaoCliente WHERE id_cliente = $idCliente";
            $endereco = $conn->query($sql);
            $row = $endereco->fetch_assoc();
            fechaBD($conn);
            return $row;
        }
    }
?>