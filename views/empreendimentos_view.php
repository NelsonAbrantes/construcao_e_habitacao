<?php

$form = isset($_GET["id"]);
if($form){
    $id = intval($_GET["id"]);
    $empreendimento_unico = getEmpreendimentoUnico($id);
}
?>

    <?php if(!empty($empreendimento_unico)): ?>

        <main class="container">
            <div class="row justify-content-center">
                <div class="col-12 bem-vindo d-block">
                    <div class="separador"></div>
                    <h1>Empreendimentos</h1>
                    <h3><?= $empreendimento_unico["titulo"] ?></h3>
                    <p class="p-bemvindo">
                        <?= $empreendimento_unico["texto"] ?>
                    </p>
                </div>
            </div>
            <div class="row">
                
                <?php for($i=1; $i<=4; $i++): ?>

                    <?php if(!empty($empreendimento_unico["imagem_$i"])): ?>

                        <img src="<?= $empreendimento_unico["imagem_$i"] ?>" alt="<?=$empreendimento_unico["imagem_$i"]?>" class="col-6 p-0">

                    <?php endif; ?>

                <?php endfor; ?>

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