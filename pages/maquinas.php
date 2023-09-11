<?php
session_start();
include_once("scripts/config.php");

$sql = "SELECT * FROM maquinas ORDER BY tombo DESC";
$result = $conexao->query($sql);
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="text-center mt-4">
        <i class="bi bi-pc-display fs-1"></i>
        <h1 class="mb-3">Máquinas Prontas</h1>
        <hr class="w-50 text-dark m-auto mb-5 mt-2">
    </div>

    <button type="button" class="btn button-color text-light mb-4 teste" role="button" aria-pressed="true"
        id="btnOpenPopup" onclick="openPopup()">
        <i class="bi bi-plus"></i> Cadastrar
    </button>

    <dialog>
        <form action="scripts/salvar.php" method="POST">
            <div class="form-group mb-4 font-card text-center">
                <label for="tombo" class="text-dark mb-2">Tombo:</label>
                <input type="number" class="form-control w-100" id="tombo" name="tombo" required>
            </div>
            <div class="form-group mb-4 font-card">
                <label for="maquina" class="text-dark mb-2">Máquina:</label>
                <select name="maquina" id="maquina">
                    <option value="" selected>Escolha o tipo:</option>
                    <option value="desktop">Desktop</option>
                    <option value="notebook">Notebook</option>
                </select>
            </div>
            <div class="form-group mb-4 font-card">
                <label for="sistema" class="text-dark mb-2">Sistema Operacional:</label>
                <select name="sistema" id="sistema">
                    <option value="" selected>Escolha o tipo:</option>
                    <option value="win">Windows</option>
                    <option value="lin">Linux</option>
                </select>
            </div>
            <div class="form-group mb-4 font-card">
                <label for="slot" class="text-dark mb-2">Slot:</label>
                <select name="slot" id="slot">
                    <option value="" selected>Escolha o tipo:</option>
                    <option value="d1">DDR1</option>
                    <option value="d2">DDR2</option>
                    <option value="d3">DDR3</option>
                    <option value="d4">DDR4</option>
                    <option value="d5">DDR5</option>
                </select>
            </div>
            <div class="form-group mb-4 font-card">
                <label for="armazenamento" class="text-dark mb-2">Armazenamento:</label>
                <select name="armazenamento" id="armazenamento">
                    <option value="" selected>Escolha o tipo:</option>
                    <option value="desktop">SSD</option>
                    <option value="notebook">HDD</option>
                </select>
            </div>

            <div class="text-left">
                <input type="submit" value="Cadastrar" class="btn btn-primary button-color text-light border-0"
                    id="Save">
                <button type="button" class="btn btn-danger close" data-dismiss="modal">Fechar</button>
            </div>
        </form>
    </dialog>


    <table class="table text-center">
  <thead class="text-light thead-color">
    <tr>
        <th scope="col" style="background-color: #082C4D; color: whitesmoke;">Máquina</th>
        <th scope="col" style="background-color: #082C4D; color: whitesmoke;">Tombo</th>
        <th scope="col" style="background-color: #082C4D; color: whitesmoke;">Sistema Operacional</th>
        <th scope="col" style="background-color: #082C4D; color: whitesmoke;">Slot</th>
        <th scope="col" style="background-color: #082C4D; color: whitesmoke;">Armazenamento</th>
        <th scope="col" style="background-color: #082C4D; color: whitesmoke;">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    while($rows = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$rows['maquina']."</td>";
        echo "<td>".$rows['tombo']."</td>";
        echo "<td>".$rows['sistema']."</td>";
        echo "<td>".$rows['slot']."</td>";
        echo "<td>".$rows['armazenamento']."</td>";
        echo "<td>
                <a href='scripts/editar.php?id=".$rows['id']."'><i class='bi bi-pencil-square me-4'></i></a> <a href='scripts/excluir.php?id=".$rows['id']."'><i class='bi bi-trash3-fill link-danger'></i></a></td>";
    }

    ?>
  </tbody>
</table>


    <!--
       <div class="row">
        <div class="col-md-3 mb-3"> 
    <div class="card">
                <div class="card-header button-color text-white text-center font-card">
                    NOTEBOOK
                </div>
                <div class="card-body">
                    <ul class="list-group font-list">
                        <li class="list-group-item d-flex justify-content-between">
                            <strong><span>Tombo:</span></strong>
                            <span>12032</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <strong><span>Sistema Operacional:</span></strong>
                            <span>Linux</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <strong><span>Slot:</span></strong>
                            <span>DDR3</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <strong><span>Armazenamento:</span></strong>
                            <span>SSD</span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="btn-group d-flex flex-row justify-content-between gap-1" role="group">
                        <button type="button" class="btn text-light button-color">
                            <i class="bi bi-pencil-square"></i> Editar
                        </button>
                        <button type="button" class="btn btn-danger">
                            <i class="bi bi-trash3-fill"></i> Excluir
                        </button>
                    </div>
                </div>
            </div>
            </div>
    </div> -->


</main>