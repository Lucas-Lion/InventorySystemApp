<?php
if (!empty($_GET['id']) && isset($_GET['confirm']) && $_GET['confirm'] === 'true') {

    include_once("config.php");

    $id = $_GET['id'];

    $sqlDelete = "DELETE FROM maquinas WHERE id = $id";

    $result = mysqli_query($conexao, $sqlDelete);

    header("Location: ../index.php?content=maquinas");

} else {
    
    header("Location: ../index.php?content=maquinas");
    
}
?>
