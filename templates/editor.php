<?php include "./includes/protect.php"?>
<?php require "./controller/editorNoticias.php"?>
<div class="container mt-4">
    <h1 class="mb-4 text-decoration-underline">Minhas Noticias</h1>
        <div class="mb-4">
            <h3 class="mb-3">Esperando aprovação</h3>
            <?php exibirNoticiasPendentes()?>
        </div>
        <div class="mb-4">
            <h3 class="mb-3">Notícias recusadas</h3>
            <?php exibirNoticiasRejeitadas()?>
        </div>
        <div class="mb-4">
            <h3 class="mb-3">Noticias aprovadas</h3>
            <?php exibirNoticiasAprovadas()?>
        </div>
    </div>