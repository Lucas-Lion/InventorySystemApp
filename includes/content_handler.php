<?php
// Verifica qual conteúdo deve ser exibido com base no parâmetro "content" na URL
if (isset($_GET['content'])) {
    $content = $_GET['content'];

    // Define um array com os nomes dos conteúdos válidos
    $conteudosValidos = ['home', 'maquinas', 'redes', 'cabos', 'perifericos', 'ferramentas', 'toners', 'perfil'];

    // Verifica se o conteúdo fornecido está na lista de conteúdos válidos
    if (in_array($content, $conteudosValidos)) {
        include "pages/$content.php"; // Inclue o arquivo PHP correspondente ao conteúdo
    } else {
        echo 'Conteúdo não encontrado.';
    }
}
?>
