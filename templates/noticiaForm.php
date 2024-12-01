
<?php include "./includes/protect.php"?>
<?php require './controller/novaNoticia.php' ?>
<div class="container-news custom-news-form">
    <h1 class="form-title">Criar Notícia</h1>

    <?php if (isset($mensagem)) {
        echo "<p class='form-message'>" . $mensagem . "</p>";
    } ?>

    <form action="" method="POST" enctype="multipart/form-data" class="news-form">
        <label for="titulo" class="form-label">Título:</label>
        <input type="text" id="titulo" name="titulo" class="form-input form-input-title" required>
        
        <label for="conteudo" class="form-label">Conteúdo:</label>
        <textarea id="conteudo" name="conteudo" rows="5" class="form-input form-textarea" required></textarea>
        
        <label for="image" class="form-label">Imagem (opcional):</label>
        <input type="file" id="image" name="image" class="form-input form-file">

        <button type="submit" class="form-button">Criar Notícia</button>
    </form>
</div>

