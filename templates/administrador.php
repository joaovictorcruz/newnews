<?php include "./includes/protect.php"?>
<?php require "./controller/adminNoticias.php"?>
<div class="container mt-4">
        <div class="mb-4">
            <h3 class="mb-3">Notícias Pendentes</h3>
            <?php exibirNoticiasPendentes()?>
        </div>
        <div class="mb-4">
            <h3 class="mb-3">Notícias Aprovadas</h3>
            <?php exibirNoticiasAprovadas()?>
            
        </div>
        <div class="mb-4">
            <h3 class="mb-3">Notícias Recusadas</h3>
            <?php exibirNoticiasRejeitadas()?>
        </div>
    </div>