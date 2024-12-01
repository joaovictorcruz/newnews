<?php
# Base de dados
include('./db/conexao.php');

$sql_code = "SELECT * FROM materias WHERE aprovacao ='aprovado' ORDER BY created_at DESC";
$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

if ($sql_query->num_rows > 0) {
    while ($materias = mysqli_fetch_array($sql_query)) {
        $editorId = $materias['editorId'];
        $sql_searchEditor = "SELECT nome FROM usuarios WHERE id = '$editorId'";
        $sql_searchQuery = $mysqli->query($sql_searchEditor) or die("Falha na execução do código SQL: " . $mysqli->error);

        if ($sql_searchQuery->num_rows == 1) {
            $editor = $sql_searchQuery->fetch_assoc();
            $nomeEditor = $editor["nome"];
        }

        if ($materias["aprovacao"]) {
            echo '<div class="noticia-linha">';
            if(isset($materias['imagem'])){
                echo'
                <div class="noticia-img">
                    <a href="?pagina=noticia&&noticiaId=' . $materias['id'] . '">
                        <img src="' . $materias['imagem'] . '" alt="Imagem da notícia">
                    </a>
                </div>';
           };
            echo'
                <div class="noticia-detalhes">
                    <a href="?pagina=noticia&&noticiaId=' . $materias['id'] . '">
                        <h3 class="noticia-titulo">' . $materias['titulo'] . '</h3>
                    </a>
                    <p class="noticia-descricao">' . substr($materias['conteudo'], 0, 100) . '...</p>
                    <p class="noticia-autor">Postado por ' . $nomeEditor . '</p>
                </div>
            </div>
            ';
        }
    }
}
?>
