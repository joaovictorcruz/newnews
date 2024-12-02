<?php
# Base de dados
include('./db/conexao.php');

function exibirNoticiasPendentes(){
 global $mysqli;   
$sql_code = "SELECT * FROM materias WHERE aprovacao ='pendente'";
$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

if ($sql_query->num_rows > 0) {
    while ($noticiaPendente = mysqli_fetch_array($sql_query)) {

        $editorId = $noticiaPendente['editorId'];
        $sql_searchEditor = "SELECT nome FROM usuarios WHERE id = '$editorId'";
        $sql_searchQuery = $mysqli->query($sql_searchEditor) or die("Falha na execução do código SQL: " . $mysqli->error);

        if ($sql_searchQuery->num_rows == 1) {
            $editor = $sql_searchQuery->fetch_assoc();
            $nomeEditor = $editor["nome"];
        }

        echo '<div class="noticia-linha">';
        if(!empty($noticiaPendente['imagem'])){
            echo'
            <div class="noticia-img">
                <a href="?pagina=noticia&&noticiaId=' . $noticiaPendente['id'] . '">
                    <img src="' . $noticiaPendente['imagem'] . '" alt="Imagem da notícia">
                </a>
            </div>';
       };
        echo'
            <div class="noticia-detalhes">
                <a href="?pagina=noticia&&noticiaId=' . $noticiaPendente['id'] . '">
                    <h3 class="noticia-titulo">' . $noticiaPendente['titulo'] . '</h3>
                </a>
                <p class="noticia-descricao">' . substr($noticiaPendente['conteudo'], 0, 100) . '...</p>
                <p class="noticia-autor">Postado por ' . $nomeEditor . '</p>
            </div>
            <div class="botoes-aprovacao">
                <a href="./controller/aprovacaoNoticia.php?aprovacao=aprovado&&noticiaId='.$noticiaPendente['id'] .'" class="btn btn-success btn-sm text-decoration-none">Aprovar</a>
                <a href="./controller/aprovacaoNoticia.php?aprovacao=rejeitado&&noticiaId='.$noticiaPendente['id'] .'" class="btn btn-danger btn-sm text-decoration-none">Recusar</a>
            </div>
        </div>
        ';
    }
}else{
    echo '<div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Não há nenhuma notícia pendente.</h5>
                        </div>
                    </div>';
}
};

function exibirNoticiasAprovadas(){
    global $mysqli;   
    $administadorId = $_SESSION['id'];
   $sql_code = "SELECT * FROM materias WHERE aprovacao ='aprovado' AND administradorId = '$administadorId'";
   $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
   
   if ($sql_query->num_rows > 0) {
       while ($noticiaAprovada = mysqli_fetch_array($sql_query)) {
   
           $editorId = $noticiaAprovada['editorId'];
           $sql_searchEditor = "SELECT nome FROM usuarios WHERE id = '$editorId'";
           $sql_searchQuery = $mysqli->query($sql_searchEditor) or die("Falha na execução do código SQL: " . $mysqli->error);
   
           if ($sql_searchQuery->num_rows == 1) {
               $editor = $sql_searchQuery->fetch_assoc();
               $nomeEditor = $editor["nome"];
           }
   
           echo '<div class="noticia-linha">';
           if(!empty($noticiaAprovada['imagem'])){
               echo'
               <div class="noticia-img">
                   <a href="?pagina=noticia&&noticiaId=' . $noticiaAprovada['id'] . '">
                       <img src="' . $noticiaAprovada['imagem'] . '" alt="Imagem da notícia">
                   </a>
               </div>';
          };
           echo'
               <div class="noticia-detalhes">
                   <a href="?pagina=noticia&&noticiaId=' . $noticiaAprovada['id'] . '">
                       <h3 class="noticia-titulo">' . $noticiaAprovada['titulo'] . '</h3>
                   </a>
                   <p class="noticia-descricao">' . substr($noticiaAprovada['conteudo'], 0, 100) . '...</p>
                   <p class="noticia-autor">Postado por ' . $nomeEditor . '</p>
               </div>
           </div>
           ';
       }
   }else{
       echo '<div class="card h-100">
                           <div class="card-body">
                               <h5 class="card-title">Não há nenhuma notícia aprovada.</h5>
                           </div>
                       </div>';
   }
   };
   
function exibirNoticiasRejeitadas(){
    global $mysqli;   
    $administadorId = $_SESSION['id'];
   $sql_code = "SELECT * FROM materias WHERE aprovacao ='rejeitado' AND administradorId = '$administadorId'";
   $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
   
   if ($sql_query->num_rows > 0) {
       while ($noticiaAprovada = mysqli_fetch_array($sql_query)) {
   
           $editorId = $noticiaAprovada['editorId'];
           $sql_searchEditor = "SELECT nome FROM usuarios WHERE id = '$editorId'";
           $sql_searchQuery = $mysqli->query($sql_searchEditor) or die("Falha na execução do código SQL: " . $mysqli->error);
   
           if ($sql_searchQuery->num_rows == 1) {
               $editor = $sql_searchQuery->fetch_assoc();
               $nomeEditor = $editor["nome"];
           }
   
           echo '<div class="noticia-linha">';
           if(!empty($noticiaAprovada['imagem'])){
               echo'
               <div class="noticia-img">
                   <a href="?pagina=noticia&&noticiaId=' . $noticiaAprovada['id'] . '">
                       <img src="' . $noticiaAprovada['imagem'] . '" alt="Imagem da notícia">
                   </a>
               </div>';
          };
           echo'
               <div class="noticia-detalhes">
                   <a href="?pagina=noticia&&noticiaId=' . $noticiaAprovada['id'] . '">
                       <h3 class="noticia-titulo">' . $noticiaAprovada['titulo'] . '</h3>
                   </a>
                   <p class="noticia-descricao">' . substr($noticiaAprovada['conteudo'], 0, 100) . '...</p>
                   <p class="noticia-autor">Postado por ' . $nomeEditor . '</p>
               </div>
           </div>
           ';
       }
   }else{
       echo '<div class="card h-100">
                           <div class="card-body">
                               <h5 class="card-title">Nenhuma noticia foi rejeitada.</h5>
                           </div>
                       </div>';
   }
   };

?>
