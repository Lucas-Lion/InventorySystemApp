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
        <form id="machineForm">
            <div class="form-group mb-4 font-card">
                <label for="maquina" class="text-dark mb-2">Máquina:</label>
                <input type="text" class="form-control w-100" id="maquina" name="maquina">
            </div>
            <div class="form-group mb-4 font-card">
                <label for="tombo" class="text-dark mb-2">Tombo:</label>
                <input type="number" class="form-control w-100" id="tombo" name="tombo">
            </div>
            <div class="form-group mb-4 font-card">
                <label for="sistema" class="text-dark mb-2">Sistema Operacional:</label>
                <input type="text w-50" class="form-control w-100" id="sistema" name="sistema">
            </div>
            <div class="form-group mb-4 font-card">
                <label for="sistema" class="text-dark mb-2">Slot:</label>
                <input type="text" class="form-control w-100" id="slot" name="slot">
            </div>
            <div class="form-group mb-4 font-card">
                <label for="sistema" class="text-dark mb-2">Armazenamento:</label>
                <input type="text" class="form-control w-100" id="armazenamento" name="armazenamento">
            </div>
        </form>
        <div class="modal-footer d-flex flex-row ms-5 gap-2">
            <button type="button" class="btn button-color text-light" id="btnSave" onclick="salvar()">
                <i class="bi bi-check2"></i> Salvar</button>
            <button type="button" class="btn btn-danger close" data-dismiss="modal">
                <i class="bi bi-x-lg"></i> Fechar</button>
        </div>
    </dialog>

    
    <div id="cardContainer">

    </div>
      

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