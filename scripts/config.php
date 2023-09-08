<?php 

$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "Cilnopenack123";
$dbName = "sistema_de_inventario";

// Create database connection
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
// if ($conexao->connect_error) {
//     die("Connection failed: " . $conexao->connect_error);
// }

if($conexao->connect_error) {
    echo "Erro de conexão com o banco de dados!";
}
else {
    echo "Conexão realizada com sucesso!";
}

?>