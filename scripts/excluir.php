<?php 

// esse script vai fazer a exclusão da linha de dados cadastrados

include_once("../config.php");

$id = $_POST['tombo'];

$sql = "DELETE FROM maquinas WHERE id = '$id'";

if ($conexao->query($sql) === TRUE) {
    echo "Dados excluídos com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

header("Location: ../pages/maquinas.php");

?>