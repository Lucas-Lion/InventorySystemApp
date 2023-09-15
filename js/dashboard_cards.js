

let divCards = document.querySelector("#cards");

fetch("js/dashboard_cards.json").then((response) => {
  response.json().then((cards) => {
    cards.cards.map((card) => {
      if (card.title === "Máquinas Prontas") {
        // Faz a requisição para obter a contagem de máquinas
        fetch("scripts/contagem_maquinas.php").then((response) => {
          response.text().then((contagem) => {
            card.dado_result = contagem;
            // Atualiza o card com a contagem de máquinas
            divCards.innerHTML += `
              <div class="col-xl-3 col-md-6">
                <a class="link-dashboard" href="${card.link}">
                    <div class="card button-color text-white mb-4">
                      <div class="card-body fs-4 border-bottom border-light mb-2">${card.title} <i class="fs-2 ms-2 text-white ${card.icon}"></i></div>
                      <div class="card-footer d-flex justify-content-between mb-0">
                        <p class="small text-white fs-5"><strong>Total:</strong></p>
                        <div id="contagem_maquinas" class=" fs-1">
                          <p>${card.dado_result}</p>
                        </div>
                      </div>
                    </div>
                </a>
              </div>
            `;
          });
        });
      } else {
        // Faz a requisição para obter a contagem de máquinas
        fetch("scripts/contagem_maquinas.php").then((response) => {
          response.text().then((contagem) => {
            card.dado_result = contagem;
            // Atualiza o card com a contagem de máquinas
            divCards.innerHTML += `
              <div class="col-xl-3 col-md-6">
                <a class="link-dashboard" href="${card.link}">
                    <div class="card button-color text-white mb-4">
                      <div class="card-body fs-4 border-bottom border-light mb-2">${card.title} <i class="fs-2 ms-2 text-white ${card.icon}"></i></div>
                      <div class="card-footer d-flex justify-content-between mb-0">
                        <p class="small text-white fs-5"><strong>Total:</strong></p>
                        <div id="contagem_maquinas" class=" fs-1">
                          <p>${card.dado_result}</p>
                        </div>
                      </div>
                    </div>
                </a>
              </div>
            `;
          });
        });
      }
    });
  });
});

function atualizarContagemMaquinas() {
    $.ajax({
        url: 'contagem_maquinas.php', // Caminho para o script PHP de contagem
        method: 'POST',
        success: function (data) {
            $('#contagem_maquinas').text(data); // Atualiza a contagem no card
        },
        error: function () {
            console.error('Erro ao obter a contagem de máquinas.');
        }
    });
}

// Atualiza a contagem de máquinas inicialmente e a cada x segundos (por exemplo, a cada 10 segundos)
atualizarContagemMaquinas();
setInterval(atualizarContagemMaquinas, 10000);

