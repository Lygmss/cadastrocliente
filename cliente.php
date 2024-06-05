<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>
<body>
    <h1>Lista De Clientes</h1> 
    <?php
    // conexao com banco de dados 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bd_cadastro";

        $conn = new mysqli($servername,$username,$password,$db_name);

        if ($conn->connect_error) {
            die("Erro na conexao com o banco de dados:" . $conn->connect_error);
        }

        // verificar se um cliente foi excluido 
        if (isset($_GET["excluido"]) && $_GET["excluido"] == "true") {
            echo "<p>Cliente excluido com sucesso</p>";
        }
        
        // SQL para selecionar todos os clientes

        $sql = "SELECT * FROM cliente";
        $result = $conn->query($sql);
    
    
    
    
    ?>   

</body>
</html>