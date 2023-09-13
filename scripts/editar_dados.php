<?php

if(!empty($_GET['id'])) {

    include_once 'config.php';

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM maquinas WHERE id = $id";

    $result = mysqli_query($conexao, $sqlSelect);

    if($result->num_rows > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $tombo = $row['tombo'];
            $maquina = $row['maquina'];
            $sistema = $row['sistema'];
            $slot = $row['slot'];
            $armazenamento = $row['armazenamento'];
        }
    }
    else {
        header('Location: pages/maquinas.php');
    }
    } else {
        header('Location: ../index.php?content=maquinas');
    }
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <title>Editar</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="d-flex align-items-center">
    <div class="container d-flex justify-content-center mt-5 pt-5">
        <form action="saveEdit.php" method="POST" style="background-color: #07213ade;" class="p-4 rounded text-center">
            <div class="form-group mb-4 font-card">
                <label for="tombo" class="text-light mb-2">Tombo</label>
                <input type="number" class="form-control w-100" id="tombo" name="tombo" value="<?php echo $tombo ?>"
                    required>
            </div>
            <div class="form-group mb-4 font-card">
                <label for="maquina" class="text-light mb-2">Máquina</label>
                <input type="text" class="form-control w-100" id="maquina" name="maquina" value="<?php echo $maquina ?>" required>
            </div>
            <div class="form-group mb-4 font-card">
                <label for="sistema" class="text-light mb-2">Sistema Operacional</label>
                <input type="text" class="form-control w-100" id="sistema" name="sistema" value="<?php echo $sistema ?>" required>
            </div>
            <div class="form-group mb-4 font-card">
                <label for="slot" class="text-light mb-2">Slot</label>
                <input type="text" class="form-control w-100" id="slot" name="slot" value="<?php echo $slot ?>"
                    required>
            </div>
            <div class="form-group mb-4 font-card">
                <label for="armazenamento" class="text-light mb-2">Armazenamento</label>
                <input type="text" class="form-control w-100" id="armazenamento" name="armazenamento" value="<?php echo $armazenamento ?>"
                    required>
            </div>
            <input type="hidden" name="id" value="<?php echo $id?>">
            <div class="d-flex flex-row justify-content-center gap-5">
                <input type="submit" value="Editar" class="btn btn-primary button-color text-light border-0 pe-5 ps-5" id="update" name="update">
                <a href="../index.php?content=maquinas"><button type="button" class="btn btn-danger close pe-5 ps-5" data-dismiss="modal">Fechar</button></a>
            </div>
        </form>
    </div>
</body>

</html>