const button = document.querySelector(".teste")
const modal = document.querySelector("dialog")
const buttonClose = document.querySelector(".close")

button.onclick = function () {
    modal.showModal()
}

buttonClose.onclick = function () {
    modal.close()
}

;
function salvar() {
// Selecionar elementos do DOM
const Modal = document.querySelector("dialog");
const btnSave = document.querySelector("#Save");
const maquinaInput = document.querySelector("#maquina");
const tomboInput = document.querySelector("#tombo");
const sistemaInput = document.querySelector("#sistema");
const slotInput = document.querySelector("#slot");
const armazenamentoInput = document.querySelector("#armazenamento");
const cardContainer = document.querySelector("#cardContainer");

// Evento de clique no botão "Salvar"
btnSave.onclick = function () {
    // Coletar os valores dos campos do formulário
    const maquina = maquinaInput.value;
    const tombo = tomboInput.value;
    const sistema = sistemaInput.value;
    const slot = slotInput.value;
    const armazenamento = armazenamentoInput.value;

    // Criar um novo elemento de card
    const cardDiv = document.createElement("div");
    cardDiv.className = "col-md-3 mb-3"; 
    cardDiv.innerHTML = `
            <div class="card">
                <div class="card-header button-color text-white text-center font-card">
                    ${maquina}
                </div>
                <div class="card-body">
                    <ul class="list-group font-list">
                        <li class="list-group-item d-flex justify-content-between">
                            <strong><span>Tombo:</span></strong>
                            <span>${tombo}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <strong><span>Sistema Operacional:</span></strong>
                            <span>${sistema}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <strong><span>Slot:</span></strong>
                            <span>${slot}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <strong><span>Armazenamento:</span></strong>
                            <span>${armazenamento}</span>
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
    `;
    const cardContainer = document.querySelector("#cardContainer");
    const row = document.createElement("div");
    row.className = "row"; // Envolve os cards em uma linha
    row.appendChild(cardDiv);
    cardContainer.appendChild(row);

    // Adicionar o novo elemento à página
    cardContainer.appendChild(cardDiv);

    // Fechar o modal
    Modal.close();
};

// Evento de clique no botão "Fechar"
buttonClose.onclick = function () {
    Modal.close();
};
};
