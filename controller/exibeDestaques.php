<?php
include('./db/conexao.php');

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
    
    echo '</div></div>';
} else {
    echo '<p>Não há notícias em destaque no momento.</p>';
}
mysqli_close($mysqli);
?>
