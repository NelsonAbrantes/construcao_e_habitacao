<?php

$carousel = getCarousel();

?>
    <main class="container-fluid">
        <div class="row">
            <div class="col-12 p-0 text-center">
                <h2>Carousel</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 p-0">
                
                <table>
                    
                    <tr>
                        <th>Imagem</th>
                        <th>Ações</th>
                    </tr>
                    <?php foreach ($carousel as $c): ?>
                        <tr>
                            <td>
                                <img src="<?= $c["imagem"]; ?>" alt="<?= $c["imagem"]; ?>" width="200px">
                            </td>
                            <td>
                                <button><a href="destaques.php">Editar</a></button>
                                <button><a href="destaques.php">Apagar</a></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>       
                </table>
            </div>    
        </div>

    </main>