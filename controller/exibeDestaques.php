<?php
include('./db/conexao.php');

// Consulta para obter as 3 notícias mais visualizadas nas últimas 24 horas
//$sql_code = " SELECT * FROM materias WHERE aprovacao = 'aprovado' AND created_at >= NOW() - INTERVAL 1 DAY ORDER BY views DESC LIMIT 3";
$sql_code = " SELECT * FROM materias WHERE aprovacao = 'aprovado' ORDER BY views DESC LIMIT 3";

$res = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

// Verifica se há resultados
if ($res->num_rows > 0) {
    $noticias = $res->fetch_all(MYSQLI_ASSOC);

    $destaque = $noticias[0];
    $destaqueImagem = $destaque['imagem'];
    $destaqueTitulo = htmlspecialchars($destaque['titulo']);
    $destaqueId = $destaque['id'];
    $secundaria1 = $noticias[1];
    $secundaria1Imagem = $secundaria1['imagem'];
    $secundaria1Titulo = htmlspecialchars($secundaria1['titulo']);
    $secundaria1Id = $secundaria1['id'];
    $secundaria2 = $noticias[2];
    $secundaria2Imagem = $secundaria2['imagem'];
    $secundaria2Titulo = htmlspecialchars($secundaria2['titulo']);
    $secundaria2Id = $secundaria2['id'];

    /*
    echo '<h1 class="titulo-destaques">Destaques</h1>
        <div class="destaques-container">';

    

    echo '<div class="destaque">
            <div class="destaque-card">
                <img src="'.$destaque['imagem'].'" class="destaque-img" alt="Notícia em destaque">
                <div class="destaque-conteudo">
                    <h5 class="destaque-titulo card-title"><a href="?pagina=noticia&&noticiaId='.$destaque['id'].'">' . htmlspecialchars($destaque['titulo']) . '</a></h5>
                    
                </div>
            </div>
          </div>';

    echo '<div class="secundarias">';
    for ($i = 1; $i < count($noticias); $i++) {
        $secundaria = $noticias[$i];
        echo '<div class="secundaria">
                <div class="secundaria-card">
                    <img src="'.$secundaria['imagem'].'" class="secundaria-img" alt="Notícia secundária">
                    <div class="secundaria-conteudo">
                        <h5 class="secundaria-titulo card-title"><a href="?pagina=noticia&&noticiaId='.$secundaria['id'].'">' . htmlspecialchars($secundaria['titulo']) . '</a></h5>
                    </div>
                </div>
              </div>';
              */
    
    echo '</div></div>';
} else {
    echo '<p>Não há notícias em destaque no momento.</p>';
}
    
?>