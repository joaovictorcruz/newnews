<?php require './controller/exibeDestaques.php'?>
<main class="container mt-4 destaques">
<h1 class="titulo-destaques">Destaques</h1>
    <div class="destaques-container">
        <div class="destaque">
        <div class="destaque-card">
            <img src="<?=$destaqueImagem?>" class="destaque-img" alt="Notícia em destaque">
            <div class="destaque-conteudo">
                <h5 class="destaque-titulo card-title"><a href="?pagina=noticia&&noticiaId=<?=$destaqueId?>"><?=$destaqueTitulo?></a></h5>
            </div>
        </div>
    </div>
        <div class="secundarias">
            <div class="secundaria">
                <div class="secundaria-card">
                    <img src="<?=$secundaria1Imagem?>" class="secundaria-img" alt="Notícia secundária">
                    <div class="secundaria-conteudo">
                    <h5 class="destaque-titulo card-title"><a href="?pagina=noticia&&noticiaId=<?=$secundaria1Id?>"><?=$secundaria1Titulo?></a></h5>
                    </div>
                </div>
            </div>
            <div class="secundaria">
                <div class="secundaria-card">
                    <img src="<?=$secundaria2Imagem?>" class="secundaria-img" alt="Notícia secundária">
                    <div class="secundaria-conteudo">
                    <h5 class="destaque-titulo card-title"><a href="?pagina=noticia&&noticiaId=<?=$secundaria2Id?>"><?=$secundaria2Titulo?></a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<hr>

<main class="container mt-4" class="noticias-home" id="noticias">
<h1 class="titulo-destaques">Notícias</h1>
    <?php require './controller/exibeNoticias.php'?>
</main>
   