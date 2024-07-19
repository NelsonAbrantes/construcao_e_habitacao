<?php

$form = isset($_GET["id"]);
if($form){
    $id = ($_GET["id"]);
    $destaque_especifico = getDestaqueEspecifico($id);
    $form2 = isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["imagem"]) && isset($_GET["mostrar"]);
    if($form2){
        $titulo = $_GET["titulo"];
        $texto = $_GET["texto"];
        $imagem = $_GET["imagem"];
        $mostrar = $_GET["mostrar"];
        iduSQL("UPDATE destaques SET titulo = '$titulo', texto = '$texto', imagem = '$imagem', mostrar = '$mostrar' WHERE id = $id");
        header("Location: destaques.php");
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
                <h2>Editar Destaque</h2>
            </div>
        </div>

        <div class="row">
            <form class="col-12 text-center">
                
                <input type="hidden" name="id" value="<?= $id ?>">

                <label for="titulo">Titulo</label>
                <br>
                <input type="text" name="titulo" value="<?= $destaque_especifico["titulo"] ?>" >
                <br>
                <label for="imagem">Imagem</label>
                <br>
                <input type="text" name="imagem" value="<?= $destaque_especifico["imagem"] ?>" >

                <br>
                
                <button><a href="http://localhost/construcao_e_habitacao/backoffice/tinyfilemanager/tinyfilemanager.php?p=" target="_blank">Gestor de Ficheiros</a></button>

                <br>

                <label for="texto">Texto</label>
                <br>
                <textarea type="text" id="texto" name="texto"><?= $destaque_especifico["texto"] ?></textarea>

                <br>

                <label for="mostrar">Mostrar Destaque na página inicial</label>
                <select name="mostrar" id="mostrar">
                    <option value="1" <?= $destaque_especifico["mostrar"] == 1 ? "selected" : "" ?>>Sim</option>
                    <option value="0" <?= $destaque_especifico["mostrar"] == 0 ? "selected" : "" ?>>Não</option>
                </select>
                <br><br>
                <input class="btn" type="submit" value="Guardar">

            </form>    
        </div>
    </main>