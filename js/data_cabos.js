let divCards = document.querySelector("#cards_cabos")

    fetch("js/data_cabos.json").then((response) => {
        response.json().then((cards) => {
          cards.cards.map((card) => {
            divCards.innerHTML +=
                    `          
                    <div class="col-xl-3 col-md-6">
                        <div class="card button-color text-white mb-4">
                          <div class="card-body fs-4 border-bottom border-light mb-2">${card.title} <i class="fs-2 ms-2 text-white ${card.icon}"></i></div>
                          <div class="card-footer d-flex justify-content-between mb-0">
                            <p class="small text-white fs-5"><strong>Total:</strong></p>
                            <div id="contagem_maquinas" class=" fs-1">
                              <p>${card.dado_result}</p>
                            </div>
                          </div>
                        </div>
                  </div>          
                    `
            })
        })
    })