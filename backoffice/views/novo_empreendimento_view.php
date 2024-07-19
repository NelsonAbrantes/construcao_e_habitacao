<?php

$form = isset($_GET["titulo"]) && isset($_GET["imagem_1"]) && isset($_GET["imagem_2"]) && isset($_GET["imagem_3"]) && isset($_GET["imagem_4"]) && isset($_GET["texto"]);
if($form){
    $titulo = $_GET["titulo"];
    $imagem_1 = $_GET["imagem_1"];
    $imagem_2 = $_GET["imagem_2"];
    $imagem_3 = $_GET["imagem_3"];
    $imagem_4 = $_GET["imagem_4"];
    $texto = $_GET["texto"];
    iduSQL("INSERT INTO empreendimentos (titulo, imagem_1, imagem_2, imagem_3, imagem_4, texto) VALUES ('$titulo', '$imagem_1', '$imagem_2', '$imagem_3', '$imagem_4', '$texto')");
    header("Location: empreendimentos.php");
}


?>

    <script>
      tinymce.init({
        selector: '#texto',
      });
    </script>

    <main class="container-fluid">
        <div class="row">
            <div class="col-12 p-0 text-center">
                <h2>Novo empreendimento</h2>
            </div>
        </div>

        <div class="row">
            <form class="col-12 text-center">

                <label for="titulo">Titulo</label>
                <br>
                <input type="text" name="titulo" >
                <br>
                <label for="imagem_1">Imagem 1</label>
                <br>
                <input type="text" name="imagem_1" id="imagem_1">
                <br>
                <label for="imagem_2">Imagem 2</label>
                <br>
                <input type="text" name="imagem_2" id="imagem_2">
                <br>
                <label for="imagem_3">Imagem 3</label>
                <br>
                <input type="text" name="imagem_3" id="imagem_3">
                <br>
                <label for="imagem_4">Imagem 4</label>
                <br>
                <input type="text" name="imagem_4" id="imagem_4">

                <br>
                
                <button><a href="http://localhost/construcao_e_habitacao/backoffice/tinyfilemanager/tinyfilemanager.php?p=" target="_blank">Gestor de Ficheiros</a></button>

                <br>

                <label for="texto">Texto</label>
                <br>
                <textarea type="text" id="texto" name="texto"></textarea>

                <br>

                <input type="submit" value="Guardar">

            </form>    
        </div>
    </main>