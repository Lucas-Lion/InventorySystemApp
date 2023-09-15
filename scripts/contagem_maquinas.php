<?php
// Conexão com o banco de dados (substitua pelos seus próprios detalhes de conexão)
$servername = "localhost";
$username = "lucas_lion";
$password = "Cilnopenack123";
$dbname = "sistema_de_inventario";

// Conecta-se ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Consulta para obter a contagem de máquinas
$sql = "SELECT COUNT(*) AS total_maquinas FROM maquinas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Retorna a contagem de máquinas
    $row = $result->fetch_assoc();
    echo $row["total_maquinas"];
} else {
    echo "0";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
