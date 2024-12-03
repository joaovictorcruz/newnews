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
                    <img class="secundaria-img" src="<?=$secundaria1Imagem?>"  alt="Notícia secundária">
                    <div class="secundaria-conteudo">
                    <h5 class="secundaria-titulo card-title"><a href="?pagina=noticia&&noticiaId=<?=$secundaria1Id?>"><?=$secundaria1Titulo?></a></h5>
                    </div>
                </div>
            </div>
            <div class="secundaria">
                <div class="secundaria-card">
                    <img class="secundaria-img" src="<?=$secundaria2Imagem?>"  alt="Notícia secundária">
                    <div class="secundaria-conteudo">
                    <h5 class="secundaria-titulo card-title"><a href="?pagina=noticia&&noticiaId=<?=$secundaria2Id?>"><?=$secundaria2Titulo?></a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<hr id="noticiasRecentes" class="slide-in">

<main class="container mt-4" class="noticias-home" id="noticias">
<h1 class="titulo-destaques">Notícias</h1>
    <?php require './controller/exibeNoticias.php'?>
</main>
   