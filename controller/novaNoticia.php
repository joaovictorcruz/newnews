<?php


 #Base de dados
 include('./db/conexao.php');


    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = './db/images/' . basename($_FILES['image']['name']);
    
        if (move_uploaded_file($_FILES['image']['tmp_name'], $image)) {
        } else {
            $image = null; 
        }
    } else {
        $image = null; 
    }
    
    
    if(isset($_POST['titulo']) && isset($_POST['titulo'])){
        $titulo = $mysqli->real_escape_string($_POST['titulo']);
        $conteudo = $mysqli->real_escape_string($_POST['conteudo']);
    
    
    $sql_code = "INSERT INTO materias (titulo, conteudo, views, editorId,imagem) VALUES('$titulo','$conteudo',0,".$_SESSION['id'].",'$image')";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
    
    if($sql_query){
        $mensagem = "Notícia criada com sucesso e aguardando aprovação!";
    }
        
   

}

mysqli_close($mysqli);

?>
