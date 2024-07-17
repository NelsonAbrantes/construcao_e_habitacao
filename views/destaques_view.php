<?php

$total_paginas = getTotalPaginas();
$pagina = 1;

$form = isset($_GET["pagina"]);
if($form){
    $pagina = intval($_GET["pagina"]);
    if($pagina < 1){
        $pagina = 1;
    }
    elseif($pagina > $total_paginas){
        $pagina = $total_paginas;
    }

}


$destaques = getDestaques($pagina);

?>


    <main class="container">
       
        <div class="row">
            <div class="col destaques">
                <div class="separador"></div>
                <h1>Destaques</h1>
                <div class="card_container d-flex flex-wrap justify-content-center">

                    <?php foreach($destaques as $d): ?>
                        <div class="col-3 card rounded-0" style="width: 22rem;">
                            <img src="<?= $d["imagem"] ?>" class="card-img-top rounded-0" alt="empreend4.png">
                            <div class="card-body">
                                <h5 class="card-title"><?= $d["titulo"] ?></h5>
                                <p class="card-text"><?= substr($d["texto"],0,200) ?>...</p>
                                <div class="btn_container">
                                    <a href="destaque_especifico.php?id=<?= $d["id"] ?>"><button class="ver_mais_2">Ver Mais</button></a> 
                                </div> 
                            </div>
                        </div>
                    <?php endforeach; ?>    

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col text-center ">
                <?php for($i=1; $i<=$total_paginas; $i++): ?>
                    <a href="destaques.php?pagina=<?= $i ?>"><?= $i ?></a>
                <?php endfor; ?>
            </div>
        </div>
    </main>