
<?php

function getEmpreendimentos(){
    $resultado = selectSQL("SELECT * FROM empreendimentos");
    return $resultado;
}

function getEmpreendimentoUnico($id){
    $resultado = selectSQLUnico("SELECT * FROM empreendimentos WHERE id = $id");
    return $resultado;
}
?>