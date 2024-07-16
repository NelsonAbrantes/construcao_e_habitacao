
<?php

function getDestaquesHome(){
    $resultado = selectSQL("SELECT * FROM destaques WHERE max_links =1");
    return $resultado;
}

?>