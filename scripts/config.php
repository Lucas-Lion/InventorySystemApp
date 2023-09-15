<?php 
// Configurações do banco de dados
$dbHost = "localhost";
$dbUsername = "lucas_lion";
$dbPassword = "Cilnopenack123";
$dbName = "sistema_de_inventario";

// Conexão do banco de dados
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Verifica se a conexão foi realizada com sucesso
// if($conexao->connect_error) {
//     echo "Erro de conexão com o banco de dados!";
// }
// else {
//     echo "Conexão realizada com sucesso!";
// }



?>