function confirmDelete(id) {
    if (confirm("Tem certeza que deseja excluir este contrato?")) {
        // Redirecionar para a página de exclusão
        window.location.href = 'scripts/delete.php?id=' + id;
    }
}