<?php
    namespace IU;

    //cria dados ficticios no BD
    $conexao = connectBDCliente();
    insertTableCliente($conexao, "Rua dos Mascates", "385", "Mangal", "585858000", "", "", false);
    insertTableCliente($conexao, "Rua Perdigao", "454", "Campolim", "585858000", "", "", true);
    insertTableCliente($conexao, "Rua Feroz de Vasconcelos", "397", "Centro", "585858000", "", "", true);
    insertTableCliente($conexao, "Rua Sao Paulo", "325", "Jardim Europa", "585858000", "", "", false);
    insertTableCliente($conexao, "Rua Legal", "358", "Mangal", "585858000", "", "", true);
    fechaBD($conexao);
      
    function connectBDCliente() {
        $servername = "localhost";
        $username = "root";
        $dbname = "localizacaoCliente";
        $psswd = "";
      
        $conn = mysqli_connect($servername, $username, $psswd, $dbname);
      
        if (!$conn)
            $conn = null;
      
        return $conn;
    }

    function connectBDRestaurante() {
        $servername = "localhost";
        $username = "root";
        $dbname = "bairrosEntregaveis";
        $psswd = "";
      
        $conn = mysqli_connect($servername, $username, $psswd, $dbname);
      
        if (!$conn)
            $conn = null;
      
        return $conn;
    }
      
    function fechaBD($conn) {
       mysqli_close($conn);
    }
      
    function insertTableCliente($conn, $rua, $numero, $bairro, $cep, $complemento, $pontoDeReferencia, $entregaRapida){
      $sql = "INSERT INTO localizacaoCliente (rua, numero, bairro, cep, complemento, pontoDeReferencia, entregaRapida) VALUES ('" . $rua . "','" . $numero . "','" . $bairro . "','" . $cep . "','" . $complemento . "','". $pontoDeReferencia . "','" . $entregaRapida . "')";
      mysqli_query($conn, $sql);
    }


?>

<html>
    <title>Tela de Pagamento</title>
    <body> 
      
    </body>
</html>