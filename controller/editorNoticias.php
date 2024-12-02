<?php
# Base de dados
include('./db/conexao.php');

$editorId = $_SESSION['id'];
$nomeEditor = $_SESSION['nome'];

function exibirNoticiasPendentes(){
 global $mysqli;  
 global $editorId;
 global $nomeEditor; 
$sql_code = "SELECT * FROM materias WHERE aprovacao ='pendente' AND editorId = '$editorId'";
$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

if ($sql_query->num_rows > 0) {
    while ($noticiaPendente = mysqli_fetch_array($sql_query)) {

        echo '<div class="noticia-linha">';
        if(isset($noticiaPendente['imagem'])){
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
            <h3 class="noticia-titulo m-3">' . $noticiaPendente['aprovacao'] . '</h3>
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
    global $nomeEditor;
    global $editorId;   
    
   $sql_code = "SELECT * FROM materias WHERE aprovacao ='aprovado' AND editorId = '$editorId'";
   $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
   
   if ($sql_query->num_rows > 0) {
       while ($noticiaAprovada = mysqli_fetch_array($sql_query)) {
   
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
    global $editorId;
    global $nomeEditor;
    $administadorId = $_SESSION['id'];
   $sql_code = "SELECT * FROM materias WHERE aprovacao ='rejeitado' AND editorId = '$editorId'";
   $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
   
   if ($sql_query->num_rows > 0) {
       while ($noticiaRejeitada = mysqli_fetch_array($sql_query)) {
   
           echo '<div class="noticia-linha">';
           if(!empty($noticiaRejeitada['imagem'])){
               echo'
               <div class="noticia-img">
                   <a href="?pagina=noticia&&noticiaId=' . $noticiaRejeitada['id'] . '">
                       <img src="' . $noticiaRejeitada['imagem'] . '" alt="Imagem da notícia">
                   </a>
               </div>';
          };
           echo'
               <div class="noticia-detalhes">
                   <a href="?pagina=noticia&&noticiaId=' . $noticiaRejeitada['id'] . '">
                       <h3 class="noticia-titulo">' . $noticiaRejeitada['titulo'] . '</h3>
                   </a>
                   <p class="noticia-descricao">' . substr($noticiaRejeitada['conteudo'], 0, 100) . '...</p>
                   <p class="noticia-autor">Postado por ' . $nomeEditor . '</p>
               </div>
               <h3 class="noticia-titulo m-3">' . $noticiaRejeitada['aprovacao'] . '</h3>
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


   mysqli_close($mysqli);
?>
