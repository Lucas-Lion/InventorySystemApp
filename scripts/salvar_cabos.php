<?php

require_once("config.php"); 
// Verificando se a conexão foi bem-sucedida
if ($conexao->connect_error) {

    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);

} else {

// Recebendo os dados do formulário HTML via POST $_POST
$cabo         = $_POST['cabo'];
$quantidade   = $_POST['quantidade'];


// Consultando o SQL para inserir os dados na tabela do banco de dados
$sql = "INSERT INTO cabos(cabo , quantidade
) VALUES ('$cabo' , '$maquina')";

// Executando a consulta SQL
if ($conexao->query($sql) === TRUE) {

    header("Location: ../index.php?content=maquinas");

} else {

    echo "Erro ao inserir os dados: " . $conexao->error;

    }
}

?>