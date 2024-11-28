<?php
    #Base de dados
    include('./db/conexao.php');

    $sql_code = "SELECT * FROM materias ";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    if($sql_query->num_rows > 0) {
        
        

        while($materias = mysqli_fetch_array($sql_query)){
            
            $editorId = $materias['editorId'];
            $sql_searchEditor = "SELECT nome FROM usuarios where id = '$editorId' ";
            $sql_searchQuery = $mysqli->query($sql_searchEditor) or die("Falha na execução do código SQL: " . $mysqli->error);
            if($sql_searchQuery->num_rows == 1){
                $editor = $sql_searchQuery->fetch_assoc();
                $nomeEditor = $editor["nome"];
            }

            if($materias["aprovacao"]){
            echo'
            <div class="row">
            <div class="col-md-8 col-12 mb-4" id="noticia-destaque">
                <div class="card">
                    <img src="https://via.placeholder.com/800x400/6a0dad/ffffff?text=Destaque" class="card-img-top" alt="Notícia em destaque">
                    <div class="card-body">
                        <h5 class="card-title">'. $materias['titulo'].'</h5>
                    </div>
                </div>
            </div>
            </div>
            ';
            }
        }
    };
