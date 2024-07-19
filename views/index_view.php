<?php

$destaques_home = getDestaquesHome();
$quem_somos_home = getQuemSomos();

?>
    
    <main class="container">
        <div class="row justify-content-center">
            <div class="col bem_vindo" >
                <div class="separador"></div>
                <h1>Bem-vindo à<br>Cooperativa de Construção e Habitação Tripeira</h1>
                <div class="p_bemvindo m-auto">
                    <?= substr($quem_somos_home["texto"],0,600)?>
                </div>
                <div class="col text-center">
                    <a href="quem_somos.php" class="buttao"><button class="ver_mais_1">Ver Mais</button></a> 
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col destaques">
                <div class="separador"></div>
                <h1>Destaques</h1>
                <div class="card_container d-flex flex-wrap justify-content-center">

                    <?php foreach($destaques_home as $d): ?>
                        <div class="col-3 card rounded-0" style="width: 22rem;">
                            <img src="<?= $d["imagem"] ?>" class="card-img-top rounded-0" alt="empreend4.png">
                            <div class="card-body">
                                <h5 class="card-title"><?= $d["titulo"] ?></h5>
                                <p class="card-text"><?= substr($d["texto"],0,200)?>(...)</p>
                                <div class="btn_container">
                                    <a href="destaque_especifico.php?id=<?= $d["id"] ?>"><button class="ver_mais_2">Ver Mais</button></a> 
                                </div> 
                            </div>
                        </div>
                    <?php endforeach; ?>    

                </div>
            </div>
        </div>
    </main>