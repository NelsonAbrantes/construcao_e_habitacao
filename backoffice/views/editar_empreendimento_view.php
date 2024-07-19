<?php

$form = isset($_GET["id"]);
if($form){
    $id = ($_GET["id"]);
    $empreendimento_especifico = getEmpreendimentoUnico($id);
    $form2 = isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["imagem_1"]) && isset($_GET["imagem_2"]) && isset($_GET["imagem_3"]) && isset($_GET["imagem_4"]);
    if($form2){
        $titulo = $_GET["titulo"];
        $texto = $_GET["texto"];
        $imagem_1 = $_GET["imagem_1"];
        $imagem_2 = $_GET["imagem_2"];
        $imagem_3 = $_GET["imagem_3"];
        $imagem_4 = $_GET["imagem_4"];
        iduSQL("UPDATE empreendimentos SET titulo = '$titulo', texto = '$texto', imagem_1 = '$imagem_1', imagem_2 = '$imagem_2', imagem_3 = '$imagem_3', imagem_4 = '$imagem_4' WHERE id = $id");
        header("Location: empreendimentos.php");
    }
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
                <h2>Editar empreendimento</h2>
            </div>
        </div>

        <div class="row">
            <form class="col-12 text-center">

                <input type="hidden" name="id" value="<?= $id ?>">

                <label for="titulo">Titulo</label>
                <br>
                <input type="text" name="titulo" id="titulo" value="<?= $empreendimento_especifico["titulo"] ?>">
                <br>
                <label for="imagem_1">Imagem 1</label>
                <br>
                <input type="text" name="imagem_1" id="imagem_1" value="<?= $empreendimento_especifico["imagem_1"] ?>">
                <br>
                <label for="imagem_2">Imagem 2</label>
                <br>
                <input type="text" name="imagem_2" id="imagem_2" value="<?= $empreendimento_especifico["imagem_2"] ?>">
                <br>
                <label for="imagem_3">Imagem 3</label>
                <br>
                <input type="text" name="imagem_3" id="imagem_3" value="<?= $empreendimento_especifico["imagem_3"] ?>">
                <br>
                <label for="imagem_4">Imagem 4</label>
                <br>
                <input type="text" name="imagem_4" id="imagem_4" value="<?= $empreendimento_especifico["imagem_4"] ?>">

                <br>
                
                <button><a href="http://localhost/construcao_e_habitacao/backoffice/tinyfilemanager/tinyfilemanager.php?p=" target="_blank">Gestor de Ficheiros</a></button>

                <br>

                <label for="texto">Texto</label>
                <br>
                <textarea type="text" id="texto" name="texto"> <?= $empreendimento_especifico["texto"] ?></textarea>

                <br>

                <input class="btn" type="submit" value="Guardar">

            </form>    
        </div>
    </main>