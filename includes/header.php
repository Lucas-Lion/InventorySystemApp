<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/brasao-da-bahia-5.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <!-- ESTILOS PRÓPRIOS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema de Inventário</title>
</head>

<body>

    <!-- Menu Lateral -->
    
        <a class="text-white text-decoration-none d-flex justify-content-center mt-3 mb-3" role="button"
            href="http://www.sudesb.ba.gov.br/" target="_blank">
            <img src="images/SUDESB-BRANCO.png" width="150" alt="logomarca da SUDESB">
        </a>

        <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">
            <!-- Home -->
            <li class="nav-item mb-3 hover-option pt-2 pb-2">
                <a href="?content=home" class="nav-link text-white" aria-current="page">
                    <i class="bi bi-house-fill text-white"></i>
                    <span class="ms-2">Home</span>
                </a>
            </li>
            <!-- Máquinas -->
            <li class="nav-item mb-3 hover-option pt-2 pb-2">
                <a href="?content=maquinas" class="nav-link text-white" aria-current="page">
                    <i class="bi bi-pc-display"></i>
                    <span class="ms-2">Máquinas Prontas</span>
                </a>
            </li>
            <!-- Roteadores -->
            <li class="nav-item mb-3 hover-option pt-2 pb-2">
                <a href="?content=redes" class="nav-link text-white" aria-current="page">
                    <i class="bi bi-router-fill"></i>
                    <span class="ms-2">Dispositivos de Rede</span>
                </a>
            </li>
            <!-- Hardwares -->
            <li class="nav-item mb-3 pt-2 pb-2">
                <a href="#hardware" data-bs-toggle="collapse" class="nav-link text-white" aria-current="page">
                    <i class="bi bi-motherboard-fill"></i>
                    <span class="ms-2">Hardwares</span>
                    <i class="bi bi-caret-down-fill"></i>
                </a>
                <ul class="collapse nav-collapse ms-1" id="hardware" data-bs-parent="#menu">
                    <li class="nav-item hover-option">
                        <a class="nav-link" href="?content=placa-mae" aria-current="page">Placa Mãe</a>
                    </li>
                    <li class="nav-item hover-option">
                        <a class="nav-link" href="?content=processador">Processador</a>
                    </li>
                    <li class="nav-item hover-option">
                        <a class="nav-link" href="?content=cooler">Cooler</a>
                    </li>
                    <li class="nav-item hover-option">
                        <a class="nav-link" href="?content=memoria">Memória</a>
                    </li>
                    <li class="nav-item hover-option">
                        <a class="nav-link" href="?content=fonte">Fonte</a>
                    </li>
                </ul>
            </li>
            <!-- Cabos -->
            <li class="nav-item mb-3 hover-option pt-2 pb-2">
                <a href="?content=cabos" class="nav-link text-white" aria-current="page">
                    <i class="bi bi-usb-plug-fill"></i>
                    <span class="ms-2">Cabos</span>
                </a>
            </li>
            <!-- Periféricos -->
            <li class="nav-item mb-3 hover-option pt-2 pb-2">
                <a href="?content=perifericos" class="nav-link text-white" aria-current="page">
                    <i class="bi bi-mouse-fill"></i>
                    <span class="ms-2">Periféricos</span>
                </a>
            </li>
            <!-- Ferramentas -->
            <li class="nav-item mb-3 hover-option pt-2 pb-2">
                <a href="?content=ferramentas" class="nav-link text-white" aria-current="page">
                    <i class="bi bi-hammer"></i>
                    <span class="ms-2">Ferramentas</span>
                </a>
            </li>
            <!-- Toners -->
            <li class="nav-item mb-3 hover-option pt-2 pb-2">
                <a href="?content=toners" class="nav-link text-white" aria-current="page">
                    <i class="bi bi-droplet-fill"></i>
                    <span class="ms-2">Toners</span>
                </a>
            </li>
            <!-- Sair -->
            <li class="nav-item hover-option pt-2 pb-2">
                <a href="#" class="nav-link text-white" aria-current="page">
                    <i class="bi bi-box-arrow-left"></i>
                    <span class="ms-2">Sair</span>
                </a>
            </li>
        </ul>

</body>

</html>