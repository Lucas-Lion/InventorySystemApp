<?php
require_once("config.php"); 
// Verifica se a conexão foi bem-sucedida
if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
} else {

// Recebe os dados do formulário HTML via POST
$maquina = $_POST['maquina'];
$tombo = $_POST['tombo'];
$sistema = $_POST['sistema'];
$slot = $_POST['slot'];
$armazenamento = $_POST['armazenamento'];

// Consulta SQL para inserir os dados na tabela do banco de dados
$sql = "INSERT INTO maquinas (maquina, tombo, sistema, slot, armazenamento) VALUES ('$maquina' ,'$tombo', '$sistema', '$slot', '$armazenamento')";

// Execute a consulta SQL
if ($conexao->query($sql) === TRUE) {
    header("Location: ../index.php?content=maquinas");
} else {
    echo "Erro ao inserir os dados: " . $conexao->error;
}
}
?>