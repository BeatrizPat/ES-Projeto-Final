<?php
    namespace persistencia;

    class EnderecoPersist{
        public function connectBDCliente() {
            $servername = "localhost";
            $username = "root";
            $dbname = "myBD";
            $psswd = "";
          
            $conn = mysqli_connect($servername, $username, $psswd, $dbname);
          
            if (!$conn)
                $conn = null;
          
            return $conn;
        }

        public function resgatarEndereco($idCliente){
            $conn = $this->connectBDCliente();
            $sql = "SELECT * FROM localizacaoCliente WHERE id_cliente = $idCliente";
            $endereco = $conn->query($sql);
            $row = $endereco->fetch_assoc();
            return $row;
        }
    }
?>