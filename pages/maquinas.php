<?php
session_start();
include_once("scripts/config.php");

$sql = "SELECT * FROM maquinas ORDER BY id ASC";
$result = $conexao->query($sql);
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="text-center mt-4">
        <i class="bi bi-pc-display fs-1"></i>
        <h1 class="mb-3">Máquinas Prontas</h1>
        <hr class="w-50 text-dark m-auto mb-5 mt-2">
    </div>

    <button type="button" class="btn button-color text-light bg-gradient mb-5" data-bs-toggle="modal"
        data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class="bi bi-plus"></i>
        Cadastrar</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content bg-light border-0 shadow-lg">
                <div
                    class="modal-header nav-color bg-gradient text-white w-50 m-auto border-0 d-flex justify-content-center rounded-0 rounded-bottom">
                    <h5 class="modal-title fw-bold" id="ModalLabel">Cadastrar Máquina</h5>
                </div>
                <div class="modal-body">
                    <form action="scripts/salvar.php" method="POST">
                        <div class="mb-3">
                            <label for="tombo" class="col-form-label fw-bold">Tombo:</label>
                            <input type="number" class="form-control" id="tombo" name="tombo" required>
                        </div>
                        <div class="mb-3">
                            <label for="maquina" class="col-form-label fw-bold">Máquina:</label>
                            <select class="form-select" aria-label="Default select example" id="maquina" name="maquina"
                                required>
                                <option selected>Selecione</option>
                                <option value="Desktop">Desktop</option>
                                <option value="Notebook">Notebook</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="maquina" class="col-form-label fw-bold">Sistema Operacional:</label>
                            <select class="form-select" aria-label="Default select example" id="sistema" name="sistema"
                                required>
                                <option selected>Selecione</option>
                                <option value="Windows">Windows</option>
                                <option value="Linux">Linux</option>
                                <option value="macOS">macOS</option>
                                <option value="Android">Android</option>
                                <option value="Unix">Unix</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="memoria" class="col-form-label fw-bold">Memória Capacidade:</label>
                            <select class="form-select" aria-label="Default select example" id="memoria" name="memoria"
                                required>
                                <option selected>Selecione</option>
                                <option value="2">2</option>
                                <option value="4">4</option>
                                <option value="8">8</option>
                                <option value="16">16</option>
                                <option value="32">32</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="maquina" class="col-form-label fw-bold">Slot:</label>
                            <select class="form-select" aria-label="Default select example" id="slot" name="slot"
                                required>
                                <option selected>Selecione</option>
                                <option value="DDR1">DDR1</option>
                                <option value="DDR2">DDR2</option>
                                <option value="DDR3">DDR3</option>
                                <option value="DDR4">DDR4</option>
                                <option value="DDR5">DDR5</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="maquina" class="col-form-label fw-bold">Armazenamento:</label>
                            <select class="form-select" aria-label="Default select example" id="armazenamento"
                                name="armazenamento" required>
                                <option selected>Selecione</option>
                                <option value="SSD">SSD</option>
                                <option value="HDD">HDD</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <input type="submit" value="Cadastrar"
                                class="btn btn-primary btn-success text-light border-0" id="Save">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <table class="table table-striped text-center shadow-lg">
        <thead class="text-light thead-color">
            <tr>
                <th scope="col" style="background-color: #082C4D; color: whitesmoke;">ID</th>
                <th scope="col" style="background-color: #082C4D; color: whitesmoke;">Máquina</th>
                <th scope="col" style="background-color: #082C4D; color: whitesmoke;">Tombo</th>
                <th scope="col" style="background-color: #082C4D; color: whitesmoke;">Sistema Operacional</th>
                <th scope="col" style="background-color: #082C4D; color: whitesmoke;">Memória</th>
                <th scope="col" style="background-color: #082C4D; color: whitesmoke;">Slot da memória</th>
                <th scope="col" style="background-color: #082C4D; color: whitesmoke;">Processador</th>
                <th scope="col" style="background-color: #082C4D; color: whitesmoke;">Armazenamento</th>
                <th scope="col" style="background-color: #082C4D; color: whitesmoke;">Capacidade de armazenamento</th>
                <th scope="col" style="background-color: #082C4D; color: whitesmoke;">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php 
    while($rows = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$rows['id']."</td>";
        echo "<td>".$rows['maquina']."</td>";
        echo "<td>".$rows['tombo']."</td>";
        echo "<td>".$rows['sistema']."</td>";
        echo "<td>".$rows['memoria']."GB</td>";
        echo "<td>".$rows['slot']."</td>";
        echo "<td>".$rows['processador']."</td>";
        echo "<td>".$rows['armazenamento']."</td>";
        echo "<td>".$rows['capacidade']."GB</td>";
        echo "<td>
                <a href='scripts/editar_dados.php?id=".$rows['id']."'><i class='bi bi-pencil-square me-4'></i></a>
                
                <a href='scripts/delete.php?id=".$rows['id']."'><i class='bi bi-trash3-fill link-danger'></i></a></td>";
    }
    ?>
        </tbody>
        
    </table>
</main>