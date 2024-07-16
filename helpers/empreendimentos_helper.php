
<?php

function getEmpreendimentos(){
    $resultado = selectSQL("SELECT * FROM empreendimentos");
    return $resultado;
}

?>