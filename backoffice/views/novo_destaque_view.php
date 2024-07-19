<?php

$form = isset($_GET["titulo"]) && isset($_GET["imagem"]) && isset($_GET["texto"]) && isset($_GET["mostrar"]);
if($form){
    $titulo = $_GET["titulo"];
    $imagem = $_GET["imagem"];
    $texto = $_GET["texto"];
    $mostrar = $_GET["mostrar"];
    iduSQL("INSERT INTO `destaques` (`titulo`, `imagem`, `texto`, `mostrar`) VALUES ('$titulo', '$imagem', '$texto', '$mostrar')");
    header("Location: destaques.php");
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
                <h2>Novo Destaque</h2>
            </div>
        </div>

        <div class="row">
            <form class="col-12 text-center">

                <label for="titulo">Titulo</label>
                <br>
                <input type="text" name="titulo" >
                <br>
                <label for="imagem">Imagem</label>
                <br>
                <input type="text" name="imagem" >

                <br>
                
                <button><a href="http://localhost/construcao_e_habitacao/backoffice/tinyfilemanager/tinyfilemanager.php?p=" target="_blank">Gestor de Ficheiros</a></button>

                <br>

                <label for="texto">Texto</label>
                <br>
                <textarea type="text" id="texto" name="texto"></textarea>

                <br>

                <label for="mostrar">Mostrar Destaque na página inicial</label>
                <select name="mostrar" id="mostrar">
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>

                <input type="submit" value="Guardar">

            </form>    
        </div>
    </main>