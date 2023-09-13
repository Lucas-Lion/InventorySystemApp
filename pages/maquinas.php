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
        <form action="scripts/salvar.php" method="POST" class="text-center">
            <div class="form-group mb-4 font-card text-center">
                <label for="tombo" class="text-dark mb-2">Tombo</label>
                <input type="number" class="form-control w-100" id="tombo" name="tombo" required>
            </div>
            <div class="form-group mb-4 font-card">
                <label for="maquina" class="text-dark mb-2">Máquina</label>
                <input type="text" class="form-control w-100" id="maquina" name="maquina" required>
            </div>
            <div class="form-group mb-4 font-card">
                <label for="sistema" class="text-dark mb-2">Sistema Operacional</label>
                <input type="text" class="form-control w-100" id="sistema" name="sistema" required>
            </div>
            <div class="form-group mb-4 font-card">
                <label for="slot" class="text-dark mb-2">Slot</label>
                <input type="text" class="form-control w-100" id="slot" name="slot" required>
            </div>
            <div class="form-group mb-4 font-card">
                <label for="armazenamento" class="text-dark mb-2">Armazenamento</label>
                <input type="text" class="form-control w-100" id="armazenamento" name="armazenamento" required>
            </div>

            <div class="text-left">
                <input type="submit" value="Cadastrar" class="btn btn-primary button-color text-light border-0"
                    id="Save">
                <button type="button" class="btn btn-danger close" data-dismiss="modal">Fechar</button>
            </div>
        </form>
    </dialog>


    <table class="table table-striped text-center">
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
                <a href='scripts/editar_dados.php?id=".$rows['id']."'><i class='bi bi-pencil-square me-4'></i></a> <a href='scripts/excluir.php?id=".$rows['id']."'><i class='bi bi-trash3-fill link-danger'></i></a></td>";
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