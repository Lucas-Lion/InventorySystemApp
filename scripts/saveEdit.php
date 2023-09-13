<?php 

    include_once("config.php");

    if(isset($_POST['update'])) {

        $id = mysqli_real_escape_string($conexao, $_POST['id']);
        $tombo = mysqli_real_escape_string($conexao, $_POST['tombo']);
        $maquina = mysqli_real_escape_string($conexao, $_POST['maquina']);
        $sistema = mysqli_real_escape_string($conexao, $_POST['sistema']);
        $slot = mysqli_real_escape_string($conexao, $_POST['slot']);
        $armazenamento = mysqli_real_escape_string($conexao, $_POST['armazenamento']);

        $sqlUpdate = "UPDATE maquinas SET tombo = '$tombo', maquina = '$maquina', sistema = '$sistema', slot = '$slot', armazenamento = '$armazenamento' WHERE id = '$id'";

        $result = $conexao->query($sqlUpdate);
    }

    header("Location: ../index.php?content=maquinas");

?>