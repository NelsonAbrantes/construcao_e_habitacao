<?php

$quem_somos = getQuemSomos();

?>

    <main class="container-fluid">
        <div class="row">
            <div class="col-12 p-0 text-center">
                <h2>Quem Somos</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 p-0">
                
                <table>
                    <tr>
                        <th>Imagem</th>
                        <th>Texto</th>
                        <th>Ações</th>
                    </tr>
                    <td>
                        <img src="<?= $quem_somos["imagem"];?>" alt="<?= $quem_somos["imagem"];?> " width="100px">
                    </td>
                    <td>
                        <?=substr( $quem_somos["texto"],0,100);?> ...
                    </td>
                    <td>
                        <button><a href="quem_somos_editar.php?id=<?= $quem_somos["id"];?>">Editar</a></button>
                    </td>
                </table>

            </div>    
        </div>
    </main>