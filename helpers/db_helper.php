<?php

$host = "localhost";
$db = "construcao_e_habitacao_bd";
$user = "root";
$pass = "";
$connection = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4;", $user, $pass);


function selectSQL($sql){
    global $connection;
    $consulta = $connection->query($sql);
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

function selectSQLUnico($sql){
    global $connection;
    $consulta = $connection->query($sql);
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}

function iduSQL($sql){
    global $connection;
    $consulta = $connection->query($sql);
}

?>