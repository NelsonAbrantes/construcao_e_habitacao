<?php

$menu_atual = "empreendimentos";

require_once("../requesitos.php");

$form = isset($_GET["id"]);
if($form){
    $id = intval($_GET["id"]);
    iduSQL("DELETE FROM empreendimentos WHERE id=$id");
}
header("Location: empreendimentos.php");
?>