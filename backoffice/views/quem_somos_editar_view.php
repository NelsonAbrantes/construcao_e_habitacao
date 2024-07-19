<?php

$quem_somos = getQuemSomos();

$form = isset($_GET["imagem"]) && isset($_GET["texto"]);
if($form){
    $imagem = $_GET["imagem"];
    $texto = $_GET["texto"];
    iduSQL("UPDATE `quem_somos` SET `imagem` = '$imagem', `texto` = '$texto'");
    header("Location: quem_somos.php");
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
                <h2>Quem Somos</h2>
            </div>
        </div>

        <div class="row">
            <form class="col-12 text-center">
                
                <label for="imagem">Imagem</label>
                <br>
                <input type="text" name="imagem" value="<?= $quem_somos["imagem"];?>">

                <br>

                <a href="http://localhost/construcao_e_habitacao/backoffice/tinyfilemanager/tinyfilemanager.php?p=" target="_blank">Gestor de Ficheiros</a>

                <br>

                <label for="texto">Texto</label>
                <br>
                <textarea type="text" id="texto" name="texto" ><?= $quem_somos["texto"];?></textarea>

                <br>

                <input type="submit" value="Guardar">

            </form>    
        </div>
    </main>