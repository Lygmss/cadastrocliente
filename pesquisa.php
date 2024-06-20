<?php
 // conexao com banco de dados 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db_name = "bd_cadastro";

 $conn = new mysqli($servername,$username,$password,$db_name);

 if ($conn->connect_error){
    die("Erro na conexao com o banco de dados:". $conn->connect_error); 
 }

 $termo= $_GET ["termo"];

 $sql = "SELECT * FROM cliente WHERE nome LIKE '%$termo%' OR email LIKE '%$termo%' OR telefone LIKE '%$termo%' OR descricao LIKE '%$termo%'";

 $result = $conn->query($sql);

 if ($result->num_rows > 0 ){
    echo "<h2>Resultados da Pesquisa</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Nome</th><th>Email</th><th>Telefone</th><th>Descrição</th></tr>";
    while($row= $result->fetch_assoc()){
        echo "<tr><td>".$row["nome"]."<tr><td>".$row["email"]."<tr><td>".$row["telefone"]."<tr><td>".$row["descricao"]."</td></tr>";
    }
    echo "</table>";
 } else{
    echo "Nenhum resultado encontrado.";
 }

 $conn->close();

?>
<br><a href="/Cadastro/index.php">Voltar</a>