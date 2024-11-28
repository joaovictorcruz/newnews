
<?php require './controller/exibeNoticia.php'?>
<main class="container mt-4 destaques">
        <div class="row">
            <h1 class="card-title"><?php echo $titulo?></h1>
            <div class="col-md-10 col-12 mb-4" id="noticia-destaque">
                    <div class="card">
                        <img src="https://via.placeholder.com/800x400/6a0dad/ffffff?text=Destaque" class="card-img-top" alt="Notícia em destaque">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $visualizacoes?></h5>
                            <h5 class="card-title editor"><?php echo $nomeEditor?></h5>
                        </div>
                    </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-12 mb-4" id="noticia-destaque">
                <p>
                    <?php echo $conteudo?>
                </p>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>