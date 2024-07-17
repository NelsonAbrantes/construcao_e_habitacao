<?php

$carousel = getCarousel();
$empreendimentos = getEmpreendimentos();

?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Construção e Habitação</title>
        
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="fonts/fonts.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- JavaScript -->
        <script src="js/main.js" defer></script>

    </head>
    <body>
        <header class="container-fluid">
            <div class="row" id="top_header">
                
                <div class="col p-0 ">
                    <nav class="navbar navbar-expand-lg p-0">
                        <div class="container-fluid p-0">
                            <a href="index.php"><img class="logo" src="uploads/logo.png" alt="logotipo"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                                <ul class="navbar-nav nav_top p-0">
                                    <li class="nav-item" ><a class="nav-link <?= ($menu_atual == "home") ? "active" : "" ?> menus_top" href="index.php">HOME</a></li>
                                    <div class="separador_nav d-lg-none"></div>
                                    <li class="nav-item"><a class="nav-link <?= ($menu_atual == "quem_somos") ? "active" : "" ?> menus_top" href="quem_somos.php">QUEM SOMOS</a></li>
                                    <div class="separador_nav d-lg-none"></div>
                                    <li class="nav-item"><a class="nav-link <?= ($menu_atual == "socios") ? "active" : "" ?> menus_top" href="#">SÓCIOS</a></li>
                                    <div class="separador_nav d-lg-none"></div>
                                    <li class="nav-item"><a class="nav-link <?= ($menu_atual == "noticias") ? "active" : "" ?> menus_top" href="#">NOTÍCIAS</a></li>
                                    <div class="separador_nav d-lg-none"></div>
                                    <li class="nav-item"><a class="nav-link <?= ($menu_atual == "destaques" || $menu_atual == "destaque_especifico") ? "active" : "" ?> menus_top" href="destaques.php">DESTAQUES</a></li>
                                    <div class="separador_nav d-lg-none"></div>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link <?= ($menu_atual == "home") ? "active" : "" ?> menus_top"  href="empreendimentos.php" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropdown_empreendimentos">EMPREENDIMENTOS</a>
                                        <div class="separador_nav d-lg-none"></div>
                                        <ul class="dropdown-menu p-0 m-0">
                                            <?php foreach($empreendimentos as $e): ?>
                                                <li><a class="dropdown-item submenus" href="empreendimentos.php?id=<?=$e['id'];?>"><?=$e['titulo'];?></a></li>
                                                <div class="separador_dropdown"></div>
                                            <?php endforeach; ?>        
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link menus_top" href="#">CENTRO DE FÉRIAS</a></li>
                                    <div class="separador_nav d-lg-none"></div>
                                    <li class="nav-item"><a class="nav-link menus_top" href="contatos.php">CONTACTOS</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>