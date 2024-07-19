<?php

$empreendimentos = getEmpreendimentos();

?>


    <main class="container-fluid">
        <div class="row">
            <div class="col-12 p-0 text-center">
                <h2>Empreendimentos</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 p-0 text-center">
                
                <button><a href="novo_empreendimento.php">Criar empreendimento</a></button>

                <table>

                    <tr>
                        <th>Banner</th>
                        <th>Imagem</th>
                        <th>Título</th>
                        <th>Ações</th>
                    </tr>

                    <?php foreach ($empreendimentos as $e): ?>
                        <tr>
                            <td>
                                <img src="<?= $e["imagem_1"];?>" alt="<?= $e["imagem_1"];?>" width="100px">
                            </td>
                            <td>
                                <?= $e["titulo"];?>
                            </td>
                            <td>
                                <?=substr( $e["texto"],0,50);?> ...
                            </td>
                            <td>
                                <button><a href="editar_empreendimento.php?id=<?= $e["id"];?>">Editar</a></button>
                                <button><a href="apagar_empreendimento.php?id=<?= $e["id"];?>">Apagar</a></button>
                            </td>
                        </tr>    
                    <?php endforeach; ?>       
                </table>
            </div>    
        </div>

    </main>