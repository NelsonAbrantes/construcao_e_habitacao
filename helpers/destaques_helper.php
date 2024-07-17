
<?php

function getDestaquesHome(){
    $resultado = selectSQL("SELECT * FROM destaques WHERE max_links =1");
    return $resultado;
}

function getDestaques($pagina){
    $elemtos_por_pagina = 6;
    $offset = ($pagina-1)*6;
    $resultado = selectSQL("SELECT * FROM destaques ORDER BY id DESC LIMIT $elemtos_por_pagina OFFSET $offset");
    return $resultado;
}

function getTotalPaginas(){
    $elementos_por_pagina = 6;
    $resultado = selectSQLUnico("SELECT COUNT(*) FROM destaques");
    return ceil($resultado["COUNT(*)"] / $elementos_por_pagina);
}

function getDestaqueEspecifico($id){
    $resultado = selectSQLUnico("SELECT * FROM destaques WHERE id = $id");
    return $resultado;
}

function getTodosDestaques(){
    $resultado = selectSQL("SELECT * FROM destaques");
    return $resultado;
}

?>