<?php

require_once("config.php"); 
// Verificando se a conexão foi bem-sucedida
if ($conexao->connect_error) {

    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);

} else {

// Recebendo os dados do formulário HTML via POST $_POST
$tombo         = $_POST['tombo'];
$maquina       = $_POST['maquina'];
$sistema       = $_POST['sistema'];
$memoria       = $_POST['memoria'];
$slot          = $_POST['slot'];
$processador   = $_POST['processador']; 
$armazenamento = $_POST['armazenamento'];

// Consultando o SQL para inserir os dados na tabela do banco de dados
$sql = "INSERT INTO maquinas(tombo , maquina , sistema , memoria , slot , processador , armazenamento) VALUES ('$tombo' , '$maquina' , '$sistema' , '$memoria' , '$slot' , '$processador' , '$armazenamento')";

// Executando a consulta SQL
if ($conexao->query($sql) === TRUE) {

    header("Location: ../index.php?content=maquinas");

} else {

    echo "Erro ao inserir os dados: " . $conexao->error;

    }
}

?>