<?php require './controller/exibeNoticia.php' ?>
<main class="container mt-4 destaques">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center"><?php echo $titulo ?></h1>
            <div class="card mt-4">
                <img src="https://via.placeholder.com/500x250/6a0dad/ffffff?text=Destaque" class="card-img-top" alt="Notícia em destaque">
                <div class="card-body">
                    <!-- Linha com visualizações e editor -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/30/6a0dad/ffffff?text=E" alt="Foto do editor" class="rounded-circle me-2" style="width: 30px; height: 30px;">
                            <h6 class="mb-0">Publicado por <?php echo $nomeEditor ?></h6>
                        </div>
                        <h6 class="mb-0"><?php echo $visualizacoes ?> visualizações</h6>
                    </div>
                    <!-- Conteúdo da notícia -->
                    <div class="content mt-3">
                        <p>
                            <?php echo $conteudo ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
