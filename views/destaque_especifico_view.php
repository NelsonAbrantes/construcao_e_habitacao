<?php

$form = isset($_GET["id"]);
if($form){
    $id = intval($_GET["id"]);
    $destaque_especifico = getDestaqueEspecifico($id);
}
?>

    <?php if(!empty($destaque_especifico)): ?>

        <main class="container">
            <div class="row justify-content-center">
                <div class="col-12 bem-vindo d-block">
                    <div class="separador"></div>
                    <h1>Destaques</h1>
                    <h3><?= $destaque_especifico["titulo"] ?></h3>
                    <p class="p-bemvindo">
                        <?= $destaque_especifico["texto"] ?>
                    </p>
                </div>
            </div>
            
        </main>
    <?php else: ?>

        <main class="container">

            <div class="row justify-content-center">
                <div class="col-12">
                    <h1>404 - PÁGINA NÃO ENCONTRADA</h1>
                </div>
            </div>   
        </main>

    <?php endif; ?>