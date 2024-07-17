<?php


$contactos = getContactos();

?>
    
    
    <main class="container-fluid">
        <div class="row">
            <div class="col-12 p-0 text-center">
                <h2>Contactos</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 p-0">

                <table>
                    <tr>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Morada</th>
                        <th>Facebook</th>
                        <th>Ações</th>
                    </tr>
                    <td>
                        <p><?= $contactos["telefone"];?></p>
                    </td>
                    <td>
                        <p><?= $contactos["email"];?></p>
                    </td>
                    <td>
                        <p><?= $contactos["morada"];?></p>
                    </td>
                    <td>
                        <p><?= $contactos["facebook"];?></p>
                    </td>
                    <td>
                        <button><a href="destaques.php">Editar</a></button>
                        <button><a href="destaques.php">Apagar</a></button>
                    </td>

                </table>
            </div>    
        </div>
    </main>