
<?php include "./includes/protect.php"?>
<?php require './controller/novaNoticia.php' ?>
<div class="container-news">
    <h1>Criar Notícia</h1>

    <?php if (isset($mensagem)){
        echo "<p> ". $mensagem ."</p>";
    }
?>

    <form action="" method="POST" enctype="multipart/form-data">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        
        <label for="conteudo">Conteúdo:</label>
        <textarea id="conteudo" name="conteudo" rows="5" required></textarea>
        
        <label for="image">Imagem (opcional):</label>
        <input type="file" id="image" name="image">
        
        <button type="submit">Criar Notícia</button>
    </form>
</div>
