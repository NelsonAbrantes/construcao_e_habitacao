<?php

$menu_atual = "destaques";

require_once("../requesitos.php");

$form = isset($_GET["id"]);
if($form){
    $id = intval($_GET["id"]);
    iduSQL("DELETE FROM destaques WHERE id=$id");
}
header("Location: destaques.php");
?>