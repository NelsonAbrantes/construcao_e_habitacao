<?php

$quem_somos = getQuemSomos();

?>
    
    <main class="container">  

        <div class="row ">
            <div class="col-12 text-center">
                <h1>Quem Somos</h1>
            </div>
            <div class="col-12">
                <img src="<?= $quem_somos["imagem"]; ?>" alt="QuemSomos.png" class="float-start me-4 mb-3">
                    <?= $quem_somos["texto"];?>
                <div class="row ">
                    <div class="col text-center">
                        <a href="#" class="buttao"><button class="ver_mais_1">Ver Mais</button></a> 
                    </div>
                </div>
                
            </div>
        </div>
        
    </main>