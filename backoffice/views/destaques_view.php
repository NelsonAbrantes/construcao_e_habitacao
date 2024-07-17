<?php


$destaques = getTodosDestaques();

?>
    <main class="container-fluid">
        <div class="row">
            <div class="col-12 p-0 text-center">
                <h2>Destaques</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 p-0">
                
                <table>

                    <tr>
                        <th>Imagem</th>
                        <th>Título</th>
                        <th>Texto</th>
                        <th>Ações</th>
                    </tr>
                    
                    <?php foreach ($destaques as $d): ?>
                        <tr>
                            <td>
                                <img src="<?= $d["imagem"];?>" alt="<?= $d["imagem"];?>" width="100px">
                            </td>
                            <td>
                                <?= $d["titulo"];?>
                            </td>
                            <td>
                                <?=substr( $d["texto"],0,50);?> ...
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