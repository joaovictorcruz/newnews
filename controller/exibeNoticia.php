<?php 
    if(isset($_GET['noticiaId'])){
	$noticiaId = $_GET['noticiaId'];
	}


    #Base de dados
    include('./db/conexao.php');

    $sql_upView = "update materias set views = views++1 where id =".$noticiaId." ";
    $sql_queryView = $mysqli->query($sql_upView) or die("Falha na execução do código SQL: " . $mysqli->error);

    $sql_code = "SELECT * FROM materias where id = $noticiaId ";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
    
    $quantidade = $sql_query->num_rows;

    if($quantidade == 1) {
        
        $materia = $sql_query->fetch_assoc(); 
    }
    
    $titulo = $materia['titulo'];
    $conteudo = $materia['conteudo'];
    $visualizacoes = $materia['views'];

    // procura o nome do editor na table usuarios usando o id disponivel na materia
    $editorId = $materia['editorId'];
    $sql_searchEditor = "SELECT nome FROM usuarios where id = '$editorId' ";
    $sql_searchQuery = $mysqli->query($sql_searchEditor) or die("Falha na execução do código SQL: " . $mysqli->error);
    if($sql_searchQuery->num_rows == 1){
            $editor = $sql_searchQuery->fetch_assoc();
            $nomeEditor = $editor["nome"];
}
    
?>


    