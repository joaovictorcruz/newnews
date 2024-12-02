<?php include "./includes/protect.php"?>
<?php require "./controller/adminNoticias.php"?>
<div class="container mt-4">
        <div class="mb-4">
            <h3 class="mb-3">Notícias Pendentes</h3>
            <?php exibirNoticiasPendentes()?>
        </div>
        <div class="mb-4">
            <h3 class="mb-3">Notícias Aprovadas</h3>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Título da Notícia</a></h5>
                            <p class="card-text">Autor: Nome do Escritor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-4">
            <h3 class="mb-3">Notícias Recusadas</h3>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Título da Notícia</a></h5>
                            <p class="card-text">Autor: Nome do Escritor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>