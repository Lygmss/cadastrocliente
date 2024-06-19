<?php
    // verifica se um cliente foi selecionado para edição 
    if(isset($_GET["id"])){
        $cliente_id = $_GET["id"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $db_name = "bd_cadastro";

        $conn = new mysqli($servername,$username,$password,$db_name);

        if ($conn->connect_error) {
            die("Error na conexao com o banco de dados:") . $conn->connect_error;
        }

        $sql = "DELETE FROM cliente WHERE ID = $cliente_id";

        // Header = redireciona para a pagina cliente.php
        if ($conn->query($sql) === TRUE) {
            header("Location: cliente.php?excluido=true");
            exit;
        }else {
            echo "Erro ao Excluir o cliente" . $conn->connect_error;
        }

        $conn->close();

        }else {
            echo "Cliente não espeficado para exclusão";
        }

?>