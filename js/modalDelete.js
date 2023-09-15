function confirmDelete(id) {
    
    var resposta = confirm("Deseja realmente excluir?");

    if (resposta) {

        window.location.replace("scripts/delete.php?id=" + id + "&confirm=true");

    } else {
        
        window.location.replace("index.php?content=maquinas");
    }
}
