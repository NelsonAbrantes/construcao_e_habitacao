<?php

$contactos = getContactos();

?>

<footer class="container-fluid">
            <div class="row">
                <div class="col" id="contactos">
                    <div id="separador_contactos"></div>
                    <h1 id="titulo_contactos">Contactos</h1>
                    <div class="d-grid d-md-flex justify-content-center text-center">
                        <div class="col-md-3 col-sm-12">
                            <img class="icon_contactos" src="images/tel.svg" alt="telefone">
                            <p class="texto_contactos"><?= $contactos["telefone"];?></p> 
                        </div>
                        
                        <div class="col-md-3 col-sm-12">
                            <img class="icon_contactos" src="images/loc.svg" alt="localizacao">
                            <p class="texto_contactos"><?= $contactos["morada"];?></p>
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <img class="icon_contactos" src="images/mail.svg" alt="mail">
                            <p class="texto_contactos"><?= $contactos["email"];?></p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col mapa">

                    <div style="max-width:100%;overflow:hidden;color:red;width:100%;height:513px;">
                        <div id="embed-map-canvas" style="height:100%; width:100%;max-width:100%;">
                            <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=coop+de+construcao+e+habitacao+tripeira&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                        </div>
                        <a class="googlecoder" href="https://www.bootstrapskins.com/themes" id="grab-maps-authorization">premium bootstrap themes</a>
                        <style>#embed-map-canvas img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style>
                    </div>

                </div>
            </div>
            <div class="row" id="bottom_footer">
                <div class="col p-0">
                    <div>
                        <a href="<?= $contactos["facebook"];?>" target="_blank"><img id="facebook" src="images/facebook.svg" alt="facebook_icon"></a>
                        <p class="texto_facebook">Siga-nos no Facebook</p>
                    </div>
                    <div class="separador_footer"></div>
                </div>  
                <div class="row">
                    <nav class="col">

                        <ul class="nav nav_bot d-none d-lg-flex">
                            <li class="nav-item"><a class="nav-link menus_bot" href="#">HOME</a></li>
                            <li class="nav-item"><a class="nav-link menus_bot" href="#">QUEM SOMOS</a></li>
                            <li class="nav-item"><a class="nav-link menus_bot" href="#">SÓCIOS</a></li>
                            <li class="nav-item"><a class="nav-link menus_bot" href="#">NOTÍCIAS</a></li>
                            <li class="nav-item"><a class="nav-link menus_bot" href="#">DESTAQUES</a></li>
                            <li class="nav-item"><a class="nav-link menus_bot" href="#">EMPREENDIMENTOS</a></li>
                            <li class="nav-item"><a class="nav-link menus_bot" href="#">CENTRO DE FÉRIAS</a></li>
                            <li class="nav-item"><a class="nav-link menus_bot" href="#">CONTACTOS</a></li>
                        </ul>
                        
                        <div class="copyright ">
                            <a class="copyright_text" href="#">Copyright © 2024 Nelson Abrantes. Todos os direitos reservados.</a>
                        </div>

                    </nav>
                </div>
                 
            </div>     
        </footer>
    </body>
</html>