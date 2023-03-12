<?php
    namespace IU;

    //cria dados ficticios no BD
    $conexao = connectBDCliente();
    cria_tabela($conexao);
    insertTableCliente($conexao, "Rua dos Mascates", 385, "Mangal", 585858000, "", "", 0);
    insertTableCliente($conexao, "Rua Perdigao", 454, "Campolim", 585858000, "", "", 1);
    insertTableCliente($conexao, "Rua Feroz de Vasconcelos", 397, "Centro", 585858000, "", "", 1);
    insertTableCliente($conexao, "Rua Sao Paulo", 325, "Jardim Europa", 585858000, "", "", 0);
    insertTableCliente($conexao, "Rua Legal", 358, "Mangal", 585858000, "", "", 1);
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

    function connectBDRestaurante() {
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

    function cria_tabela($conn){
        $sql ="CREATE TABLE IF NOT EXISTS localizacaoCliente(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            rua VARCHAR(50) NOT NULL,
            numero INT(5) UNSIGNED NOT NULL,
            bairro VARCHAR(50) NOT NULL,
            cep INT(8) UNSIGNED NOT NULL,
            complemento VARCHAR(50),
            ponto_referencia VARCHAR(500),
            entregar_rapido TINYINT(1) NOT NULL
        )";
      mysqli_query($conn, $sql);
    }
      
    function insertTableCliente($conn, $rua, $numero, $bairro, $cep, $complemento, $pontoDeReferencia, $entregaRapida){
      $sql = "INSERT INTO localizacaoCliente (rua, numero, bairro, cep, complemento, ponto_referencia, entregar_rapido) VALUES ('" . $rua . "','" . $numero . "','" . $bairro . "','" . $cep . "','" . $complemento . "','". $pontoDeReferencia . "','" . $entregaRapida . "')";
      mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }


?>

<html>
    <title>Tela de Pagamento</title>
    <body> 
      
    </body>
</html>