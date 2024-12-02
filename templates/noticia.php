<?php require './controller/exibeNoticia.php' ?>
<main class="container mt-5 destaques">
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            <h1 class="text-center titulo-newcard"><?php echo $titulo ?></h1>
            <div class="card mt-4 titulo-pageCard"><?php if(!empty($imagem)){
                echo '<img src="'.$imagem.'" class="card-img-top" alt="Notícia em destaque">';
            }?>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">Publicado por <?php echo $nomeEditor ?></h6>
                        </div>
                        <h6 class="mb-0"><?php echo $visualizacoes ?> visualizações</h6>
                    </div>
                    <div class="content mt-3">
                        <p>
                            <?php echo $conteudo ?>
                        </p>
                    </div>
                    <?php if(isset($buttons)){echo $buttons;}?>
                </div>
            </div>
        </div>
    </div>
</main>
