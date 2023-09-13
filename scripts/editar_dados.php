<?php

if(!empty($_GET['id'])) {

    include_once 'config.php';

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM maquinas WHERE id = $id";

    $result = mysqli_query($conexao, $sqlSelect);

    if($result->num_rows > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $tombo = $row['tombo'];
            $maquina = $row['maquina'];
            $sistema = $row['sistema'];
            $slot = $row['memoria'];
            $slot = $row['slot'];
            $slot = $row['processador'];
            $armazenamento = $row['armazenamento'];
            $armazenamento = $row['capacidade'];
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

<body>
    <div class="container pe-5 pb-5 ps-5 bg-light rounded shadow-lg text-dark w-25" style="margin-top: 4em;">
    <h1 class="fs-4 w-100 text-center nav-color text-light p-4 rounded-0 rounded-bottom d-block">Editar Dados</h1>
        <form action="saveEdit.php" method="POST">
            <div class="mb-3">
                <label for="tombo" class="col-form-label fw-bold">Tombo:</label>
                <input type="number" class="form-control" id="tombo" name="tombo" value="<?php echo $tombo ?>" required>
            </div>
            <div class="mb-3">
                <label for="maquina" class="col-form-label fw-bold">Máquina:</label>
                <select class="form-select" id="maquina" name="maquina" value="<?php echo $maquina ?>" required>
                    <option value="" <?php if ($maquina === "") echo "selected"; ?> selected>Selecione</option>
                    <option value="Desktop" <?php if ($maquina === "Desktop") echo "selected"; ?>>Desktop</option>
                    <option value="Notebook" <?php if ($maquina === "Notebook") echo "selected"; ?>>Notebook</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="maquina" class="col-form-label fw-bold">Sistema Operacional:</label>
                <select class="form-select" id="sistema" name="sistema" required>
                    <option value="" <?php if ($sistema === "") echo "selected"; ?>>Selecione</option>
                    <option value="Windows" <?php if ($sistema === "Windows") echo "selected"; ?>>Windows</option>
                    <option value="Linux" <?php if ($sistema === "Linux") echo "selected"; ?>>Linux</option>
                    <option value="macOS" <?php if ($sistema === "macOS") echo "selected"; ?>>macOS</option>
                    <option value="Android" <?php if ($sistema === "Android") echo "selected"; ?>>Android</option>
                    <option value="Unix" <?php if ($sistema === "Unix") echo "selected"; ?>>Unix</option>
                </select>
                </select>
            </div>
            <div class="mb-3">
                <label for="maquina" class="col-form-label fw-bold">Slot:</label>
                <select class="form-select" id="slot" name="slot" value="<?php echo $slot ?>" required>
                    <option value="" <?php if ($sistema === "") echo "selected"; ?> selected>Selecione</option>
                    <option value="DDR1" <?php if ($slot === "DDR1") echo "selected"; ?>>DDR1</option>
                    <option value="DDR2" <?php if ($slot === "DDR2") echo "selected"; ?>>DDR2</option>
                    <option value="DDR3" <?php if ($slot === "DDR3") echo "selected"; ?>>DDR3</option>
                    <option value="DDR4" <?php if ($slot === "DDR4") echo "selected"; ?>>DDR4</option>
                    <option value="DDR5" <?php if ($slot === "DDR5") echo "selected"; ?>>DDR5</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="maquina" class="col-form-label fw-bold">Armazenamento:</label>
                <select class="form-select" id="armazenamento" name="armazenamento" value="<?php echo $armazenamento ?>"
                    required>
                    <option value="" <?php if ($armazenamento === "") echo "selected"; ?> selected>Selecione</option>
                    <option value="SSD" <?php if ($armazenamento === "SSD") echo "selected"; ?>>SSD</option>
                    <option value="HDD" <?php if ($armazenamento === "HDD") echo "selected"; ?>>HDD</option>
                </select>
            </div>
            <input type="hidden" name="id" value="<?php echo $id?>">
            <div class="modal-footer gap-2">
                <a href="../index.php?content=maquinas"><button type="button" class="btn btn-secondary close pe-5 ps-5"
                        data-dismiss="modal">Fechar</button></a>
                <input type="submit" value="Salvar" class="btn btn-primary btn-success text-light border-0 pe-5 ps-5"
                    id="update" name="update">
            </div>
        </form>
    </div>

    <!-- <form action="saveEdit.php" method="POST" style="background-color: #07213ade;" class="p-4 rounded text-center">
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
        </form> -->

</body>

</html>