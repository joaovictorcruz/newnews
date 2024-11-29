
    <main class="container mt-4 destaques">
        <h1>Destaques</h1>
        <div class="row">
            <div class="col-md-8 col-12 mb-4" id="noticia-destaque">
                <div class="card">
                    <img src="https://via.placeholder.com/800x400/6a0dad/ffffff?text=Destaque" class="card-img-top" alt="Notícia em destaque">
                    <div class="card-body">
                        <h5 class="card-title">"Supernatural" ultrapassa 100 Milhões de streams no Spotify</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 d-flex flex-column">
                <div class="card mb-4" id="noticia-secundaria-1">
                    <img src="https://via.placeholder.com/400x200/6a0dad/ffffff?text=Not%C3%ADcia+Secund%C3%A1ria+1" class="card-img-top" alt="Notícia secundária">
                    <div class="card-body">
                        <h5 class="card-title">NewJeans como embaixadores da Indomie</h5>
                    </div>
                </div>
                <div class="card" id="noticia-secundaria-2">
                    <img src="https://via.placeholder.com/400x200/6a0dad/ffffff?text=Not%C3%ADcia+Secund%C3%A1ria+2" class="card-img-top" alt="Notícia secundária">
                    <div class="card-body">
                        <h5 class="card-title">ADOR revela que Harin não fará provas coreanas</h5>
                    </div>
                </div>
            </div> 
        </div>
    </main>
    <hr>
    <main class="container mt-4">
    <h1>Notícias</h1>
    <?php require './controller/exibeNoticias.php'?>
    </main>