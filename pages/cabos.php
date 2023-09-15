<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="text-center mt-4">
        <i class="bi bi-usb-plug-fill fs-1"></i>
        <h1 class="mb-3">Cabos</h1>
        <hr class="w-50 text-dark m-auto mt-2">
    </div>

    <button type="button" class="btn button-color text-light bg-gradient mt-5 fw-bold" data-bs-toggle="modal"
        data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class="bi bi-plus"></i>
        Cadastrar
    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-light border-0 shadow-lg">
                <div
                    class="modal-header nav-color bg-gradient text-white w-50 m-auto border-0 d-flex justify-content-center rounded-0 rounded-bottom">
                    <h5 class="modal-title fw-bold" id="ModalLabel">Cadastrar</h5>
                </div>
                <div class="modal-body">
                    <form action="scripts/salvar_cabos.php" method="POST">
                        <div class="mb-3">
                            <label for="cabo" class="col-form-label fw-bold">Tipo:</label>
                            <select class="form-select" aria-label="Default select example" id="cabo" name="cabo"
                                required>
                                <option selected>Selecione</option>
                                <option value="VGA">VGA</option>
                                <option value="HDMI">HDMI</option>
                                <option value="DisplayPort">DisplayPort</option>
                                <option value="Força">Força</option>
                                <option value="Rede">Rede</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="quantidade" class="col-form-label fw-bold">Quantidade:</label>
                            <input type="number" name="quantidade" id="quantidade">
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

    <div class="bg-dashboard bg-gradient pe-2 ps-2 rounded shadow-lg">
        <ol class="breadcrumb mb-4 pt-2 dash-space">
            <li class="breadcrumb-item text-light active fs-4 ms-3">Quantidade de cabos:</li>
        </ol>
        <div class="row ms-2 me-2" id="cards_cabos">


        </div>
    </div>

</main>

<script src="js/data_cabos.js"></script>