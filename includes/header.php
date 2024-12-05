<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pagina?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./static/css/styles.css">
</head>
<body>
    <header class="header-div py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex">
                <a href="?pagina=home" class="text-decoration-none mx-2 text-header">Home</a>
                <a href="#noticiasRecentes" class="text-decoration-none mx-2 text-header scroll-to">Notícias recentes</a>
                <?php if(isset($_SESSION['loginType']) && $_SESSION['loginType'] == 'editor'){
                    echo '<a href="?pagina=escreverNoticia" class="text-decoration-none mx-2 text-header">Publicar</a>';
                }?>
                <?php if(isset($_SESSION['loginType']) && $_SESSION['loginType'] == 'administrador'){
                    echo '<a href="?pagina=administrador" class="text-decoration-none mx-2 text-header">Administrador</a>';
                }?>
            </div>
            <img class="logo" src=".\src\logo1.png" alt="Logo NewNews">
            <div class="d-flex">
            <?php if(isset($_SESSION['loginType']) && $_SESSION['loginType'] == 'editor'){
                    echo '<a href="?pagina=editor" class="text-decoration-none mx-2 text-header">Minhas noticias</a>';
                }?>
                <?php
                if(isset($_SESSION['id'])){
                        echo "<p class='mx-2 text-header'>Bem-vindo, ". $_SESSION['nome'] ."</p>";
                        echo "<a class='mx-2 text-header' href='./includes/logout.php'>Logout</a>";
                }else{
                    echo'<a href="?pagina=cadastro" class="text-decoration-none mx-2 text-header">Cadastro</a>
                        <a href="?pagina=login" class="text-decoration-none mx-2 text-header">Login</a>';
                }

                ?>
            </div>
        </div>
    </header>

    <script>
document.addEventListener('DOMContentLoaded', function() {
    // Selecione todos os links de navegação que apontam para âncoras
    document.querySelectorAll('.nav a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault(); // Previne o comportamento padrão de navegação

            // Obtém o id do link clicado (href)
            const targetId = this.getAttribute('href').substring(1); // remove o "#"
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                // Obtém a posição do alvo no topo da página
                const targetOffset = targetElement.getBoundingClientRect().top + window.scrollY;

                // Realiza a animação de rolagem suave
                window.scrollTo({
                    top: targetOffset - 100,  // Ajuste o deslocamento de 100px
                    behavior: 'smooth'         // Define a animação suave
                });
            }
        });
    });
});
    </script>
