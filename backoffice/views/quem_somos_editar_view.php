<?php

$quem_somos = getQuemSomos();

$form = isset($_GET["imagem"]) && isset($_GET["texto"]);
if($form){
    $imagem = $_GET["imagem"];
    $texto = $_GET["texto"];
    iduSQL("UPDATE `quem_somos` SET `imagem` = '$imagem', `texto` = '$texto'");
    header("Location: ../views/quem_somos_view.php");
}


?>

    <main class="container-fluid">
        <div class="row">
            <div class="col-12 p-0 text-center">
                <h2>Quem Somos</h2>
            </div>
        </div>

        <div class="row">
            <form class="col-12 text-center">
                
                <label for="imagem">Imagem</label>
                <input type="text" name="imagem" value="<?= $quem_somos["imagem"];?>">

                <br>

                <label for="texto">Texto</label>
                <textarea type="text" name="texto" value="<?= $quem_somos["texto"];?>"></textarea>

                <br>

                <input type="submit" value="Guardar">

            </form>    
        </div>
    </main>